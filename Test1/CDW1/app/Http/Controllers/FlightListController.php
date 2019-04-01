<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlightListController extends Controller
{
//"from" => "1"
    //"to" => "2"
    //"departure-date" => "2019-02-15"
    //"flight_type" => "one-way"
    //"return-date" => "2019-02-03"
    public function flight_list(Request $request)
    {
//        dd($request->departure_date);
        $departure = new \DateTime($request->departure_date);

        $departure_nextday = new \DateTime($request->departure_date . ' + 1 days');
       
        $return_date = new \DateTime($request->return_date);
        $return_date_nextday = new \DateTime($request->return_date . ' + 1 days');
//        dd($departure->format('Y-m-d h:i:s'));
        $flight_list = DB::table('flight')->where([
            ['from', $request->from],
            ['to', $request->to],
            ['departure', '>=', $departure],
            ['departure', '<', $departure_nextday],
            ['flight_type', $request->flight_type],
            ['return', '>=', $return_date],
            ['return', '<', $return_date_nextday],
        ])
            ->leftJoin('airline_org', 'flight.org_id', '=', 'airline_org.id')
            ->get();
        $city_list = DB::table('city')->get();
        // dd($flight_list);
        return view('flight-list', compact('flight_list', 'city_list'));
    }
}
