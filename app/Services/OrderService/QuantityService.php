<?php

namespace App\Services\OrderService;

use App\Models\Product;

class QuantityService
{
    public function checkQuantity(Product $product): bool
    {
        if($product->count > 0){
            return true;
        }else{
            return false;
        }
    }
}
