<?php

namespace App\Filament\Resources\ProductTypeResource\Pages;

use App\Filament\Resources\ProductTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProductType extends CreateRecord
{
    protected static string $resource = ProductTypeResource::class;

    protected bool $stayOnPage = false; // Flag to determine redirection

    public function createAndStay(): void
    {
        $this->stayOnPage = true; // Set flag for staying on page
        $this->create();
    }

    protected function getRedirectUrl(): string
    {
        return $this->stayOnPage
            ? ProductTypeResource::getUrl('create')  // Stay on create page
            : ProductTypeResource::getUrl('index'); // Go to index page
    }
}
