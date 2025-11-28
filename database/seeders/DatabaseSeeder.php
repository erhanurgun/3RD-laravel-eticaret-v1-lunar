<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     */
    public function run(): void
    {
        // Lunar temel verileri (diger seeder'lardan once calistirilmali)
        $this->call(LunarSeeder::class);

        // Admin paneli kullanicilari
        $this->call(StaffSeeder::class);

        // Uygulama verileri
        $this->call(CollectionSeeder::class);
        $this->call(AttributeSeeder::class);
        $this->call(TaxSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(ShippingSeeder::class);
        $this->call(OrderSeeder::class);
    }
}
