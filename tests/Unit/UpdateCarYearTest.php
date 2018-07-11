<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class UpdateCarYearTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car= Car::find(2);
        $car->Year = '1984';
        $car->save();
        $this->assertDatabaseHas ('cars',['id' => '2', 'Year'=> '1984']);
    }
}
