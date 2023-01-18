<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_users_section_can_be_loaded()
    {
        $user = \App\Models\User::factory()->create();

        $response = $this->actingAs($user)->get('/users');

        $response->assertOk();

        $response->assertViewIs('users.index');

        $response->assertViewHas('users');
    }
}
