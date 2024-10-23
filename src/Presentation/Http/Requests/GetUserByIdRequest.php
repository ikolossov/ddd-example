<?php
declare(strict_types=1);

namespace App\Presentation\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GetUserByIdRequest extends FormRequest
{
    public function getId(): ?int
    {
        return (int)$this->route('id');
    }
}