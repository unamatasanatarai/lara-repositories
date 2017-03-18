<?php

namespace Unamatasanatarai\Repositories\Abstracts;

use Unamatasanatarai\Repositories\Contracts\RepositoryInterface;

abstract class AbstractRepository implements RepositoryInterface
{

    protected $model;

    public function __construct()
    {
        $this->validateModel();
    }

    abstract protected function validateModel();

}