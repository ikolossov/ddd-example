<?php

namespace App\Infrastructure\Framework\Handlers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use RuntimeException;
use Throwable;

class JsonResponseExceptionHandler
{
    public function handle(Throwable $exception): JsonResponse
    {
        if ($exception instanceof RuntimeException) {
            Log::alert($exception::class, [
                'msg' => $exception->getMessage(),
                'file' => $exception->getFile(),
                'line' => $exception->getLine(),
            ]);
        }

        return response()->json([
            'error' => ! empty($exception->getMessage()) ? $exception->getMessage() : "Houston, we have a problem!",
            'result' => $exception->getCode() === 200,
            'code' => $exception->getCode()
        ], (method_exists($exception, 'getStatusCode') ? $exception->getStatusCode() : 500));
    }
}