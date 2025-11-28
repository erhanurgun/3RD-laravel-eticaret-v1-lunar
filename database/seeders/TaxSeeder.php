<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Lunar\Models\Country;
use Lunar\Models\TaxClass;
use Lunar\Models\TaxRate;
use Lunar\Models\TaxZone;

class TaxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Türkiye için KDV oranları oluşturur.
     */
    public function run(): void
    {
        $taxClass = TaxClass::getDefault();

        if (!$taxClass) {
            return;
        }

        $turkey = Country::where('iso3', 'TUR')->first();

        if (!$turkey) {
            return;
        }

        // Mevcut varsayılan vergi bölgesini kullan veya yeni oluştur
        $taxZone = TaxZone::whereDefault(true)->first();

        if (!$taxZone) {
            $taxZone = TaxZone::create([
                'name' => 'Türkiye',
                'active' => true,
                'default' => true,
                'zone_type' => 'country',
                'price_display' => 'tax_inclusive',
            ]);

            $taxZone->countries()->create([
                'country_id' => $turkey->id,
            ]);
        }

        // Mevcut vergi oranı var mı kontrol et
        if ($taxZone->taxRates()->exists()) {
            return;
        }

        // Türkiye KDV oranı (%20)
        $taxRate = TaxRate::create([
            'name' => 'KDV',
            'tax_zone_id' => $taxZone->id,
            'priority' => 1,
        ]);

        $taxRate->taxRateAmounts()->create([
            'percentage' => 20,
            'tax_class_id' => $taxClass->id,
        ]);
    }
}
