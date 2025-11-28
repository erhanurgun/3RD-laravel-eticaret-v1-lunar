<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Lunar\FieldTypes\TranslatedText;
use Lunar\Models\Attribute;
use Lunar\Models\AttributeGroup;
use Lunar\Models\Channel;
use Lunar\Models\Collection;
use Lunar\Models\CollectionGroup;
use Lunar\Models\Country;
use Lunar\Models\Currency;
use Lunar\Models\CustomerGroup;
use Lunar\Models\Language;
use Lunar\Models\Product;
use Lunar\Models\ProductType;
use Lunar\Models\TaxClass;
use Lunar\Models\TaxZone;

class LunarSeeder extends Seeder
{
    /**
     * Lunar temel verilerini oluşturur.
     * Bu seeder, diğer seeder'lardan önce çalıştırılmalıdır.
     */
    public function run(): void
    {
        DB::transaction(function () {
            $this->importCountries();
            $this->createChannel();
            $this->createLanguages();
            $this->createCurrencies();
            $this->createCustomerGroup();
            $this->createCollectionGroup();
            $this->createTaxClass();
            $this->createTaxZone();
            $this->createAttributesAndGroups();
            $this->createProductType();
        });
    }

    /**
     * Ülke verilerini import eder.
     */
    private function importCountries(): void
    {
        if (Country::count() > 0) {
            return;
        }

        Artisan::call('lunar:import:address-data');
    }

    /**
     * Varsayılan kanalı oluşturur.
     */
    private function createChannel(): void
    {
        if (Channel::whereDefault(true)->exists()) {
            return;
        }

        Channel::create([
            'name' => 'Web Mağazası',
            'handle' => 'webstore',
            'default' => true,
            'url' => 'http://localhost',
        ]);
    }

    /**
     * Dil ayarlarını oluşturur.
     */
    private function createLanguages(): void
    {
        if (Language::count() > 0) {
            return;
        }

        Language::create([
            'code' => 'tr',
            'name' => 'Türkçe',
            'default' => true,
        ]);

        Language::create([
            'code' => 'en',
            'name' => 'English',
            'default' => false,
        ]);
    }

    /**
     * Para birimi ayarlarını oluşturur.
     */
    private function createCurrencies(): void
    {
        if (Currency::whereDefault(true)->exists()) {
            return;
        }

        Currency::create([
            'code' => 'TRY',
            'name' => 'Türk Lirası',
            'exchange_rate' => 1,
            'decimal_places' => 2,
            'default' => true,
            'enabled' => true,
        ]);

        Currency::create([
            'code' => 'USD',
            'name' => 'US Dollar',
            'exchange_rate' => 0.03,
            'decimal_places' => 2,
            'default' => false,
            'enabled' => true,
        ]);

        Currency::create([
            'code' => 'EUR',
            'name' => 'Euro',
            'exchange_rate' => 0.028,
            'decimal_places' => 2,
            'default' => false,
            'enabled' => true,
        ]);
    }

    /**
     * Varsayılan müşteri grubunu oluşturur.
     */
    private function createCustomerGroup(): void
    {
        if (CustomerGroup::whereDefault(true)->exists()) {
            return;
        }

        CustomerGroup::create([
            'name' => 'Bireysel',
            'handle' => 'retail',
            'default' => true,
        ]);
    }

    /**
     * Varsayılan koleksiyon grubunu oluşturur.
     */
    private function createCollectionGroup(): void
    {
        if (CollectionGroup::count() > 0) {
            return;
        }

        CollectionGroup::create([
            'name' => 'Ana Koleksiyon',
            'handle' => 'main',
        ]);
    }

    /**
     * Varsayılan vergi sınıfını oluşturur.
     */
    private function createTaxClass(): void
    {
        if (TaxClass::count() > 0) {
            return;
        }

        TaxClass::create([
            'name' => 'Standart KDV',
            'default' => true,
        ]);
    }

