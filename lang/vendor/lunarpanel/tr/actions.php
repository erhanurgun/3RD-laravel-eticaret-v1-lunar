<?php

/**
 * Lunar Admin Panel - Actions translations.
 * Lunar Admin Panel - Aksiyon çevirileri.
 */

return [
    'collections' => [
        'create_root' => [
            'label' => 'Kök Koleksiyon Oluştur',
        ],
        'create_child' => [
            'label' => 'Alt Koleksiyon Oluştur',
        ],
        'move' => [
            'label' => 'Koleksiyonu Taşı',
        ],
        'delete' => [
            'label' => 'Sil',
            'notifications' => [
                'cannot_delete' => [
                    'title' => 'Silinemez',
                    'body' => 'Bu koleksiyonun alt koleksiyonları var ve silinemez.',
                ],
            ],
        ],
    ],
    'orders' => [
        'update_status' => [
            'label' => 'Durumu Güncelle',
            'wizard' => [
                'step_one' => [
                    'label' => 'Durum',
                ],
                'step_two' => [
                    'label' => 'E-postalar ve Bildirimler',
                    'no_mailers' => 'Bu durum için kullanılabilir e-posta yok.',
                ],
                'step_three' => [
                    'label' => 'Önizleme ve Kaydet',
                    'no_mailers' => 'Önizleme için e-posta seçilmedi.',
                ],
            ],
            'notification' => [
                'label' => 'Sipariş durumu güncellendi',
            ],
            'billing_email' => [
                'label' => 'Fatura E-postası',
            ],
            'shipping_email' => [
                'label' => 'Kargo E-postası',
            ],
        ],

    ],
];
