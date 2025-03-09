<?php

namespace App\Filament\Resources\ProductResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Resources\RelationManagers\RelationManager;

class ProductTypeRelationManager extends RelationManager
{
    protected static string $relationship = 'productTypes'; // Define the relationship method name in Product model

    protected static ?string $title = 'Product Types';

    public function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('product_type_id')
                ->relationship('productTypes', 'name')
                ->multiple()
                ->required(),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Type Name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\AttachAction::make()
                    ->preloadRecordSelect()
                    ->label('Attach Type'),
            ])
            ->actions([
                Tables\Actions\DetachAction::make()->label('Remove'),
            ]);
    }
}
