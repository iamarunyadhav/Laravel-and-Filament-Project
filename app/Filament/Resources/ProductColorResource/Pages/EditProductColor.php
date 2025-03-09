<?php

namespace App\Filament\Resources\ProductColorResource\Pages;

use App\Filament\Resources\ProductColorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductColor extends EditRecord
{
    protected static string $resource = ProductColorResource::class;

    protected function getRedirectUrl(): string
    {
        return ProductColorResource::getUrl('index'); // Redirect to Product color list page after saving
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
