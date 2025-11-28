{{-- variant: dark (acik arka plan icin koyu logo), light (koyu arka plan icin acik logo) --}}
@props(['variant' => 'dark'])

<img
    src="{{ asset('upload/logo/' . $variant . '.svg') }}"
    alt="{{ config('app.name', 'Logo') }}"
    {{ $attributes }}
/>
