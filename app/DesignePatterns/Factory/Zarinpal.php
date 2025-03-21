<?php

namespace App\DesignePatterns\Factory;

class Zarinpal implements Payment
{

    public function pay()
    {
        dd('zarinpal');
    }
}
