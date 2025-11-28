<section class="bg-gray-50">
    <div class="max-w-screen-xl px-4 py-32 mx-auto sm:px-6 lg:px-8">
        <div class="max-w-xl mx-auto text-center">
            <h1 class="text-3xl font-extrabold sm:text-5xl">
                {{ __('storefront/common.welcome.title') }}

                <span class="text-indigo-600">
                    {{ __('storefront/common.welcome.lunar') }}
                </span>

                {{ __('storefront/common.welcome.demo_store') }}
            </h1>

            <p class="mt-4 font-medium sm:leading-relaxed sm:text-xl">
                {{ __('storefront/common.welcome.description') }}
            </p>

            <div class="flex flex-wrap justify-center gap-4 mt-8">
                <a class="block w-full px-12 py-3 font-medium text-white bg-indigo-600 rounded shadow sm:w-auto active:bg-indigo-500 hover:bg-indigo-700 focus:outline-none focus:ring"
                   href="https://lunarphp.io/"
                   target="_blank"
                   rel="noopener noreferrer">
                    {{ __('storefront/common.welcome.lunar_website') }}
                </a>

                <a class="block w-full px-12 py-3 font-medium text-indigo-600 rounded shadow sm:w-auto hover:text-indigo-700 active:text-indigo-500 focus:outline-none focus:ring"
                   href="https://github.com/lunarphp/demo-store"
                   target="_blank"
                   rel="noopener noreferrer">
                    {{ __('storefront/common.welcome.demo_repo') }}
                </a>
            </div>
        </div>
    </div>
</section>
