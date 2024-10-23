<?php
declare(strict_types=1);

namespace App\Application\DTO;

class UserDTO
{
    public function __construct(
        public int $id,
        public string $name,
        public string $phone,
    ) {
    }
}