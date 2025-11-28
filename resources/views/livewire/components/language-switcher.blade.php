<div class="relative" x-data="{ open: false }">
    {{-- Dil değiştirici butonu --}}
    <button
        x-on:click="open = !open"
        type="button"
        class="flex items-center gap-1.5 px-2 py-1.5 text-sm font-medium text-gray-700 transition rounded-md hover:text-gray-900 hover:bg-gray-100"
        aria-haspopup="true"
        :aria-expanded="open"
    >
        <span class="uppercase">{{ $this->currentLocale }}</span>
        <svg
            class="w-4 h-4 transition-transform"
            :class="{ 'rotate-180': open }"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
        >
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    {{-- Dropdown menü --}}
    <div
        x-show="open"
        x-on:click.away="open = false"
        x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        x-cloak
        class="absolute right-0 z-50 mt-2 w-36 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
        role="menu"
        aria-orientation="vertical"
    >
        <div class="py-1" role="none">
            @foreach ($this->locales as $code => $locale)
                <a
                    href="{{ $this->getSwitchUrl($code) }}"
                    role="menuitem"
                    @class([
                        'flex items-center gap-2 px-4 py-2 text-sm',
                        'bg-gray-100 text-gray-900 font-medium' => $this->isCurrentLocale($code),
                        'text-gray-700 hover:bg-gray-50' => !$this->isCurrentLocale($code),
                    ])
                >
                    <span class="uppercase font-medium w-6">{{ $code }}</span>
                    <span>{{ $locale['native'] }}</span>
                    @if ($this->isCurrentLocale($code))
                        <svg class="w-4 h-4 ml-auto text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    @endif
                </a>
            @endforeach
        </div>
    </div>
</div>
