<?php

namespace App\Services\Databases;

use App\Interfaces\DatabaseInterface;

class MySql implements DatabaseInterface
{
    public function saveData()
    {
        echo 'data saved in mysql';
    }
}
