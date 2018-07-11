<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class InsertCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
      $car = new Car;
      $car->Make = 'Ford';
      $car->Model = 'F250';
      $car->Year = '2019';
      $car->save();
      $this->assertDatabaseHas ('cars', ['Model'=> 'F250']);
    }
}
