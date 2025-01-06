<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        //単一データを作成 
        User::factory()->create();

        //複数データを作成
        User::factory()->count(10)->create();
        $this->assertTrue(true);
    }
}
