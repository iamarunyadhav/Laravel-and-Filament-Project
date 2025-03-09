<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;

    protected bool $stayOnPage = false; // Flag to determine redirection

    public function createAndStay(): void
    {
        $this->stayOnPage = true; // Set flag for staying on page
        $this->create();
    }

    protected function getRedirectUrl(): string
    {
        return $this->stayOnPage
            ? ProductResource::getUrl('create')  // Stay on create page
            : ProductResource::getUrl('index'); // Go to index page
    }
}
