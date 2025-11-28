<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Lunar\Base\OrderReferenceGenerator;
use Lunar\Base\ValueObjects\Cart\TaxBreakdown;
use Lunar\Base\ValueObjects\Cart\TaxBreakdownAmount;
use Lunar\DataTypes\Price;
use Lunar\Facades\Pricing;
use Lunar\Models\Channel;
use Lunar\Models\Country;
use Lunar\Models\Currency;
use Lunar\Models\Order;
use Lunar\Models\OrderAddress;
use Lunar\Models\ProductVariant;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Demo siparişler oluşturur.
     */
    public function run(): void
    {
        $variants = ProductVariant::get();
        $users = User::get();
        $channel = Channel::getDefault();
        $currency = Currency::getDefault();
        $turkey = Country::where('iso3', 'TUR')->first();

        // Gerekli veriler yoksa çık
        if (!$channel || !$currency || !$turkey || $variants->isEmpty()) {
            return;
        }

        $countryId = $turkey->id;

        DB::transaction(function () use ($variants, $users, $channel, $currency, $countryId) {
            // en_US kullan çünkü tr_TR'de bazı faker formatları yok
            $faker = Factory::create('en_US');

            for ($i = 0; $i < 201; $i++) {
                $generator = app(OrderReferenceGenerator::class);

                $itemModels = $variants->shuffle()->take($faker->numberBetween(1, 15));

                $lines = collect();

                foreach ($itemModels as $variant) {
                    $quantity = $faker->numberBetween(1, 10);

                    $pricing = Pricing::for($variant, $quantity)->get();
                    $price = $pricing->matched->price->value;
                    $subTotal = $price * $quantity;
                    $tax = (int) ($subTotal * .2);
                    $options = $variant->values->map(fn ($value) => $value->translate('name'));

                    $lines->push([
                        'quantity' => $quantity,
                        'purchasable_type' => (new ProductVariant)->getMorphClass(),
                        'purchasable_id' => $variant->id,
                        'type' => 'physical',
                        'description' => $variant->product->translateAttribute('name'),
                        'option' => $options->join(', '),
                        'identifier' => $variant->sku,
                        'unit_price' => $price,
                        'unit_quantity' => $variant->unit_quantity,
                        'sub_total' => $subTotal,
                        'discount_total' => 0,
                        'tax_total' => $tax,
                        'total' => $subTotal + $tax,
                        'tax_breakdown' => new TaxBreakdown(collect([
                            new TaxBreakdownAmount(
                                price: new Price($tax, $currency, 1),
                                identifier: 'VAT',
                                description: 'VAT',
                                percentage: 20,
                            ),
                        ])),
                    ]);
                }

                // Is this for a user?
                $hasUser = $faker->boolean(75);

                $order = [
                    'channel_id' => $channel->id,
                    'status' => 'payment-received',
                    'sub_total' => $lines->sum('sub_total'),
                    'reference' => null,
                    'tax_total' => $lines->sum('tax_total'),
                    'total' => $lines->sum('total'),
                    'currency_code' => $currency->code,
                    'placed_at' => $faker->dateTimeBetween('-1 year'),
                    'compare_currency_code' => $currency->code,
                    'meta' => [],
                    'tax_breakdown' => new TaxBreakdown(collect([
                        new TaxBreakdownAmount(
                            price: new Price($lines->sum('tax_total'), $currency, 1),
                            identifier: 'VAT',
                            description: 'VAT',
                            percentage: 20,
                        ),
                    ])),
                ];

                if ($hasUser) {
                    $user = $users->shuffle()->first();

                    $order['customer_id'] = $user->customers->first()?->id;
                    $order['user_id'] = $user->id;
                }

                $orderModel = Order::factory()->create($order);

                $orderModel->reference = $generator->generate($orderModel);
                $orderModel->save();

                // Kargo adresi
                $shippingData = $this->createOrderAddressData($faker, $orderModel->id, 'shipping', $countryId);
                $shipping = OrderAddress::create($shippingData);

                // Fatura adresi (bazen kargo adresiyle aynı)
                if ($faker->boolean()) {
                    $billingData = $shippingData;
                    $billingData['type'] = 'billing';
                    unset($billingData['id']);
                    OrderAddress::create($billingData);
                } else {
                    $billingData = $this->createOrderAddressData($faker, $orderModel->id, 'billing', $countryId);
                    OrderAddress::create($billingData);
                }

                $orderModel->lines()->createMany($lines->toArray());
            }
        });
    }

    /**
     * Manuel sipariş adresi verisi oluşturur (factory locale sorunu nedeniyle).
     */
    private function createOrderAddressData(
        \Faker\Generator $faker,
        int $orderId,
        string $type,
        int $countryId
    ): array {
        return [
            'order_id' => $orderId,
            'country_id' => $countryId,
            'type' => $type,
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
        ];
    }
}
