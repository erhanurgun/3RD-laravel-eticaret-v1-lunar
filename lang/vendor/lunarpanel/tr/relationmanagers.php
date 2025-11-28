<?php

/**
 * Lunar Admin Panel - Relation Managers translations.
 * Lunar Admin Panel - İlişki Yöneticileri çevirileri.
 */

return [
    'customer_groups' => [
        'title' => 'Müşteri Grupları',
        'actions' => [
            'attach' => [
                'label' => 'Müşteri Grubu Ekle',
            ],
        ],
        'form' => [
            'name' => [
                'label' => 'Ad',
            ],
            'enabled' => [
                'label' => 'Etkin',
            ],
            'starts_at' => [
                'label' => 'Başlangıç Tarihi',
            ],
            'ends_at' => [
                'label' => 'Bitiş Tarihi',
            ],
            'visible' => [
                'label' => 'Görünür',
            ],
            'purchasable' => [
                'label' => 'Satın Alınabilir',
            ],
        ],
        'table' => [
            'description' => 'Erişilebilirliğini belirlemek için bu :type ile müşteri gruplarını ilişkilendirin.',
            'name' => [
                'label' => 'Ad',
            ],
            'enabled' => [
                'label' => 'Etkin',
            ],
            'starts_at' => [
                'label' => 'Başlangıç Tarihi',
            ],
            'ends_at' => [
                'label' => 'Bitiş Tarihi',
            ],
            'visible' => [
                'label' => 'Görünür',
            ],
            'purchasable' => [
                'label' => 'Satın Alınabilir',
            ],
        ],
    ],
    'channels' => [
        'title' => 'Kanallar',
        'actions' => [
            'attach' => [
                'label' => 'Başka Kanal Planla',
            ],
        ],
        'form' => [
            'enabled' => [
                'label' => 'Etkin',
                'helper_text_false' => 'Başlangıç tarihi olsa bile bu kanal etkin olmayacak.',
            ],
            'starts_at' => [
                'label' => 'Başlangıç Tarihi',
                'helper_text' => 'Herhangi bir tarihten itibaren kullanılabilir olması için boş bırakın.',
            ],
            'ends_at' => [
                'label' => 'Bitiş Tarihi',
                'helper_text' => 'Süresiz kullanılabilir olması için boş bırakın.',
            ],
        ],
        'table' => [
            'description' => 'Hangi kanalların etkin olduğunu belirleyin ve erişilebilirliği planlayın.',
            'name' => [
                'label' => 'Ad',
            ],
            'enabled' => [
                'label' => 'Etkin',
            ],
            'starts_at' => [
                'label' => 'Başlangıç Tarihi',
            ],
            'ends_at' => [
                'label' => 'Bitiş Tarihi',
            ],
        ],
    ],
    'medias' => [
        'title' => 'Medya',
        'title_plural' => 'Medya',
        'actions' => [
            'attach' => [
                'label' => 'Medya Ekle',
            ],
            'create' => [
                'label' => 'Medya Oluştur',
            ],
            'detach' => [
                'label' => 'Kaldır',
            ],
            'view' => [
                'label' => 'Görüntüle',
            ],
        ],
        'form' => [
            'name' => [
                'label' => 'Ad',
            ],
            'media' => [
                'label' => 'Görsel',
            ],
            'primary' => [
                'label' => 'Ana',
            ],
        ],
        'table' => [
            'image' => [
                'label' => 'Görsel',
            ],
            'file' => [
                'label' => 'Dosya',
            ],
            'name' => [
                'label' => 'Ad',
            ],
            'primary' => [
                'label' => 'Ana',
            ],
        ],
        'all_media_attached' => 'Eklenecek ürün görseli yok',
        'variant_description' => 'Ürün görsellerini bu varyanta ekleyin',
    ],
    'urls' => [
        'title' => 'URL',
        'title_plural' => 'URL\'ler',
        'actions' => [
            'create' => [
                'label' => 'URL Oluştur',
            ],
        ],
        'filters' => [
            'language_id' => [
                'label' => 'Dil',
            ],
        ],
        'form' => [
            'slug' => [
                'label' => 'Slug',
            ],
            'default' => [
                'label' => 'Varsayılan',
            ],
            'language' => [
                'label' => 'Dil',
            ],
        ],
        'table' => [
            'slug' => [
                'label' => 'Slug',
            ],
            'default' => [
                'label' => 'Varsayılan',
            ],
            'language' => [
                'label' => 'Dil',
            ],
        ],
    ],
    'customer_group_pricing' => [
        'title' => 'Müşteri Grubu Fiyatlandırması',
        'title_plural' => 'Müşteri Grubu Fiyatlandırması',
        'table' => [
            'heading' => 'Müşteri Grubu Fiyatlandırması',
            'description' => 'Ürün fiyatını belirlemek için müşteri gruplarına fiyat ilişkilendirin.',
            'empty_state' => [
                'label' => 'Müşteri grubu fiyatlandırması yok.',
                'description' => 'Başlamak için bir müşteri grubu fiyatı oluşturun.',
            ],
            'actions' => [
                'create' => [
                    'label' => 'Müşteri Grubu Fiyatı Ekle',
                    'modal' => [
                        'heading' => 'Müşteri Grubu Fiyatı Oluştur',
                    ],
                ],
            ],
        ],
    ],
    'pricing' => [
        'title' => 'Fiyatlandırma',
        'title_plural' => 'Fiyatlandırma',
        'tab_name' => 'Fiyat Kırılımları',
        'table' => [
            'heading' => 'Fiyat Kırılımları',
            'description' => 'Müşteri daha fazla miktarda satın aldığında fiyatı düşürün.',
            'empty_state' => [
                'label' => 'Fiyat kırılımı yok.',
            ],
            'actions' => [
                'create' => [
                    'label' => 'Fiyat Kırılımı Ekle',
                ],
            ],
            'price' => [
                'label' => 'Fiyat',
            ],
            'customer_group' => [
                'label' => 'Müşteri Grubu',
                'placeholder' => 'Tüm Müşteri Grupları',
            ],
            'min_quantity' => [
                'label' => 'Minimum Miktar',
            ],
            'currency' => [
                'label' => 'Para Birimi',
            ],
        ],
        'form' => [
            'price' => [
                'label' => 'Fiyat',
                'helper_text' => 'İndirimler öncesi satın alma fiyatı.',
            ],
            'customer_group_id' => [
                'label' => 'Müşteri Grubu',
                'placeholder' => 'Tüm Müşteri Grupları',
                'helper_text' => 'Bu fiyatın uygulanacağı müşteri grubunu seçin.',
            ],
            'min_quantity' => [
                'label' => 'Minimum Miktar',
                'helper_text' => 'Bu fiyatın geçerli olacağı minimum miktarı seçin.',
                'validation' => [
                    'unique' => 'Müşteri Grubu ve Minimum Miktar benzersiz olmalıdır.',
                ],
            ],
            'currency_id' => [
                'label' => 'Para Birimi',
                'helper_text' => 'Bu fiyat için para birimini seçin.',
            ],
            'compare_price' => [
                'label' => 'Karşılaştırma Fiyatı',
                'helper_text' => 'Satın alma fiyatı ile karşılaştırma için orijinal fiyat veya önerilen perakende fiyatı.',
            ],
            'basePrices' => [
                'title' => 'Fiyatlar',
                'form' => [
                    'price' => [
                        'label' => 'Fiyat',
                        'helper_text' => 'İndirimler öncesi satın alma fiyatı.',
                        'sync_price' => 'Fiyat varsayılan para birimi ile senkronize.',
                    ],
                    'compare_price' => [
                        'label' => 'Karşılaştırma Fiyatı',
                        'helper_text' => 'Satın alma fiyatı ile karşılaştırma için orijinal fiyat veya önerilen perakende fiyatı.',
                    ],
                ],
                'tooltip' => 'Döviz kurlarına göre otomatik oluşturuldu.',
            ],
        ],
    ],
    'tax_rate_amounts' => [
        'title' => 'Vergi Oranı Tutarları',
        'title_plural' => 'Vergi Oranı Tutarları',
        'table' => [
            'description' => 'Bu vergi oranı için vergi sınıflarına göre tutarları tanımlayın.',
            'percentage' => [
                'label' => 'Yüzde',
            ],
            'tax_class' => [
                'label' => 'Vergi Sınıfı',
            ],
        ],
    ],
    'values' => [
        'title' => 'Değerler',
        'table' => [
            'name' => [
                'label' => 'Ad',
            ],
            'position' => [
                'label' => 'Sıra',
            ],
        ],
    ],

];
