<?php

namespace App\Repositories\Contracts;

interface RepositoryInterface
{
    public function store(array $data);

    public function update(int $id, array $data);

    public function all(array $where);

    public function find(int $id);

    public function delete(int $id):bool;

    public function deleteBy(array $where);

    public function paginate(int $page, int $pageSize = 20,string $search = null, array $columns = []):array;
}
