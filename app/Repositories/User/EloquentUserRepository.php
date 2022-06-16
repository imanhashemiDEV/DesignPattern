<?php

namespace App\Repositories\User;

use App\Models\User;


class EloquentUserRepository implements UserRepositoryInterface{


    public function all()
    {
        return User::all();
    }

    public function get()
    {
        return User::query()->get();
    }

    public function create($input)
    {
        return User::query()->create($input);
    }

    public function update($input)
    {
        return User::query()->update($input);
    }

    public function delete($input)
    {
        return User::query()->delete($input);
    }

    public function find($input)
    {
        return User::query()->find($input);
    }
}
