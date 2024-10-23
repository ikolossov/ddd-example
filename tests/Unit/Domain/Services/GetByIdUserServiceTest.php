<?php

namespace Tests\Unit\Domain\Services;

use App\Domain\Entities\UserEntity;
use App\Domain\Services\GetByIdUser\GetByIdUserService;
use PHPUnit\Framework\TestCase;

class GetByIdUserServiceTest extends TestCase
{
    public function testGetByIdUser(): void
    {
        $user = $this->createMock(UserEntity::class);
        $service = $this->createMock(GetByIdUserService::class);
        $service->expects($this->exactly(1))->method('get')->with(1)->willReturn($user);
        $service->get(1);
    }
}