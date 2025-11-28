<?php

/**
 * Lunar Admin Panel - Product Option translations.
 * Lunar Admin Panel - Ürün Seçeneği çevirileri.
 */

return [

    'label' => 'Ürün Seçeneği',

    'plural_label' => 'Ürün Seçenekleri',

    'table' => [
        'name' => [
            'label' => 'Ad',
        ],
        'label' => [
            'label' => 'Etiket',
        ],
        'handle' => [
            'label' => 'Tanımlayıcı',
        ],
        'shared' => [
            'label' => 'Paylaşımlı',
        ],
    ],

    'form' => [
        'name' => [
            'label' => 'Ad',
        ],
        'label' => [
            'label' => 'Etiket',
        ],
        'handle' => [
            'label' => 'Tanımlayıcı',
        ],
    ],

    'widgets' => [
        'product-options' => [
            'notifications' => [
                'save-variants' => [
                    'success' => [
                        'title' => 'Ürün Varyantları Kaydedildi',
                    ],
                ],
            ],
            'actions' => [
                'cancel' => [
                    'label' => 'İptal',
                ],
                'save-options' => [
                    'label' => 'Seçenekleri Kaydet',
                ],
                'add-shared-option' => [
                    'label' => 'Paylaşımlı Seçenek Ekle',
                    'form' => [
                        'product_option' => [
                            'label' => 'Ürün Seçeneği',
                        ],
                        'no_shared_components' => [
                            'label' => 'Kullanılabilir paylaşımlı seçenek yok.',
                        ],
                        'preselect' => [
                            'label' => 'Tüm değerleri varsayılan olarak önceden seç.',
                        ],
                    ],
                ],
                'add-restricted-option' => [
                    'label' => 'Seçenek Ekle',
                ],
            ],
            'options-list' => [
                'empty' => [
                    'heading' => 'Yapılandırılmış ürün seçeneği yok',
                    'description' => 'Varyant oluşturmaya başlamak için paylaşımlı veya kısıtlı bir ürün seçeneği ekleyin.',
                ],
            ],
            'options-table' => [
                'title' => 'Ürün Seçenekleri',
                'configure-options' => [
                    'label' => 'Seçenekleri Yapılandır',
                ],
                'table' => [
                    'option' => [
                        'label' => 'Seçenek',
                    ],
                    'values' => [
                        'label' => 'Değerler',
                    ],
                ],
            ],
            'variants-table' => [
                'title' => 'Ürün Varyantları',
                'actions' => [
                    'create' => [
                        'label' => 'Varyant Oluştur',
                    ],
                    'edit' => [
                        'label' => 'Düzenle',
                    ],
                    'delete' => [
                        'label' => 'Sil',
                    ],
                ],
                'empty' => [
                    'heading' => 'Varyant Yapılandırılmadı',
                ],
                'table' => [
                    'new' => [
                        'label' => 'YENİ',
                    ],
                    'option' => [
                        'label' => 'Seçenek',
                    ],
                    'sku' => [
                        'label' => 'SKU',
                    ],
                    'price' => [
                        'label' => 'Fiyat',
                    ],
                    'stock' => [
                        'label' => 'Stok',
                    ],
                ],
            ],
        ],
    ],

];
