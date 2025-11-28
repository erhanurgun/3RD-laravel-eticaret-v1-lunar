<section class="bg-white">
    <div class="max-w-screen-xl px-4 py-32 mx-auto sm:px-6 lg:px-8 lg:py-48">
        <div class="max-w-xl mx-auto text-center">
            <span class="text-xs font-medium text-center bg-orange-100 text-orange-700 px-3 py-1.5 rounded-lg">
                {{ __('storefront/checkout.success.test_order_notice') }}
            </span>

            <h1 class="mt-8 text-3xl font-extrabold sm:text-5xl">
                <span class="block mt-1 text-blue-500">
                    {{ __('storefront/checkout.success.title') }}
                </span>
            </h1>

            <p class="mt-4 font-medium sm:text-lg">
                {{ __('storefront/checkout.success.reference') }}

                <strong>
                    {{ $order->reference }}
                </strong>
            </p>

            <a class="inline-block px-8 py-3 mt-8 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:ring-1 hover:ring-blue-600"
               href="{{ url('/') }}">
                {{ __('storefront/checkout.success.back_home') }}
            </a>
        </div>
    </div>
</section>
