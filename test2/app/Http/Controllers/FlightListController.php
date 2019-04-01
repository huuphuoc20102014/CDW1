<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Transits;
use App\Model\FlightList;
use App\Model\Nation;
use App\Model\Cities;
use App\Model\Airports;
use Validator;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Collection;

class FlightListController extends Controller
{
	
	public function __construct() {
		$this->data_view = [
			'test' => 'array',
		];
	}
    
    // 
    public function get_Id_Flightlist(Request $request , $id)
    {
        $obj_fl = new FlightList();
        $data_flight = $obj_fl->getDataFlight($id);
        $name_city_airport_from = $obj_fl->getCityFrom($data_flight[0]['fl_id']);
        $name_city_airport_to = $obj_fl->getCityTo($data_flight[0]['fl_id']);
       
        for ($row = 0; $row < count($data_flight); $row++)
        {
            $num_trans = Transits::where('fl_id' , $data_flight[$row]['fl_id'])
            ->join('flight_list','transits.transit_fl_id', '=', 'flight_list.fl_id')
            ->get();
            if($num_trans->count() <= 0 )
            {
                return redirect()->route('home');
            } 
            else
            {
                $time_to_date = $num_trans[$num_trans->count()- 1]->transit_landing_date;
                $duration = 0;
                for ($row1 = 0; $row1 < $num_trans->count(); $row1++)
                {
                    $duration += $num_trans[$row1]->transit_landing_date - $num_trans[$row1]->transit_departure_date;
                }
                $data_flight[$row]['fl_num_transit'] = $num_trans->count();
                $data_flight[$row]['fl_duration'] = $duration; 
                $price = $obj_fl->tinhtien($data_flight[$row]['fl_departure_date'] , $data_flight[$row]['fl_distance']);
                $data_flight[$row]['fl_cost'] = $price; // gán giá tiền vào cost - column 
            } 

        }
        $this->data_view = array_merge($this->data_view,[
            'name_city_airport_from' =>$name_city_airport_from,
            'name_city_airport_to'=> $name_city_airport_to , 
            'data_flight'=> $data_flight, 
            'time_to_date'=>$time_to_date
        ]);
        return view('flight-list', $this->data_view);
    }


}
