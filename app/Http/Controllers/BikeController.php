<?php

namespace App\Http\Controllers;

use App\Bike;
use Illuminate\Http\Request;

class BikeController extends Controller
{
    public function index()
    {
        $bikes = Bike::all();
        return view('bikes.index', [ 'bikes' => $bikes ]);
    }
}
