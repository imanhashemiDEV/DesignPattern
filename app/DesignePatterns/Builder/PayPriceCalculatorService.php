<?php

namespace App\DesignePatterns\Builder;

class PayPriceCalculatorService
{
      private $price;
      private $discount;
      private $count;
      private $tax;

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @param mixed $discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * @param mixed $count
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

    /**
     * @param mixed $tax
     */
    public function setTax($tax)
    {
        $this->tax = $tax;
        return $this;
    }

//      public function __construct($price,$discount,$count,$tax)
//      {
//          $this->price = $price;
//          $this->discount = $discount;
//          $this->count = $count;
//          $this->tax = $tax;
//      }

    public function catculatePayPrice()
    {
       dd($this->price);
    }
}
