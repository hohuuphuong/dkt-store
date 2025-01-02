<?php

namespace App\Services;

use App\Models\Product;

class HomeService
{
    public function index()
    {
        return [
            'hotProducts' => $this->getHotProducts(),
            'newProducts' => $this->getNewProducts(),
        ];
    }

    private function getHotProducts()
    {
        return [];
    }

    private function getNewProducts()
    {
        return Product::orderBy('created_at', 'desc')->with('images')->limit(8)->get();
    }
}
