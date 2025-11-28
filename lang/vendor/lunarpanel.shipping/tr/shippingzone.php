<?php

/**
 * Lunar Table Rate Shipping - Shipping Zone translations.
 * Lunar Tablo Oranlı Kargo - Kargo Bölgesi çevirileri.
 */

return [
    'label' => 'Kargo Bölgesi',
    'label_plural' => 'Kargo Bölgeleri',
    'form' => [
        'unrestricted' => [
            'content' => 'Bu kargo bölgesinde herhangi bir kısıtlama yok ve ödeme sırasında tüm müşteriler için kullanılabilir olacak.',
        ],
        'name' => [
            'label' => 'Ad',
        ],
        'type' => [
            'label' => 'Tip',
            'options' => [
                'unrestricted' => 'Kısıtlamasız',
                'countries' => 'Ülkelerle Sınırla',
                'states' => 'Eyalet / İllerle Sınırla',
                'postcodes' => 'Posta Kodlarıyla Sınırla',
            ],
        ],
        'country' => [
            'label' => 'Ülke',
        ],
        'states' => [
            'label' => 'Eyaletler',
        ],
        'countries' => [
            'label' => 'Ülkeler',
        ],
        'postcodes' => [
            'label' => 'Posta Kodları',
            'helper' => 'Her posta kodunu yeni satıra yazın. NW* gibi jokerler desteklenir',
        ],
    ],
    'table' => [
        'name' => [
            'label' => 'Ad',
        ],
        'type' => [
            'label' => 'Tip',
            'options' => [
                'unrestricted' => 'Kısıtlamasız',
                'countries' => 'Ülkelerle Sınırlı',
                'states' => 'Eyalet / İllerle Sınırlı',
                'postcodes' => 'Posta Kodlarıyla Sınırlı',
            ],
        ],
    ],
    'pages' => [
        'edit' => [
            'label' => 'Kargo Bölgesini Düzenle',
        ],
        'rates' => [
            'label' => 'Kargo Ücretleri',
        ],
        'exclusions' => [
            'label' => 'Kargo İstisnaları',
        ],
    ],
    'empty' => [
        'heading' => 'Kargo Bölgesi Yok',
        'description' => 'Başlamak için bir kargo bölgesi oluşturun.',
    ],
];
