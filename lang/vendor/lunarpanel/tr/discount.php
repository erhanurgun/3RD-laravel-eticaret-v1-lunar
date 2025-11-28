<?php

/**
 * Lunar Admin Panel - Discount translations.
 * Lunar Admin Panel - İndirim çevirileri.
 */

return [
    'plural_label' => 'İndirimler',
    'label' => 'İndirim',
    'tabs' => [
        'all' => 'Tümü',
        'published' => 'Yayında',
        'draft' => 'Taslak',
    ],
    'form' => [
        'type' => [
            'label' => 'Tip',
        ],
        'conditions' => [
            'heading' => 'Koşullar',
        ],
        'buy_x_get_y' => [
            'heading' => 'X Al Y Kazan',
        ],
        'amount_off' => [
            'heading' => 'Tutar İndirimi',
        ],
        'name' => [
            'label' => 'Ad',
        ],
        'handle' => [
            'label' => 'Tanımlayıcı',
        ],
        'starts_at' => [
            'label' => 'Başlangıç Tarihi',
        ],
        'ends_at' => [
            'label' => 'Bitiş Tarihi',
        ],
        'priority' => [
            'label' => 'Öncelik',
            'helper_text' => 'Yüksek öncelikli indirimler önce uygulanır.',
            'options' => [
                'low' => [
                    'label' => 'Düşük',
                ],
                'medium' => [
                    'label' => 'Orta',
                ],
                'high' => [
                    'label' => 'Yüksek',
                ],
            ],
        ],
        'stop' => [
            'label' => 'Bu indirimden sonra diğer indirimlerin uygulanmasını durdur',
        ],
        'coupon' => [
            'label' => 'Kupon',
            'helper_text' => 'İndirimin uygulanması için gereken kuponu girin, boş bırakılırsa otomatik uygulanır.',
        ],
        'max_uses' => [
            'label' => 'Maksimum Kullanım',
            'helper_text' => 'Sınırsız kullanım için boş bırakın.',
        ],
        'max_uses_per_user' => [
            'label' => 'Kullanıcı Başına Maksimum Kullanım',
            'helper_text' => 'Sınırsız kullanım için boş bırakın.',
        ],
        'minimum_cart_amount' => [
            'label' => 'Minimum Sepet Tutarı',
        ],
        'min_qty' => [
            'label' => 'Ürün Adedi',
            'helper_text' => 'İndirimin uygulanması için gereken uygun ürün sayısını belirleyin.',
        ],
        'reward_qty' => [
            'label' => 'Ücretsiz Ürün Sayısı',
            'helper_text' => 'Her üründen kaç adet indirimli olacak.',
        ],
        'max_reward_qty' => [
            'label' => 'Maksimum Ödül Adedi',
            'helper_text' => 'Kriterlere bakılmaksızın indirim uygulanabilecek maksimum ürün sayısı.',
        ],
        'automatic_rewards' => [
            'label' => 'Ödülleri Otomatik Ekle',
            'helper_text' => 'Sepette yoksa ödül ürünlerini otomatik eklemek için açın.',
        ],
        'fixed_value' => [
            'label' => 'Sabit Tutar',
        ],
        'percentage' => [
            'label' => 'Yüzde',
        ],
    ],
    'table' => [
        'name' => [
            'label' => 'Ad',
        ],
        'status' => [
            'label' => 'Durum',
            \Lunar\Models\Discount::ACTIVE => [
                'label' => 'Aktif',
            ],
            \Lunar\Models\Discount::PENDING => [
                'label' => 'Beklemede',
            ],
            \Lunar\Models\Discount::EXPIRED => [
                'label' => 'Süresi Dolmuş',
            ],
            \Lunar\Models\Discount::SCHEDULED => [
                'label' => 'Planlanmış',
            ],
        ],
        'type' => [
            'label' => 'Tip',
        ],
        'starts_at' => [
            'label' => 'Başlangıç Tarihi',
        ],
        'ends_at' => [
            'label' => 'Bitiş Tarihi',
        ],
        'created_at' => [
            'label' => 'Oluşturulma Tarihi',
        ],
        'coupon' => [
            'label' => 'Kupon',
        ],
    ],
    'pages' => [
        'availability' => [
            'label' => 'Erişilebilirlik',
        ],
        'edit' => [
            'title' => 'Temel Bilgiler',
        ],
        'limitations' => [
            'label' => 'Sınırlamalar',
        ],
    ],
    'relationmanagers' => [
        'collections' => [
            'title' => 'Koleksiyonlar',
            'description' => 'Bu indirimin sınırlandırılacağı koleksiyonları seçin.',
            'actions' => [
                'attach' => [
                    'label' => 'Koleksiyon Ekle',
                ],
            ],
            'table' => [
                'name' => [
                    'label' => 'Ad',
                ],
                'type' => [
                    'label' => 'Tip',
                    'limitation' => [
                        'label' => 'Sınırlama',
                    ],
                    'exclusion' => [
                        'label' => 'Hariç Tutma',
                    ],
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'Sınırlama',
                        ],
                        'exclusion' => [
                            'label' => 'Hariç Tutma',
                        ],
                    ],
                ],
            ],
        ],
        'customers' => [
            'title' => 'Müşteriler',
            'description' => 'Bu indirimin sınırlandırılacağı müşterileri seçin.',
            'actions' => [
                'attach' => [
                    'label' => 'Müşteri Ekle',
                ],
            ],
            'table' => [
                'name' => [
                    'label' => 'Ad',
                ],
            ],
        ],
        'brands' => [
            'title' => 'Markalar',
            'description' => 'Bu indirimin sınırlandırılacağı markaları seçin.',
            'actions' => [
                'attach' => [
                    'label' => 'Marka Ekle',
                ],
            ],
            'table' => [
                'name' => [
                    'label' => 'Ad',
                ],
                'type' => [
                    'label' => 'Tip',
                    'limitation' => [
                        'label' => 'Sınırlama',
                    ],
                    'exclusion' => [
                        'label' => 'Hariç Tutma',
                    ],
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'Sınırlama',
                        ],
                        'exclusion' => [
                            'label' => 'Hariç Tutma',
                        ],
                    ],
                ],
            ],
        ],
        'products' => [
            'title' => 'Ürünler',
            'description' => 'Bu indirimin sınırlandırılacağı ürünleri seçin.',
            'actions' => [
                'attach' => [
                    'label' => 'Ürün Ekle',
                ],
            ],
            'table' => [
                'name' => [
                    'label' => 'Ad',
                ],
                'type' => [
                    'label' => 'Tip',
                    'limitation' => [
                        'label' => 'Sınırlama',
                    ],
                    'exclusion' => [
                        'label' => 'Hariç Tutma',
                    ],
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'Sınırlama',
                        ],
                        'exclusion' => [
                            'label' => 'Hariç Tutma',
                        ],
                    ],
                ],
            ],
        ],
        'rewards' => [
            'title' => 'Ödüller',
            'description' => 'Sepette mevcutsa ve yukarıdaki koşullar sağlanırsa indirim uygulanacak ürünleri seçin.',
            'actions' => [
                'attach' => [
                    'label' => 'Ödül Ekle',
                ],
            ],
            'table' => [
                'name' => [
                    'label' => 'Ad',
                ],
                'type' => [
                    'label' => 'Tip',
                    'limitation' => [
                        'label' => 'Sınırlama',
                    ],
                    'exclusion' => [
                        'label' => 'Hariç Tutma',
                    ],
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'Sınırlama',
                        ],
                        'exclusion' => [
                            'label' => 'Hariç Tutma',
                        ],
                    ],
                ],
            ],
        ],
        'conditions' => [
            'title' => 'Koşullar',
            'description' => 'İndirimin uygulanması için gerekli koşulları seçin.',
            'actions' => [
                'attach' => [
                    'label' => 'Koşul Ekle',
                ],
            ],
            'table' => [
                'name' => [
                    'label' => 'Ad',
                ],
                'type' => [
                    'label' => 'Tip',
                    'limitation' => [
                        'label' => 'Sınırlama',
                    ],
                    'exclusion' => [
                        'label' => 'Hariç Tutma',
                    ],
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'Sınırlama',
                        ],
                        'exclusion' => [
                            'label' => 'Hariç Tutma',
                        ],
                    ],
                ],
            ],
        ],
        'productvariants' => [
            'title' => 'Ürün Varyantları',
            'description' => 'Bu indirimin sınırlandırılacağı ürün varyantlarını seçin.',
            'actions' => [
                'attach' => [
                    'label' => 'Ürün Varyantı Ekle',
                ],
            ],
            'table' => [
                'name' => [
                    'label' => 'Ad',
                ],
                'sku' => [
                    'label' => 'SKU',
                ],
                'values' => [
                    'label' => 'Seçenek(ler)',
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'Sınırlama',
                        ],
                        'exclusion' => [
                            'label' => 'Hariç Tutma',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
