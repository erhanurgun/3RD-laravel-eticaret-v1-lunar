<?php

/**
 * Lunar Admin Panel - Widgets translations.
 * Lunar Admin Panel - Widget çevirileri.
 */

return [
    'dashboard' => [
        'orders' => [
            'order_stats_overview' => [
                'stat_one' => [
                    'label' => 'Bugünkü siparişler',
                    'increase' => 'Düne göre :count sipariş, %:percentage artış',
                    'decrease' => 'Düne göre :count sipariş, %:percentage azalış',
                    'neutral' => 'Düne göre değişiklik yok',
                ],
                'stat_two' => [
                    'label' => 'Son 7 günlük siparişler',
                    'increase' => 'Önceki döneme göre :count sipariş, %:percentage artış',
                    'decrease' => 'Önceki döneme göre :count sipariş, %:percentage azalış',
                    'neutral' => 'Önceki döneme göre değişiklik yok',
                ],
                'stat_three' => [
                    'label' => 'Son 30 günlük siparişler',
                    'increase' => 'Önceki döneme göre :count sipariş, %:percentage artış',
                    'decrease' => 'Önceki döneme göre :count sipariş, %:percentage azalış',
                    'neutral' => 'Önceki döneme göre değişiklik yok',
                ],
                'stat_four' => [
                    'label' => 'Bugünkü satışlar',
                    'increase' => 'Düne göre :total, %:percentage artış',
                    'decrease' => 'Düne göre :total, %:percentage azalış',
                    'neutral' => 'Düne göre değişiklik yok',
                ],
                'stat_five' => [
                    'label' => 'Son 7 günlük satışlar',
                    'increase' => 'Önceki döneme göre :total, %:percentage artış',
                    'decrease' => 'Önceki döneme göre :total, %:percentage azalış',
                    'neutral' => 'Önceki döneme göre değişiklik yok',
                ],
                'stat_six' => [
                    'label' => 'Son 30 günlük satışlar',
                    'increase' => 'Önceki döneme göre :total, %:percentage artış',
                    'decrease' => 'Önceki döneme göre :total, %:percentage azalış',
                    'neutral' => 'Önceki döneme göre değişiklik yok',
                ],
            ],
            'order_totals_chart' => [
                'heading' => 'Son bir yılın sipariş toplamları',
                'series_one' => [
                    'label' => 'Bu Dönem',
                ],
                'series_two' => [
                    'label' => 'Önceki Dönem',
                ],
                'yaxis' => [
                    'label' => 'Ciro :currency',
                ],
            ],
            'order_sales_chart' => [
                'heading' => 'Sipariş / Satış Raporu',
                'series_one' => [
                    'label' => 'Siparişler',
                ],
                'series_two' => [
                    'label' => 'Gelir',
                ],
                'yaxis' => [
                    'series_one' => [
                        'label' => 'Sipariş Sayısı',
                    ],
                    'series_two' => [
                        'label' => 'Toplam Değer',
                    ],
                ],
            ],
            'average_order_value' => [
                'heading' => 'Ortalama Sipariş Değeri',
            ],
            'new_returning_customers' => [
                'heading' => 'Yeni ve Dönen Müşteriler',
                'series_one' => [
                    'label' => 'Yeni Müşteriler',
                ],
                'series_two' => [
                    'label' => 'Dönen Müşteriler',
                ],
            ],
            'popular_products' => [
                'heading' => 'En çok satanlar (son 12 ay)',
                'description' => 'Bu rakamlar sipariş edilen miktara değil, ürünün siparişlerde kaç kez göründüğüne dayanmaktadır.',
            ],
            'latest_orders' => [
                'heading' => 'Son siparişler',
            ],
        ],
    ],
    'customer' => [
        'stats_overview' => [
            'total_orders' => [
                'label' => 'Toplam sipariş',
            ],
            'avg_spend' => [
                'label' => 'Ort. Harcama',
            ],
            'total_spend' => [
                'label' => 'Toplam Harcama',
            ],
        ],
    ],
    'variant_switcher' => [
        'label' => 'Varyant Değiştir',
        'table' => [
            'sku' => [
                'label' => 'SKU',
            ],
            'values' => [
                'label' => 'Değerler',
            ],
        ],
    ],
];
