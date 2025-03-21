<?php

namespace App\DesignePatterns\Factory;

class Mellat implements Payment
{

    public function pay()
    {
        dd('mellat');
    }
}
