<?php

namespace App\Services\Databases;

use App\Interfaces\DatabaseInterface;

class PostgreSql implements DatabaseInterface
{
    public function saveData()
    {
        echo 'data saved in postgresql';
    }
}
