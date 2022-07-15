<?php

namespace App\Services\OrderService;

use App\Models\Coupon;

class CouponService
{
    private function check($code):int
    {
       return Coupon::query()->where('code',$code)->first()->percent;
    }

    public function applyCoupon($product, $code):int
    {
        return  $product->price -  ( ($this->check($code)* $product->price)/100  );
    }
}
