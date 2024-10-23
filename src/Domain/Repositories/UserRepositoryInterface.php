<?php
declare(strict_types=1);

namespace App\Domain\Repositories;

use App\Domain\Entities\UserEntity;
use App\Domain\Exceptions\UserNotFoundException;

interface UserRepositoryInterface
{
    /**
     * @throws UserNotFoundException
     */
    public function getById(int $id);
    public function create(UserEntity $entity): void;
}