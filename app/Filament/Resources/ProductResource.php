<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductColor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\Section;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Products';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make([
                    Forms\Components\TextInput::make('name')
                        ->required(),
                    Forms\Components\Textarea::make('description')
                        ->columnSpanFull(),
                    Forms\Components\Select::make('product_category_id')
                        ->label('Category')
                        ->options(ProductCategory::all()->pluck('name', 'id'))
                        ->required(),
                    Forms\Components\Select::make('product_color_id')
                        ->label('Color')
                        ->options(ProductColor::all()->pluck('name', 'id'))
                        ->required()
                ]),
                Forms\Components\Card::make([
                    Forms\Components\Repeater::make('typeAssignments')
                        ->relationship('typeAssignments')
                        ->schema([
                            Forms\Components\TextInput::make('product_type')
                                ->label('Product Type')
                                ->required(),
                            Forms\Components\TextInput::make('bonus')
                                ->label('Bonus')
                                ->numeric(),
                        ])
                        ->columnSpanFull(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('productCategory.name')
                    ->label('Category')
                    ->sortable(),
                Tables\Columns\TextColumn::make('productColor.name')
                    ->label('Color')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make('Product Details')
                    ->schema([
                        TextEntry::make('name')
                            ->label('Product Name')
                            ->columnSpanFull(),
                        TextEntry::make('description')
                            ->label('Description')
                            ->columnSpanFull(),
                    ]),
                Section::make('Category & Color')
                    ->schema([
                        TextEntry::make('productCategory.name')
                            ->label('Category')
                            ->columnSpanFull(),
                        TextEntry::make('productColor.name')
                            ->label('Color')
                            ->columnSpanFull(),
                    ]),
                Section::make('Timestamps')
                    ->schema([
                        TextEntry::make('created_at')
                            ->label('Created At')
                            ->columnSpanFull(),
                        TextEntry::make('updated_at')
                            ->label('Updated At')
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
            'view' => Pages\ViewProduct::route('/{record}'),
        ];
    }
}
