<?php

namespace App\Providers;

use App\Modifiers\ShippingModifier;
use Filament\Facades\Filament;
use Filament\Navigation\NavigationGroup;
use Filament\Tables\Columns\Column;
use Filament\Tables\Table;
use Illuminate\Support\ServiceProvider;
use Lunar\Admin\Support\Facades\LunarPanel;
use Lunar\Base\ShippingModifiers;
use Lunar\Shipping\ShippingPlugin;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        LunarPanel::panel(
            fn ($panel) => $panel
                ->path('admin')
                ->plugins([
                    new ShippingPlugin,
                ])
        )
            ->register();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(ShippingModifiers $shippingModifiers): void
    {
        $shippingModifiers->add(
            ShippingModifier::class
        );

        \Lunar\Facades\ModelManifest::replace(
            \Lunar\Models\Contracts\Product::class,
            \App\Models\Product::class,
        );

        // Tüm tablo sütunları için boş değer placeholder'ı
        Column::configureUsing(function (Column $column): void {
            $column->placeholder(__('lunarpanel::components.empty_placeholder'));
        });

        // Tüm tablolar için varsayılan sayfalama ayarı
        Table::configureUsing(function (Table $table): void {
            $table->defaultPaginationPageOption(10);
        });

        // Lunar panel navigasyon gruplarını çevir
        Filament::serving(function () {
            $panel = Filament::getPanel('lunar');
            if ($panel) {
                $panel->navigationGroups([
                    NavigationGroup::make()
                        ->label(__('lunarpanel::global.sections.catalog')),
                    NavigationGroup::make()
                        ->label(__('lunarpanel::global.sections.sales')),
                    NavigationGroup::make()
                        ->label(__('lunarpanel::global.sections.shipping')),
                    NavigationGroup::make()
                        ->label(__('lunarpanel::global.sections.settings'))
                        ->collapsed(),
                ]);
            }
        });
    }
}
