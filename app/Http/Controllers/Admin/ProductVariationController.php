<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ProductVariation;
use App\Http\Controllers\Controller;

class ProductVariationController extends Controller
{
    public function store($variations, $attributeId, $product)
    {
        $counter = count($variations['value']);

        for ($i = 0; $i < $counter; $i++) {
            ProductVariation::create([
                'attribute_id' => $attributeId,
                'product_id' => $product->id,
                'value' => $variations['value'][$i],
                'price' => $variations['price'][$i],
                'quantity' => $variations['quantity'][$i],
                'sku' => $variations['sku'][$i]
            ]);
        }
    }
}
