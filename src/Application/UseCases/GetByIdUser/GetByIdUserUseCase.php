<?php

declare(strict_types=1);

namespace App\Application\UseCases\GetByIdUser;

use App\Application\DTO\UserDTO;
use App\Application\Exceptions\ApplicationException;
use App\Domain\Services\GetByIdUser\GetByIdUserService;
use Exception;

class GetByIdUserUseCase
{
    public function __construct(
        private readonly GetByIdUserService $getByIdUserService,
    ) {
    }

    /**
     * @throws ApplicationException
     */
    public function execute(int $id): UserDTO
    {
        try {
            $user = $this->getByIdUserService->get($id);
            return new UserDTO(
                id: $user->getId(),
                name: $user->getName(),
                phone: $user->getPhone(),
            );
        } catch (Exception $e){
            throw new ApplicationException($e->getMessage());
        }

    }
}