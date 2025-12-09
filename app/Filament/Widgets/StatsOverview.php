<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Users', '0')
                ->description('Registered users')
                ->descriptionIcon('heroicon-o-user-group')
                ->color('primary'),
                
            Stat::make('Active Services', '0')
                ->description('Currently active')
                ->descriptionIcon('heroicon-o-rectangle-stack')
                ->color('success'),
                
            Stat::make('Pending Tasks', '0')
                ->description('Tasks to do')
                ->descriptionIcon('heroicon-o-clipboard-document-list')
                ->color('warning'),
        ];
    }
}