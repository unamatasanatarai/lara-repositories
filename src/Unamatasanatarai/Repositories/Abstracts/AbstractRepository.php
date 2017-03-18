<?php

namespace Unamatasanatarai\Repositories\Abstracts;

use Unamatasanatarai\Repositories\Exceptions\EloquentRepositoryException;
use Unamatasanatarai\Repositories\Contracts\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepository implements RepositoryInterface
{

    protected $model;


    public function __construct()
    {
        $this->validateModel();
    }

    abstract protected function validateModel();

}