<?php

namespace Unamatasanatarai\Repositories\Contracts;

interface RepositoryInterface
{

    public function create(array $attributes);


    public function all($columns = [ '*' ]);


    public function find($id, $columns = [ '*' ]);


    public function delete($ids);
}