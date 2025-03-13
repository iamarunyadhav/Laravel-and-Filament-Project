<?php

use Illuminate\Support\Facades\Http;

function fetchPriceFromApi($productName)
{
    $response = Http::get("https://api.example.com/products/price", [
        'product' => $productName,
    ]);

    return $response->json('price') ?? 'N/A';
}
?>