    /**
     * Varsayılan vergi bölgesini oluşturur.
     */
    private function createTaxZone(): void
    {
        if (TaxZone::count() > 0) {
            return;
        }

        $taxZone = TaxZone::create([
            'name' => 'Türkiye',
            'zone_type' => 'country',
            'price_display' => 'tax_inclusive',
            'default' => true,
            'active' => true,
        ]);

        // Türkiye'yi vergi bölgesine ekle
        $turkey = Country::where('iso3', 'TUR')->first();
        if ($turkey) {
            $taxZone->countries()->create([
                'country_id' => $turkey->id,
            ]);
        }
    }

    /**
     * Attribute group ve attribute'ları oluşturur.
     */
    private function createAttributesAndGroups(): void
    {
        if (Attribute::count() > 0) {
            return;
        }

        // Ürün attribute grubu
        $productGroup = AttributeGroup::create([
            'attributable_type' => Product::morphName(),
            'name' => collect([
                'tr' => 'Detaylar',
                'en' => 'Details',
            ]),
            'handle' => 'details',
            'position' => 1,
        ]);

        // Koleksiyon attribute grubu
        $collectionGroup = AttributeGroup::create([
            'attributable_type' => Collection::morphName(),
            'name' => collect([
                'tr' => 'Detaylar',
                'en' => 'Details',
            ]),
            'handle' => 'collection_details',
            'position' => 1,
        ]);

        // Ürün name attribute'u
        Attribute::create([
            'attribute_type' => 'product',
            'attribute_group_id' => $productGroup->id,
            'position' => 1,
            'name' => [
                'tr' => 'Ad',
                'en' => 'Name',
            ],
            'handle' => 'name',
            'section' => 'main',
            'type' => TranslatedText::class,
            'required' => true,
            'default_value' => null,
            'configuration' => [
                'richtext' => false,
            ],
            'system' => true,
            'description' => [
                'tr' => '',
                'en' => '',
            ],
        ]);

        // Koleksiyon name attribute'u
        Attribute::create([
            'attribute_type' => 'collection',
            'attribute_group_id' => $collectionGroup->id,
            'position' => 1,
            'name' => [
                'tr' => 'Ad',
                'en' => 'Name',
            ],
            'handle' => 'name',
            'section' => 'main',
            'type' => TranslatedText::class,
            'required' => true,
            'default_value' => null,
            'configuration' => [
                'richtext' => false,
            ],
            'system' => true,
            'description' => [
                'tr' => '',
                'en' => '',
            ],
        ]);

        // Ürün description attribute'u
        Attribute::create([
            'attribute_type' => 'product',
            'attribute_group_id' => $productGroup->id,
            'position' => 2,
            'name' => [
                'tr' => 'Açıklama',
                'en' => 'Description',
            ],
            'handle' => 'description',
            'section' => 'main',
            'type' => TranslatedText::class,
            'required' => false,
            'default_value' => null,
            'configuration' => [
                'richtext' => true,
            ],
            'system' => false,
            'description' => [
                'tr' => '',
                'en' => '',
            ],
        ]);

        // Koleksiyon description attribute'u
        Attribute::create([
            'attribute_type' => 'collection',
            'attribute_group_id' => $collectionGroup->id,
            'position' => 2,
            'name' => [
                'tr' => 'Açıklama',
                'en' => 'Description',
            ],
            'handle' => 'description',
            'section' => 'main',
            'type' => TranslatedText::class,
            'required' => false,
            'default_value' => null,
            'configuration' => [
                'richtext' => true,
            ],
            'system' => false,
            'description' => [
                'tr' => '',
                'en' => '',
            ],
        ]);
    }

    /**
     * Varsayılan ürün tipini oluşturur.
     */
    private function createProductType(): void
    {
        if (ProductType::count() > 0) {
            return;
        }

        $type = ProductType::create([
            'name' => 'Standart Ürün',
        ]);

        $type->mappedAttributes()->attach(
            Attribute::whereAttributeType(Product::morphName())->pluck('id')
        );
    }
}
