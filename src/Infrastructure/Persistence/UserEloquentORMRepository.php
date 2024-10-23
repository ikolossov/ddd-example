<?php
declare(strict_types=1);

namespace App\Infrastructure\Persistence;

use App\Domain\Entities\UserEntity;
use App\Domain\Repositories\UserRepositoryInterface;

class UserEloquentORMRepository implements UserRepositoryInterface
{

    public function getById(int $id): UserEntity
    {
        // TODO: Implement getById() method.
    }

    public function create(UserEntity $entity): void
    {
        // TODO: Implement create() method.
    }
}