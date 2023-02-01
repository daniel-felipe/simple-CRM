<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class UserTest extends TestCase
{
    use DatabaseTransactions;

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

    public function test_users_create_section_can_be_loaded()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/users/create');
    
        $response->assertOk();
        $response->assertViewIs('users.create');
    }

    public function test_users_can_be_create()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/users', [
            'name' => 'Create User Test',
            'email' => fake()->unique()->email(),
            'password' => fake()->password(8),
        ]);
        
        $response->assertRedirect(
            session()->previousUrl()
        );
        
        $this->assertDatabaseHas(User::class, [
            'name' => 'Create User Test',
        ]);
    }
}
