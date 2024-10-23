<?php
declare(strict_types=1);

namespace App\Presentation\Http\Controllers;

use App\Application\Exceptions\ApplicationException;
use App\Application\UseCases\CreateUser\CreateUserDTO;
use App\Application\UseCases\CreateUser\CreateUserUseCase;
use App\Application\UseCases\GetByIdUser\GetByIdUserUseCase;
use App\Presentation\Http\Exceptions\NotFoundException;
use App\Presentation\Http\Requests\CreateUserRequest;
use App\Presentation\Http\Requests\GetUserByIdRequest;
use App\Presentation\Http\Responses\GetByIdUserResponse;

class UserController
{
    public function get(GetUserByIdRequest $request, GetByIdUserUseCase $useCase): GetByIdUserResponse
    {
        try{
            $user = $useCase->execute($request->getId());
            return new GetByIdUserResponse(
                id: $user->id,
                name: $user->name,
                phone: $user->phone,
            );

        } catch (ApplicationException $e){
            throw new NotFoundException();
        }
    }

    public function create(CreateUserRequest $request, CreateUserUseCase $useCase): void
    {
        $createUserDto = new CreateUserDTO(
            name: $request->getName(),
            phone: $request->getPhone()
        );
        $useCase->execute($createUserDto);
    }
}