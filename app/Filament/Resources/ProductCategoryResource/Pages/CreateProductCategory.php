<?php

namespace App\Filament\Resources\ProductCategoryResource\Pages;

use App\Filament\Resources\ProductCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProductCategory extends CreateRecord
{
    protected static string $resource = ProductCategoryResource::class;

    protected bool $stayOnPage = false; // Flag to determine redirection

    public function createAndStay(): void
    {
        $this->stayOnPage = true; // Set flag for staying on page
        $this->create();
    }

    protected function getRedirectUrl(): string
    {
        return $this->stayOnPage
            ? ProductCategoryResource::getUrl('create')  // Stay on create page
            : ProductCategoryResource::getUrl('index'); // Go to index page
    }
}
