<?php
declare(strict_types=1);

namespace App\Domain\Services\CreateUser;

use App\Domain\Entities\UserEntity;
use App\Domain\Repositories\UserRepositoryInterface;

class CreateUserService
{
    public function __construct(
        private UserRepositoryInterface $repository
    ) {
    }

    public function create(UserEntity $entity): void
    {
        $this->repository->create($entity);
    }
}