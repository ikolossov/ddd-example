<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;


use Illuminate\Foundation\Testing\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');
        $response->assertContent('Hello World');
        $response->assertStatus(200);
    }
}
