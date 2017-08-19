<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AvailableBikesTest extends TestCase
{
    use DatabaseMigrations;
    /** @test */
    function a_user_can_see_a_list_of_bikes() {
        $bike = create('App\Bike', [ 'available' => true ]);

        $response = $this->get("/bikes");
        $response->assertSee($bike->code);
    }

    /** @test */
    function a_user_can_view_an_individual_bike() {
        $bike = create('App\Bike', [ 'available' => true ]);

        $response = $this->get("/bikes/{$bike->code}");
        $response->assertSee($bike->code);
    }

    /** @test */
    function only_available_bikes_are_visible_in_list() {
        $bike = create('App\Bike', [ 'available' => false ]);

        $response = $this->get('/bikes');
        $response->assertDontSee($bike->code);
    }

    /** @test */
    function an_unavailable_bike_cannot_be_viewed() {
        $bike = create('App\Bike', [ 'available' => false ]);

        $response = $this->get("/bikes/{$bike->id}");
        $response->assertStatus(404);
    }
}
