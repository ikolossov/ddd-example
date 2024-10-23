<?php
declare(strict_types=1);

namespace App\Application\UseCases\CreateUser;

class CreateUserDTO
{
    public function __construct(
        public string $name,
        public string $phone,
    ) {
    }
}