<?php

namespace App\Services;

use App\Repositories\Contracts\BaseRepositoryInterface;
use App\Services\Contracts\BaseServiceInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class BaseService implements BaseServiceInterface, BaseRepositoryInterface
{
    public function __construct(
        private readonly BaseRepositoryInterface $repository
    ) {
    }

    public function all(): Collection
    {
        return $this->repository->all();
    }

    public function create(array $data): Model
    {
        return $this->repository->create($data);
    }

    public function update(array $data, Model $model): bool
    {
        return $this->repository->update($data, $model);
    }

    public function delete(Model $model): bool
    {
        return $this->repository->delete($model);
    }

    public function find(int $id): ?Model
    {
        return $this->repository->find($id);
    }
}
