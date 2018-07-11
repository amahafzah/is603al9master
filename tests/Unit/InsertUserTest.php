<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class InsertUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = new User;
            $user->name = 'Al Mahafzah';
            $user->email= 'aam34@njit1.edu';
            $user->password= bcrypt ('1233fs733');
            $user->save();
            $this->assertDatabaseHas ('users', ['email'=>'aam34@njit1.edu']);


    }
}

