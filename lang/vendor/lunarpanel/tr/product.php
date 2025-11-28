<?php

/**
 * Lunar Admin Panel - Product translations.
 * Lunar Admin Panel - Ürün çevirileri.
 */

return [

    'label' => 'Ürün',

    'plural_label' => 'Ürünler',

    'tabs' => [
        'all' => 'Tümü',
    ],

    'status' => [
        'unpublished' => [
            'content' => 'Şu anda taslak durumunda, bu ürün tüm kanallar ve müşteri grupları için gizli.',
        ],
        'availability' => [
            'customer_groups' => 'Bu ürün şu anda tüm müşteri grupları için kullanılamıyor.',
            'channels' => 'Bu ürün şu anda tüm kanallar için kullanılamıyor.',
        ],
    ],

    'table' => [
        'status' => [
            'label' => 'Durum',
            'states' => [
                'deleted' => 'Silindi',
                'draft' => 'Taslak',
                'published' => 'Yayında',
            ],
        ],
        'name' => [
            'label' => 'Ad',
        ],
        'brand' => [
            'label' => 'Marka',
        ],
        'sku' => [
            'label' => 'SKU',
        ],
        'stock' => [
            'label' => 'Stok',
        ],
        'producttype' => [
            'label' => 'Ürün Tipi',
        ],
    ],

    'actions' => [
        'edit_status' => [
            'label' => 'Durumu Güncelle',
            'heading' => 'Durumu Güncelle',
        ],
    ],

    'form' => [
        'name' => [
            'label' => 'Ad',
        ],
        'brand' => [
            'label' => 'Marka',
        ],
        'sku' => [
            'label' => 'SKU',
        ],
        'producttype' => [
            'label' => 'Ürün Tipi',
        ],
        'status' => [
            'label' => 'Durum',
            'options' => [
                'published' => [
                    'label' => 'Yayında',
                    'description' => 'Bu ürün tüm etkin müşteri grupları ve kanallar için kullanılabilir olacak',
                ],
                'draft' => [
                    'label' => 'Taslak',
                    'description' => 'Bu ürün tüm kanallar ve müşteri grupları için gizlenecek',
                ],
            ],
        ],
        'tags' => [
            'label' => 'Etiketler',
            'helper_text' => 'Etiketleri Enter, Tab veya virgül (,) ile ayırın',
        ],
        'collections' => [
            'label' => 'Koleksiyonlar',
            'select_collection' => 'Koleksiyon seçin',
        ],
    ],

    'pages' => [
        'availability' => [
            'label' => 'Erişilebilirlik',
        ],
        'edit' => [
            'title' => 'Temel Bilgiler',
        ],
        'identifiers' => [
            'label' => 'Ürün Tanımlayıcıları',
        ],
        'inventory' => [
            'label' => 'Envanter',
        ],
        'pricing' => [
            'form' => [
                'tax_class_id' => [
                    'label' => 'Vergi Sınıfı',
                ],
                'tax_ref' => [
                    'label' => 'Vergi Referansı',
                    'helper_text' => 'İsteğe bağlı, 3. taraf sistemlerle entegrasyon için.',
                ],
            ],
        ],
        'shipping' => [
            'label' => 'Kargo',
        ],
        'variants' => [
            'label' => 'Varyantlar',
        ],
        'collections' => [
            'label' => 'Koleksiyonlar',
            'select_collection' => 'Koleksiyon seçin',
        ],
        'associations' => [
            'label' => 'Ürün İlişkileri',
        ],
    ],

];
