<?php

namespace App\Models;

use App\Interfaces\DatabaseInterface;
use App\Services\Databases\MySql;
use App\Services\Databases\PostgreSql;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    public $database;
    public function __construct(DatabaseInterface $sql)
    {
       $this->database = $sql;
    }

    public function saveUser()
    {
        $this->database->saveData();
    }
}
