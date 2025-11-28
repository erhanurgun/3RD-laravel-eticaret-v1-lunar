<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Lunar\Models\Country;
use Lunar\Models\Currency;
use Lunar\Models\Price;
use Lunar\Shipping\Models\ShippingMethod;
use Lunar\Shipping\Models\ShippingRate;
use Lunar\Shipping\Models\ShippingZone;

class ShippingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Kargo bölgeleri ve ücretleri oluşturur.
     */
    public function run(): void
    {
        $currency = Currency::getDefault();

        if (!$currency) {
            return;
        }

        // Türkiye kargo
        $this->createTurkeyShipping($currency);

        // UK kargo
        $this->createUkShipping($currency);

        // US kargo
        $this->createUsShipping($currency);

        // Avrupa kargo
        $this->createEuropeShipping($currency);
    }

    /**
     * Türkiye kargo bölgesini oluşturur.
     */
    private function createTurkeyShipping(Currency $currency): void
    {
        $turkey = Country::where('iso3', 'TUR')->first();

        if (!$turkey) {
            return;
        }

        $shippingMethod = ShippingMethod::create([
            'name' => 'Türkiye Kargo',
            'code' => 'TR',
            'enabled' => true,
            'driver' => 'ship-by',
            'data' => [
                'charge_by' => 'cart_total',
            ],
        ]);

        $shippingZone = ShippingZone::create([
            'name' => 'Türkiye',
            'type' => 'countries',
        ]);

        $shippingRate = ShippingRate::create([
            'shipping_zone_id' => $shippingZone->id,
            'shipping_method_id' => $shippingMethod->id,
            'enabled' => true,
        ]);

        $shippingZone->countries()->sync($turkey->id);

        // Standart kargo ücreti
        Price::create([
            'priceable_type' => (new ShippingRate())->getMorphClass(),
            'priceable_id' => $shippingRate->id,
            'price' => 5000,
            'min_quantity' => 1,
            'currency_id' => $currency->id,
        ]);

        // 500 TL üstü ücretsiz kargo
        Price::create([
            'priceable_type' => (new ShippingRate())->getMorphClass(),
            'priceable_id' => $shippingRate->id,
            'price' => 0,
            'min_quantity' => 50000,
            'currency_id' => $currency->id,
        ]);
    }

    /**
     * UK kargo bölgesini oluşturur.
     */
    private function createUkShipping(Currency $currency): void
    {
        $uk = Country::where('iso3', 'GBR')->first();

        if (!$uk) {
            return;
        }

        $shippingMethod = ShippingMethod::create([
            'name' => 'Standard Shipping',
            'code' => 'STNDRD',
            'enabled' => true,
            'driver' => 'ship-by',
            'data' => [
                'charge_by' => 'cart_total',
            ],
        ]);

        $shippingZone = ShippingZone::create([
            'name' => 'UK',
            'type' => 'countries',
        ]);

        $shippingRate = ShippingRate::create([
            'shipping_zone_id' => $shippingZone->id,
            'shipping_method_id' => $shippingMethod->id,
            'enabled' => true,
        ]);

        $shippingZone->countries()->sync($uk->id);

        Price::create([
            'priceable_type' => (new ShippingRate())->getMorphClass(),
            'priceable_id' => $shippingRate->id,
            'price' => 1000,
            'min_quantity' => 1,
            'currency_id' => $currency->id,
        ]);

        Price::create([
            'priceable_type' => (new ShippingRate())->getMorphClass(),
            'priceable_id' => $shippingRate->id,
            'price' => 0,
            'min_quantity' => 10000,
            'currency_id' => $currency->id,
        ]);
    }

    /**
     * US kargo bölgesini oluşturur.
     */
    private function createUsShipping(Currency $currency): void
    {
        $us = Country::where('iso3', 'USA')->first();

        if (!$us) {
            return;
        }

        $shippingMethod = ShippingMethod::create([
            'name' => 'US Shipping',
            'code' => 'USA',
            'enabled' => true,
            'driver' => 'ship-by',
            'data' => [
                'charge_by' => 'cart_total',
            ],
        ]);

        $shippingZone = ShippingZone::create([
            'name' => 'America',
            'type' => 'countries',
        ]);

        $shippingRate = ShippingRate::create([
            'shipping_zone_id' => $shippingZone->id,
            'shipping_method_id' => $shippingMethod->id,
            'enabled' => true,
        ]);

        $shippingZone->countries()->sync($us->id);

        Price::create([
            'priceable_type' => (new ShippingRate())->getMorphClass(),
            'priceable_id' => $shippingRate->id,
            'price' => 5000,
            'min_quantity' => 1,
            'currency_id' => $currency->id,
        ]);
    }

    /**
     * Avrupa kargo bölgesini oluşturur.
     */
    private function createEuropeShipping(Currency $currency): void
    {
        $euroCountries = Country::whereIn('iso3', [
            'AUT', 'BEL', 'BGR', 'HRV', 'CYP', 'CZE', 'DNK', 'EST',
            'FIN', 'FRA', 'DEU', 'GRC', 'HUN', 'IRL', 'ITA', 'LVA',
            'LTU', 'LUX', 'MLT', 'NLD', 'POL', 'ROU', 'SVK', 'ESP', 'SWE',
        ])->pluck('id');

        if ($euroCountries->isEmpty()) {
            return;
        }

        $shippingMethod = ShippingMethod::create([
            'name' => 'Europe Delivery',
            'code' => 'EURO',
            'enabled' => true,
            'driver' => 'ship-by',
        ]);

        $shippingZone = ShippingZone::create([
            'name' => 'Europe',
            'type' => 'countries',
        ]);

        $shippingRate = ShippingRate::create([
            'shipping_zone_id' => $shippingZone->id,
            'shipping_method_id' => $shippingMethod->id,
            'enabled' => true,
        ]);

        $shippingZone->countries()->sync($euroCountries);

        Price::create([
            'priceable_type' => (new ShippingRate())->getMorphClass(),
            'priceable_id' => $shippingRate->id,
            'price' => 2000,
            'min_quantity' => 1,
            'currency_id' => $currency->id,
        ]);
    }
}
