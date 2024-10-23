<?php
declare(strict_types=1);

namespace Tests\Unit;


use Illuminate\Foundation\Testing\TestCase;

class ExceptionHandlerTest extends TestCase
{
    public function testException(): void
    {
        // Route or code that triggers the exception
        $response = $this->getJson('/trigger-exception');

        // Assert the response is correct
        $response->assertStatus(404);
        $response->assertJson([
            'error' => 'The route trigger-exception could not be found.',
            'result' => false,
            'code' => 0
        ]);
    }
}