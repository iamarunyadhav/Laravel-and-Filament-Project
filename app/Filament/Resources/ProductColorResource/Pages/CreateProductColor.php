<?php

namespace App\Filament\Resources\ProductColorResource\Pages;

use App\Filament\Resources\ProductColorResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProductColor extends CreateRecord
{
    protected static string $resource = ProductColorResource::class;

    protected bool $stayOnPage = false; // Flag to determine redirection

    public function createAndStay(): void
    {
        $this->stayOnPage = true; // Set flag for staying on page
        $this->create();
    }

    protected function getRedirectUrl(): string
    {
        return $this->stayOnPage
            ? ProductColorResource::getUrl('create')  // Stay on create page
            : ProductColorResource::getUrl('index'); // Go to index page
    }
}
