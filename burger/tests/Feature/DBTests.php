<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class DBTests extends TestCase
{
    /**
     *
     *
     * @return void
     */
    public function test_HTTP()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    use RefreshDatabase;

//    /** @test */
//    public function data_can_be_inserted()
//    {
//        $data = [
//            'name' => 'John Doe',
//            'email' => 'johndoe@example.com',
//            'password' => 'password',
//        ];
//
//        $this->post(route('users.store'), $data);
//        $this->assertDatabaseHas('users', $data);
//    }

    /** @test */
    public function user_can_be_deleted()
    {
        $user = User::factory()->create();

        $this->delete(route('users.destroy', $user->id));
        $this->assertDatabaseMissing('users', $user->toArray());
    }
}
