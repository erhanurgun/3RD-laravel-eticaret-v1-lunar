<?php

/**
 * Lunar Admin Panel - Product Variant translations.
 * Lunar Admin Panel - Ürün Varyantı çevirileri.
 */

return [
    'label' => 'Ürün Varyantı',
    'plural_label' => 'Ürün Varyantları',
    'pages' => [
        'edit' => [
            'title' => 'Temel Bilgiler',
        ],
        'media' => [
            'title' => 'Medya',
            'form' => [
                'no_selection' => [
                    'label' => 'Bu varyant için şu anda seçili bir görsel yok.',
                ],
                'no_media_available' => [
                    'label' => 'Bu üründe şu anda kullanılabilir medya yok.',
                ],
                'images' => [
                    'label' => 'Ana Görsel',
                    'helper_text' => 'Bu varyantı temsil eden ürün görselini seçin.',
                ],
            ],
        ],
        'identifiers' => [
            'title' => 'Tanımlayıcılar',
        ],
        'inventory' => [
            'title' => 'Envanter',
        ],
        'shipping' => [
            'title' => 'Kargo',
        ],
    ],
    'form' => [
        'sku' => [
            'label' => 'SKU',
        ],
        'gtin' => [
            'label' => 'Global Ticari Ürün Numarası (GTIN)',
        ],
        'mpn' => [
            'label' => 'Üretici Parça Numarası (MPN)',
        ],
        'ean' => [
            'label' => 'UPC/EAN',
        ],
        'stock' => [
            'label' => 'Stokta',
        ],
        'backorder' => [
            'label' => 'Ön Siparişte',
        ],
        'purchasable' => [
            'label' => 'Satın Alınabilirlik',
            'options' => [
                'always' => 'Her Zaman',
                'in_stock' => 'Stokta Varken',
                'in_stock_or_on_backorder' => 'Stokta veya Ön Siparişte',
            ],
        ],
        'unit_quantity' => [
            'label' => 'Birim Miktarı',
            'helper_text' => '1 birimi oluşturan parça sayısı.',
        ],
        'min_quantity' => [
            'label' => 'Minimum Miktar',
            'helper_text' => 'Tek seferde satın alınabilecek minimum ürün varyantı miktarı.',
        ],
        'quantity_increment' => [
            'label' => 'Miktar Artışı',
            'helper_text' => 'Ürün varyantı bu miktarın katları şeklinde satın alınmalıdır.',
        ],
        'tax_class_id' => [
            'label' => 'Vergi Sınıfı',
        ],
        'shippable' => [
            'label' => 'Kargoya Verilebilir',
        ],
        'length_value' => [
            'label' => 'Uzunluk',
        ],
        'length_unit' => [
            'label' => 'Uzunluk Birimi',
        ],
        'width_value' => [
            'label' => 'Genişlik',
        ],
        'width_unit' => [
            'label' => 'Genişlik Birimi',
        ],
        'height_value' => [
            'label' => 'Yükseklik',
        ],
        'height_unit' => [
            'label' => 'Yükseklik Birimi',
        ],
        'weight_value' => [
            'label' => 'Ağırlık',
        ],
        'weight_unit' => [
            'label' => 'Ağırlık Birimi',
        ],
    ],
];
