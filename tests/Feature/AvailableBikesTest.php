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

        $response = $this->get('/bikes');
        $response->assertSee($bike->code);
    }
}
