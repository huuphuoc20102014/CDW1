<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Airlines;
use App\Model\Airports;
use App\Model\FlightClasses;
use App\Model\Cities;
use App\Model\Customers;
use App\Model\FlightBooking;
use App\Model\Nation;
use App\Model\Transits;
use App\Model\FlightList;
use App\Model\FlightRoute;
use App\Model\Passengers;

use Validator;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Collection;
class FlightController extends Controller
{
    public function __construct() {
        $this->data_view = [
            'test' => 'array',
        ];
    }

    // Load page home 
    public function loadhome()
    {
        //processing
        $city1 = Cities::all();    
        $city2 = Cities::orderBy('city_id','DESC')->get();
        $flightclass = FlightClasses::all();
        $nation1 = Nation::all();
        $nation2 = Nation::orderBy('nation_id','DESC')->get();
        $flight_route = FlightRoute::all();
        // return to view
        $this->data_view = array_merge($this->data_view,[
            'city1'=> $city1 , 
            'flightclass' =>$flightclass,
            'city2'=> $city2,
            'nation1' =>$nation1,
            'nation2' => $nation2,
            'flight_route'=>$flight_route
        ]);

        return view('index', $this->data_view);
    }

   
}
