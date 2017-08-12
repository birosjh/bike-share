<?php

namespace App\Http\Controllers;

use App\Bike;
use Illuminate\Http\Request;

class BikeController extends Controller
{
    public function index()
    {
        $bikes = Bike::paginate(5);
        return view('bikes.index', [ 'bikes' => $bikes ]);
    }

    public function show(Bike $bike)
    {
        return view('bikes.show', [ 'bike' => $bike ]);
    }
}
