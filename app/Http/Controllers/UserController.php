<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use UserRepository as NewUser;


class UserController extends Controller
{

    public function store()
    {
        resolve(NewUser::class)->create([
            'name'=>'iman',
            'password'=>'iudfgwerovwo8vg'
        ]);
    }
}
