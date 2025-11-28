<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >
    <title>{{ __('storefront/common.site.title') }}</title>
    <meta
        name="description"
        content="{{ __('storefront/common.site.description') }}"
    >

    {{-- Hreflang tags for SEO / SEO için hreflang etiketleri --}}
    @foreach(config('localization.supported_locales', []) as $code => $locale)
        <link rel="alternate" hreflang="{{ $code }}" href="{{ url()->current() }}?lang={{ $code }}" />
    @endforeach
    <link rel="alternate" hreflang="x-default" href="{{ url()->current() }}" />

    <link
        href="{{ asset('css/app.css') }}"
        rel="stylesheet"
    >

    <link
        rel="icon"
        href="{{ asset('favicon.svg') }}"
    >
    @livewireStyles
</head>

<body class="antialiased text-gray-900">
    @livewire('components.navigation')

    <main>
        {{ $slot }}
    </main>

    <x-footer />

    @livewireScripts
</body>

</html>
