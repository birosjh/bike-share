<?php

namespace App\Http\Controllers;

use App\Bike;
use Illuminate\Http\Request;

class BikeController extends Controller
{
    // Shows the /bikes page
    // /bikesページを表示する関数
    public function index()
    {
        $bikes = Bike::where('available', true)->paginate(4);
        return view('bikes.index', [ 'bikes' => $bikes ]);
    }

    // Shows the /bikes/{bike} page
    // /bikes/{bike}を表示する関数
    public function show(Bike $bike)
    {
        if($bike->available) {
            return view('bikes.show', [ 'bike' => $bike ]);
        }
        return redirect('/unavailable');
    }

    public function update(Request $request, Bike $bike)
    {
        $transaction = $request->input('transaction');
        $message = $bike->$transaction();
        return response()->json([ "message" => $message ]);
    }
}
