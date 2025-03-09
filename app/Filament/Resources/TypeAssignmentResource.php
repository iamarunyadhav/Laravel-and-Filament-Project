<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TypeAssignmentResource\Pages;
use App\Models\ProductCategory;
use App\Models\ProductType;
use App\Models\TypeAssignment;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;

class TypeAssignmentResource extends Resource
{
    protected static ?string $model = TypeAssignment::class;
    protected static ?string $navigationIcon = 'heroicon-o-tag';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('product_type_id')
                    ->label('Product Type')
                    ->options(ProductType::all()->pluck('name', 'id'))
                    ->required(),
                Forms\Components\Select::make('product_category_id')
                    ->label('Product Category')
                    ->options(ProductCategory::all()->pluck('name', 'id'))
                    ->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('productType.name')
                    ->label('Product Type')
                    ->sortable(),
                Tables\Columns\TextColumn::make('my_bonus_field')
                    ->label('Bonus')
                    ->sortable(),
            ])
            ->filters([
                // Filters for Type Assignments
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function navigation(): array
    {
        return [
            'label' => 'Type Assignments',
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTypeAssignments::route('/'),
            'create' => Pages\CreateTypeAssignment::route('/create'),
            'edit' => Pages\EditTypeAssignment::route('/{record}/edit'),
        ];
    }
}
