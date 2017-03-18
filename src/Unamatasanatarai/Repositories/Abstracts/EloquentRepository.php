<?php

namespace Unamatasanatarai\Repositories\Abstracts;

use Illuminate\Database\Eloquent\Model;
use Unamatasanatarai\Repositories\Exceptions\EloquentRepositoryException;

abstract class EloquentRepository extends AbstractRepository
{

    protected $model;


    public function create(array $attributes)
    {
        return call_user_func_array("{$this->model}::create", $attributes);
    }


    public function all($columns = [ '*' ])
    {
        return call_user_func_array("{$this->model}::all", $columns);
    }


    public function find($id, $columns = [ '*' ])
    {
        return call_user_func_array("{$this->model}::find", [ $id, $columns ]);
    }


    public function delete($ids)
    {
        return call_user_func_array("{$this->model}::destroy", [ $ids ]);
    }


    protected function validateModel()
    {
        if ( ! is_subclass_of($this->model, Model::class)) {
            throw new EloquentRepositoryException("Class {$this->model} must be an instance of ".Model::class);
        }
    }
}