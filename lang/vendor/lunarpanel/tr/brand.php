<?php

/**
 * Lunar Admin Panel - Brand translations.
 * Lunar Admin Panel - Marka çevirileri.
 */

return [

    'label' => 'Marka',

    'plural_label' => 'Markalar',

    'table' => [
        'name' => [
            'label' => 'Ad',
        ],
        'products_count' => [
            'label' => 'Ürün Sayısı',
        ],
    ],

    'form' => [
        'name' => [
            'label' => 'Ad',
        ],
    ],

    'action' => [
        'delete' => [
            'notification' => [
                'error_protected' => 'Bu marka, ilişkili ürünler olduğu için silinemez.',
            ],
        ],
    ],
    'pages' => [
        'edit' => [
            'title' => 'Temel Bilgiler',
        ],
        'media' => [
            'label' => 'Medya',
            'title' => 'Görseller',
        ],
        'products' => [
            'label' => 'Ürünler',
            'actions' => [
                'attach' => [
                    'label' => 'Ürün İlişkilendir',
                    'form' => [
                        'record_id' => [
                            'label' => 'Ürün',
                        ],
                    ],
                    'notification' => [
                        'success' => 'Ürün markaya ilişkilendirildi',
                    ],
                ],
                'detach' => [
                    'notification' => [
                        'success' => 'Ürün ilişkisi kaldırıldı.',
                    ],
                ],
            ],
        ],
        'collections' => [
            'label' => 'Koleksiyonlar',
            'table' => [
                'header_actions' => [
                    'attach' => [
                        'record_select' => [
                            'placeholder' => 'Koleksiyon seçin',
                        ],
                    ],
                ],
            ],
            'actions' => [
                'attach' => [
                    'label' => 'Koleksiyon İlişkilendir',
                ],
            ],
        ],
    ],

];
