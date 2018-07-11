<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UpdateNameUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user= User::find(2);
        $user->name = 'Steve Smith';
        $user->save();
        $this->assertDatabaseHas ('users',['id' => '2', 'name'=> 'Steve Smith']);
    }
}
