<?php

namespace App\Filament\Resources\Customers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class CustomerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email(),
                TextInput::make('whatsapp')
                    ->required(),
                TextInput::make('phone')
                    ->tel(),
                Textarea::make('address')
                    ->columnSpanFull(),
                \Filament\Forms\Components\Repeater::make('documents')
                    ->relationship()
                    ->schema([
                        \Filament\Forms\Components\TextInput::make('name')
                            ->required()
                            ->label('Document Name'),
                        \Filament\Forms\Components\FileUpload::make('file_path')
                            ->required()
                            ->label('Document File')
                            ->acceptedFileTypes(['image/png', 'image/jpeg', 'application/pdf'])
                            ->preserveFilenames()
                            ->directory('customer-documents'),
                    ])
                    ->columnSpanFull()
                    ->defaultItems(0)
                    ->collapsible(),
            ]);
    }
}
