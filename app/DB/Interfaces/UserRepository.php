<?php

interface UserRepository{

    public function all();
    public function get();
    public function create($input);
    public function update($input);
    public function delete($input);
    public function find($input);
}


