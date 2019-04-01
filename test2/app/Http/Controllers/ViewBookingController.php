<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Customers;
use App\Model\FlightBooking;
use App\Model\Passengers;
use App\Model\Flightlist;
use App\Model\Transits;

class ViewBookingController extends Controller
{
	public function __construct() {
        $this->data_view = [
            'test' => 'array',
        ];
    }

    public function viewBooking(Request $request , $id)
    {
    	$obj_fb = new FlightBooking();
    	$obj_fl = new FlightList();
		$obj_ts = new Transits();
		$obj_cs = new Customers();
		$obj_ps = new Passengers();
    	$data_booking = $obj_fb->getDataBooking($id);
    	$data_customer = $obj_cs->getDataCustomer($data_booking[0]['fb_customer_id']);
    	$data_passenger = $obj_ps->getDataPassenger($data_customer[0]['customer_id']);
		$data_flight  = $obj_fl->getDataFlight($data_booking[0]['fb_fl_id']);
		$name_city_airport_from = $obj_fl->getCityFrom($data_booking[0]['fb_fl_id']);
		$name_city_airport_to = $obj_fl->getCityTo($data_booking[0]['fb_fl_id']);
		$detail_transit  = $obj_ts->getTransit($data_booking[0]['fb_fl_id']);
		$duration = $data_booking[0]['fb_landing_date'] - $data_booking[0]['fb_departure_date'];


		$this->data_view = array_merge($this->data_view,[
			'data_booking'=> $data_booking , 
			'data_customer'=> $data_customer , 
			'data_passenger'=> $data_passenger , 
			'data_flight'=> $data_flight ,
			'detail_transit' =>$detail_transit,
			'duration'=>$duration,
			'name_city_airport_from' =>$name_city_airport_from,
			'name_city_airport_to' =>$name_city_airport_to
		]);

		return view('view-book', $this->data_view); 
    }
}
