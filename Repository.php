<?php

namespace App\Repositories;

abstract class Repository implements RepositoryInterface
{
    protected $model;
    public function __construct()
    {
        $this->model = app()->get($this->model());
    }

    abstract protected function model();
    public function all()
    {
        return $this->model->all();
    }
}
