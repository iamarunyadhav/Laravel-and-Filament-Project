<?php

namespace App\Filament\Resources\ProductTypeResource\Pages;

use App\Filament\Resources\ProductTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductType extends EditRecord
{
    protected static string $resource = ProductTypeResource::class;

    protected function getRedirectUrl(): string
    {
        return ProductTypeResource::getUrl('index'); // Redirect to Product Type list page after saving
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
