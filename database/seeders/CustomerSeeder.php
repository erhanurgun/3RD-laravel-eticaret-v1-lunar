<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Support\Facades\DB;
use Lunar\Models\Address;
use Lunar\Models\Country;
use Lunar\Models\Customer;

class CustomerSeeder extends AbstractSeeder
{
    /**
     * Run the database seeds.
     * Demo müşteriler ve adresleri oluşturur.
     */
    public function run(): void
    {
        // Varsayılan olarak Türkiye'yi kullan
        $turkey = Country::where('iso3', 'TUR')->first();

        if (!$turkey) {
            return;
        }

        $countryId = $turkey->id;

        DB::transaction(function () use ($countryId) {
            // en_US kullan çünkü tr_TR'de bazı faker formatları yok
            $faker = Factory::create('en_US');
            $customers = Customer::factory(100)->create();

            foreach ($customers as $customer) {
                $userCount = $faker->numberBetween(1, 3);

                for ($i = 0; $i < $userCount; $i++) {
                    $user = User::factory()->create();
                    $customer->users()->attach($user);
                }

                // Varsayılan kargo adresi
                $this->createAddress($faker, $customer->id, $countryId, true, false);

                // Ek kargo adresi
                $this->createAddress($faker, $customer->id, $countryId, false, false);

                // Varsayılan fatura adresi
                $this->createAddress($faker, $customer->id, $countryId, false, true);

                // Ek adres
                $this->createAddress($faker, $customer->id, $countryId, false, false);
            }
        });
    }

    /**
     * Manuel adres oluşturur (factory locale sorunu nedeniyle).
     */
    private function createAddress(
        \Faker\Generator $faker,
        int $customerId,
        int $countryId,
        bool $shippingDefault,
        bool $billingDefault
    ): void {
        Address::create([
            'customer_id' => $customerId,
            'country_id' => $countryId,
            'title' => $faker->randomElement(['Mr', 'Mrs', 'Ms']),
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'company_name' => $faker->boolean(30) ? $faker->company : null,
            'line_one' => $faker->streetAddress,
            'line_two' => null,
            'line_three' => null,
            'city' => $faker->city,
            'state' => null,
            'postcode' => $faker->postcode,
            'delivery_instructions' => $faker->boolean(20) ? $faker->sentence : null,
            'contact_email' => $faker->safeEmail,
            'contact_phone' => $faker->phoneNumber,
            'shipping_default' => $shippingDefault,
            'billing_default' => $billingDefault,
        ]);
    }
}
