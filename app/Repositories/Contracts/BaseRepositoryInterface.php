<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{
    public function all(): Collection;

    public function create(array $data): Model;

    public function update(array $data, Model $model): bool;

    public function delete(Model $model): bool;

    public function find(int $id): ?Model;
}
