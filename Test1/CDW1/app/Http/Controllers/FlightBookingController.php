<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FlightBookingController extends Controller
{
    public function index()
    {
        $city_list = DB::table('city')->get();

        return view('index', compact('city_list'));
    }

    public function flight_list()
    {
        return view('flight-list');
    }
}
