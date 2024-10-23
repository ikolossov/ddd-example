<?php

namespace Tests\Unit\Domain\Services;

use App\Domain\Entities\UserEntity;
use App\Domain\Services\CreateUser\CreateUserService;
use PHPUnit\Framework\TestCase;

class CreateUserServiceTest extends TestCase
{
    public function testCreateUser(): void
    {
        $createService = $this->createMock(CreateUserService::class);
        $createService->expects($this->exactly(1))->method('create');
        $user = $this->createMock(UserEntity::class);
        $createService->create($user);
    }
}
