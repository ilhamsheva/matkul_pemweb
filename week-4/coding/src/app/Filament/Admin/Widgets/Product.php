<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Product as ProductModel;

class Product extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Product', ProductModel::count()) // Langsung menulis label di sini
                ->icon('heroicon-o-shopping-cart') // Ikon untuk widget
                ->color('success') // Warna widget
                ->description('Total Product'), // Deskripsi untuk widget
        ];
    }
}
