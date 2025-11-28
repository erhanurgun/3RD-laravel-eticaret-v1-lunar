<?php

/**
 * Lunar Table Rate Shipping - Relation Managers translations.
 * Lunar Tablo Oranlı Kargo - İlişki Yöneticileri çevirileri.
 */

return [
    'shipping_methods' => [
        'customer_groups' => [
            'description' => "Erişilebilirliğini belirlemek için bu kargo yöntemi ile müşteri gruplarını ilişkilendirin.",
        ],
    ],
    'shipping_rates' => [
        'label' => 'Kargo Ücreti',
        'label_plural' => 'Kargo Ücretleri',
        'title' => 'Kargo Ücreti',
        'title_plural' => 'Kargo Ücretleri',
        'actions' => [
            'create' => [
                'label' => 'Kargo Ücreti Oluştur',
            ],
            'edit' => [
                'label' => 'Kargo Ücretini Düzenle',
            ],
        ],
        'notices' => [
            'prices_incl_tax' => 'Tüm fiyatlar vergi dahildir, minimum harcama hesaplanırken dikkate alınacaktır.',
            'prices_excl_tax' => 'Tüm fiyatlar vergi hariçtir, minimum harcama sepet ara toplamına göre hesaplanacaktır.',
        ],
        'form' => [
            'shipping_method_id' => [
                'label' => 'Kargo Yöntemi',
            ],
            'price' => [
                'label' => 'Fiyat',
            ],
            'prices' => [
                'label' => 'Fiyat Kırılımları',
                'repeater' => [
                    'customer_group_id' => [
                        'label' => 'Müşteri Grubu',
                        'placeholder' => 'Herhangi',
                    ],
                    'currency_id' => [
                        'label' => 'Para Birimi',
                    ],
                    'min_spend' => [
                        'label' => 'Min. Harcama',
                    ],
                    'min_weight' => [
                        'label' => 'Min. Ağırlık',
                    ],
                    'price' => [
                        'label' => 'Fiyat',
                    ],
                ],
            ],
        ],
        'table' => [
            'shipping_method' => [
                'label' => 'Kargo Yöntemi',
            ],
            'price' => [
                'label' => 'Fiyat',
            ],
            'price_breaks_count' => [
                'label' => 'Fiyat Kırılımları',
            ],
        ],
        'empty' => [
            'heading' => 'Kargo Ücreti Yok',
            'description' => 'Başlamak için bir kargo ücreti oluşturun.',
        ],
    ],
    'exclusions' => [
        'label' => 'Kargo İstisnası',
        'label_plural' => 'Kargo İstisnaları',
        'title' => 'Kargo İstisnası',
        'title_plural' => 'Kargo İstisnaları',
        'form' => [
            'purchasable' => [
                'label' => 'Ürün',
            ],
        ],
        'actions' => [
            'create' => [
                'label' => 'Kargo istisna listesi ekle',
            ],
            'attach' => [
                'label' => 'İstisna listesi ekle',
            ],
            'detach' => [
                'label' => 'Kaldır',
            ],
        ],
        'empty' => [
            'heading' => 'Kargo İstisnası Yok',
            'description' => 'Başlamak için bir kargo istisna listesi ekleyin.',
        ],
    ],
];
