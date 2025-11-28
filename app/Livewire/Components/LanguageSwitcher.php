<?php

namespace App\Livewire\Components;

use Illuminate\View\View;
use Livewire\Component;

/**
 * Language Switcher Component.
 * Dil değiştirici bileşeni. Header'da TR/EN seçimi sağlar.
 */
class LanguageSwitcher extends Component
{
    /**
     * Get supported locales from config.
     * Desteklenen dilleri config'den alır.
     *
     * @return array<string, array<string, mixed>>
     */
    public function getLocalesProperty(): array
    {
        return config('localization.supported_locales', []);
    }

    /**
     * Get current locale.
     * Mevcut dili döndürür.
     */
    public function getCurrentLocaleProperty(): string
    {
        return app()->getLocale();
    }

    /**
     * Get the switch URL for a specific locale.
     * Belirtilen dil için geçiş URL'ini oluşturur.
     */
    public function getSwitchUrl(string $locale): string
    {
        $currentUrl = url()->current();
        $separator = str_contains($currentUrl, '?') ? '&' : '?';

        return $currentUrl . $separator . 'lang=' . $locale;
    }

    /**
     * Check if given locale is the current locale.
     * Verilen dilin mevcut dil olup olmadığını kontrol eder.
     */
    public function isCurrentLocale(string $locale): bool
    {
        return $this->currentLocale === $locale;
    }

    public function render(): View
    {
        return view('livewire.components.language-switcher');
    }
}
