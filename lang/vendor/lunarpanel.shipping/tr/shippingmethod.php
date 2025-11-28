<?php

/**
 * Lunar Table Rate Shipping - Shipping Method translations.
 * Lunar Tablo Oranlı Kargo - Kargo Yöntemi çevirileri.
 */

return [
    'label_plural' => 'Kargo Yöntemleri',
    'label' => 'Kargo Yöntemi',
    'form' => [
        'name' => [
            'label' => 'Ad',
        ],
        'description' => [
            'label' => 'Açıklama',
        ],
        'code' => [
            'label' => 'Kod',
        ],
        'cutoff' => [
            'label' => 'Son Kabul Saati',
        ],
        'charge_by' => [
            'label' => 'Ücretlendirme Kriteri',
            'options' => [
                'cart_total' => 'Sepet Toplamı',
                'weight' => 'Ağırlık',
            ],
        ],
        'driver' => [
            'label' => 'Tip',
            'options' => [
                'ship-by' => 'Standart',
                'collection' => 'Mağazadan Teslim',
            ],
        ],
        'stock_available' => [
            'label' => 'Sepetteki tüm ürünlerin stokta olması gerekli',
        ],
    ],
    'table' => [
        'name' => [
            'label' => 'Ad',
        ],
        'code' => [
            'label' => 'Kod',
        ],
        'driver' => [
            'label' => 'Tip',
            'options' => [
                'ship-by' => 'Standart',
                'collection' => 'Mağazadan Teslim',
            ],
        ],
    ],
    'pages' => [
        'edit' => [
            'label' => 'Kargo Yöntemini Düzenle',
        ],
        'availability' => [
            'label' => 'Erişilebilirlik',
            'customer_groups' => 'Bu kargo yöntemi şu anda tüm müşteri grupları için kullanılamıyor.',
        ],
    ],
    'empty' => [
        'heading' => 'Kargo Yöntemi Yok',
        'description' => 'Başlamak için bir kargo yöntemi oluşturun.',
    ],
];
