<?php

namespace Tests\Controllers;

use Illuminate\Foundation\Testing\TestCase;

class UserControllerTest extends TestCase
{
    public function testCreateUser()
    {
        $response = $this->postJson('/user', [
            'name' => 'test',
            'phone' => '123456',
        ]);
        $response->assertStatus(200);
    }

    public function testGetByIdUser()
    {
        $response = $this->getJson('/user/1');
        $response->assertStatus(200);
    }
}