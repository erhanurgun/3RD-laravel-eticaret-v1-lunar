<?php

/**
 * Localization configuration file.
 * Dil ve yerelleştirme ayarları.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Supported Locales
    |--------------------------------------------------------------------------
    |
    | Desteklenen diller ve özellikleri. Her dil için isim, yerel isim
    | ve RTL (sağdan sola) desteği tanımlanır.
    |
    */

    'supported_locales' => [
        'tr' => [
            'name' => 'Turkish',
            'native' => 'Türkçe',
            'rtl' => false,
        ],
        'en' => [
            'name' => 'English',
            'native' => 'English',
            'rtl' => false,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Locale
    |--------------------------------------------------------------------------
    |
    | Varsayılan dil. config/app.php'deki locale değerini kullanır
    | veya env dosyasından APP_LOCALE değerini alır.
    |
    */

    'default_locale' => env('APP_LOCALE', 'tr'),

    /*
    |--------------------------------------------------------------------------
    | Session Key
    |--------------------------------------------------------------------------
    |
    | Dil tercihinin session'da saklanacağı anahtar.
    |
    */

    'session_key' => 'app_locale',

    /*
    |--------------------------------------------------------------------------
    | Cookie Name
    |--------------------------------------------------------------------------
    |
    | Dil tercihinin cookie'de saklanacağı isim.
    | Session dışında tarayıcı kapatılsa bile hatırlanır.
    |
    */

    'cookie_name' => 'app_locale',

    /*
    |--------------------------------------------------------------------------
    | Cookie Duration
    |--------------------------------------------------------------------------
    |
    | Cookie'nin geçerlilik süresi (dakika cinsinden).
    | Varsayılan: 1 yıl (60 * 24 * 365 = 525600 dakika)
    |
    */

    'cookie_duration' => 60 * 24 * 365,

];
