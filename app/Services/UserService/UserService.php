<?php

namespace App\Services\UserService;

use App\Models\User;


class UserService
{

    public function createNewUser(string $name, string $email,int $password):User
    {
        User::query()->create([
            'name'=>$name,
            'email'=>$email,
            'password'=>bcrypt($password)
        ]);
    }

}
