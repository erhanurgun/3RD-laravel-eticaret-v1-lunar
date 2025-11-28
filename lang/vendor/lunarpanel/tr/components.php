<?php

/**
 * Lunar Admin Panel - Components translations.
 * Lunar Admin Panel - Bileşen çevirileri.
 */

return [
    'empty_placeholder' => 'Veri yok',

    'tags' => [
        'notification' => [

            'updated' => 'Etiketler güncellendi',

        ],
    ],

    'activity-log' => [

        'input' => [

            'placeholder' => 'Yorum ekle',

        ],

        'action' => [

            'add-comment' => 'Yorum Ekle',

        ],

        'system' => 'Sistem',

        'partials' => [
            'orders' => [
                'order_created' => 'Sipariş Oluşturuldu',

                'status_change' => 'Durum güncellendi',

                'capture' => ':last_four ile biten karttan :amount tutarında ödeme',

                'authorized' => ':last_four ile biten karttan :amount tutarında yetkilendirme',

                'refund' => ':last_four ile biten karttan :amount tutarında iade',

                'address' => ':type güncellendi',

                'billingAddress' => 'Fatura adresi',

                'shippingAddress' => 'Teslimat adresi',
            ],

            'update' => [
                'updated' => ':model güncellendi',
            ],

            'create' => [
                'created' => ':model oluşturuldu',
            ],

            'tags' => [
                'updated' => 'Etiketler güncellendi',
                'added' => 'Eklendi',
                'removed' => 'Kaldırıldı',
            ],
        ],

        'notification' => [
            'comment_added' => 'Yorum eklendi',
        ],

    ],

    'forms' => [
        'youtube' => [
            'helperText' => 'YouTube video ID girin. Örn: dQw4w9WgXcQ',
        ],
    ],

    'collection-tree-view' => [
        'actions' => [
            'move' => [
                'form' => [
                    'target_id' => [
                        'label' => 'Üst Koleksiyon',
                    ],
                ],
            ],
        ],
        'notifications' => [
            'collections-reordered' => [
                'success' => 'Koleksiyonlar Yeniden Sıralandı',
            ],
            'node-expanded' => [
                'danger' => 'Koleksiyonlar yüklenemedi',
            ],
            'delete' => [
                'danger' => 'Koleksiyon silinemedi',
            ],
        ],
    ],

    'product-options-list' => [
        'add-option' => [
            'label' => 'Seçenek Ekle',
        ],
        'delete-option' => [
            'label' => 'Seçeneği Sil',
        ],
        'remove-shared-option' => [
            'label' => 'Paylaşılan Seçeneği Kaldır',
        ],
        'add-value' => [
            'label' => 'Başka Değer Ekle',
        ],
        'name' => [
            'label' => 'Ad',
        ],
        'values' => [
            'label' => 'Değerler',
        ],
    ],
];
