<?php

namespace App\Filament\Widgets;

use App\Models\CustomerService;
use Filament\Actions\BulkActionGroup;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;

class ExpiringServicesWidget extends TableWidget
{
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->heading('Services Expiring Soon (Next 30 Days)')
            ->query(fn (): Builder => CustomerService::query()
                ->whereNotNull('expiry_date')
                ->whereBetween('expiry_date', [now(), now()->addDays(30)])
                ->with('customer')
            )
            ->columns([
                TextColumn::make('customer.name')
                    ->label('Customer')
                    ->searchable(),
                TextColumn::make('customer.whatsapp')
                    ->label('WhatsApp'),
                TextColumn::make('service_type'),
                TextColumn::make('expiry_date')
                    ->date()
                    ->sortable()
                    ->color('danger'),
                TextColumn::make('status')
                    ->badge(),
            ]);
    }
}
