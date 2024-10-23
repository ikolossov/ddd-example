<?php
declare(strict_types=1);

namespace App\Presentation\Http\Exceptions;

use Exception;
use Throwable;

class NotFoundException extends Exception
{
    public function __construct(?Throwable $e = null)
    {
        parent::__construct($e->getMessage() ?? "Not found.", 404, $e);
    }
}