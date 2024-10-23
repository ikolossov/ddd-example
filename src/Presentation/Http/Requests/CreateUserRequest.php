<?php
declare(strict_types=1);

namespace App\Presentation\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{

    public function getName(): ?string
    {
        return $this->input('name');
    }

    public function getPhone(): ?string
    {
        return $this->input('phone');
    }
}