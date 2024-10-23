<?php
declare(strict_types=1);

namespace App\Application\UseCases\CreateUser;

use App\Domain\Entities\UserEntity;
use App\Domain\Services\CreateUser\CreateUserService;

class CreateUserUseCase
{
    public function __construct(
        private CreateUserService $createUserService,
    ) {
    }

    public function execute(CreateUserDTO $createUserDTO): void
    {
        $user = new UserEntity(
            name: $createUserDTO->name,
            phone: $createUserDTO->phone
        );

        $this->createUserService->create($user);
    }
}