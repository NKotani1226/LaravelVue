<?php

namespace Tests\Feature;

use Tests\TestCase;

class UserApiTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->getJson('/api/user');

        $response->assertStatus(200);
    }
}
