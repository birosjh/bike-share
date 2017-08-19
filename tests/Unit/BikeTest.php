<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseMigrations;
    /** @test */
    function a_bike_should_be_unavailable_after_checkout() {
        $bike = create('App\Bike', [ 'available' => true ]);
        $bike->checkout();
        $this->assertFalse($bike->available);
    }

    /** @test */
    function a_bike_should_be_available_after_return() {
        $bike = create('App\Bike', [ 'available' => false ]);
        $bike->return();
        $this->assertTrue($bike->available);
    }
}
