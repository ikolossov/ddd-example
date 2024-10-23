<?php
declare(strict_types=1);

namespace App\Domain\Entities;

class UserEntity
{
    private int $id;

    public function __construct(
        private string $name,
        private string $phone,
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }
}