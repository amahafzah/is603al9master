<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class CountNumberRecordTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()

    {
        $this->assertEquals(53, User::count());
    }

}
