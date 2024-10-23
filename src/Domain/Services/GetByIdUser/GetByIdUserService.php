<?php
declare(strict_types=1);

namespace App\Domain\Services\GetByIdUser;

use App\Domain\Entities\UserEntity;
use App\Domain\Exceptions\UserNotFoundException;
use App\Domain\Repositories\UserRepositoryInterface;

class GetByIdUserService
{
    public function __construct(
        private UserRepositoryInterface $repository,
    ) {
    }

    /**
     * @throws UserNotFoundException
     */
    public function get(int $id): UserEntity
    {
        return $this->repository->getById($id);
    }
}