<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserModel;
use App\Services\Databases\MySql;
use App\Services\Databases\PostgreSql;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(): void
    {
        $user = new UserModel(new PostgreSql());
        $user->saveUser();
    }
}
