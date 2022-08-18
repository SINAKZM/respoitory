<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository extends Repository
{
    protected function model() : string
    {
        return User::class;
    }

    public function getActiveUsers()
    {
        return $this->model->all();
    }
}
