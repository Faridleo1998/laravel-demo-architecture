<?php

namespace App\Repositories;

use App\Repositories\Contracts\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements BaseRepositoryInterface
{
    public function __construct(
        private readonly Model $model
    ) {
    }

    public function all(): Collection
    {
        return $this->model::all();
    }

    public function create(array $data): Model
    {
        return $this->model::create($data);
    }

    public function update(array $data, Model $model): Model
    {
        $model->fill($data)->save();
        return $model;
    }

    public function delete(Model $model): bool
    {
        return $model->delete();
    }

    public function find(int $id): ?Model
    {
        return $this->model::find($id);
    }
}
