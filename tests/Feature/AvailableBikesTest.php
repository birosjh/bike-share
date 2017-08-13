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
        $bike = create('App\Bike');

        $response = $this->get("/bikes");
        $response->assertSee($bike->code);
    }

    /** @test */
    function a_user_can_view_an_individual_bike() {
        $bike = create('App\Bike');

        $response = $this->get("/bikes/{$bike->id}");
        $response->assertSee($bike->code);
    }

    /** @test */
    function only_available_bikes_are_visible_in_list() {
        $bike = create('App\Bike', [ 'available' => false ]);

        $response = $this->get('/bikes');
        $response->assertDontSee($bike->code);
    }
}
