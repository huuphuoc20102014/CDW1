<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Transits;
use App\Model\FlightList;

class FlightDetailController extends Controller
{
	// Function tạo constructor cho trả về view 
    public function __construct() {
        $this->data_view = [
            'test' => 'array',
        ];
    }

    // Page Detail  - trang chi tiết 
	public function getDetail(Request $request,$idfly)
	{
		$obj_fl = new FlightList();
		$obj_ts = new Transits();
		
		$data_flight  = $obj_fl->getDataFlight($idfly);
		$name_city_airport_from = $obj_fl->getCityFrom($idfly);
		$name_city_airport_to = $obj_fl->getCityTo($idfly);

		switch ($data_flight[0]['fl_type'] ) 
		{
			case 1:
					$detail_transit  = $obj_ts->getTransit($idfly);
					$duration = 0;
					for ($row = 0; $row < $detail_transit->count(); $row++)
					{
						$duration += $detail_transit[$row]->transit_landing_date - $detail_transit[$row]->transit_departure_date;
					} 

					$price = $obj_fl->tinhtien($data_flight[0]['fl_departure_date'] , $data_flight[0]['fl_distance']);
					$data_flight[0]['fl_cost'] = $price;
					$time_to_date = $detail_transit[$detail_transit->count()-1]->transit_landing_date ;

					$this->data_view = array_merge($this->data_view,[
						'data_flight'=> $data_flight , 
						'detail_transit' =>$detail_transit,
						'duration'=>$duration,
						'name_city_airport_from' =>$name_city_airport_from,
						'name_city_airport_to' =>$name_city_airport_to,
						'time_to_date'=>$time_to_date
					]);
					return view('flight-detail', $this->data_view); 
				break;
			case 0:
					$detail_transit  = $obj_ts->getTransit_type($idfly,1);
					$duration = 0;
					for ($row = 0; $row < $detail_transit->count(); $row++)
					{
						$duration += $detail_transit[$row]->transit_landing_date - $detail_transit[$row]->transit_departure_date;
					} 

					$price = $obj_fl->tinhtien($data_flight[0]['fl_departure_date'] , $data_flight[0]['fl_distance']);
					$data_flight[0]['fl_cost'] = $price;
					$time_to_date = $detail_transit[$detail_transit->count()-1]->transit_landing_date ;

					$this->data_view = array_merge($this->data_view,[
						'data_flight'=> $data_flight , 
						'detail_transit' =>$detail_transit,
						'duration'=>$duration,
						'name_city_airport_from' =>$name_city_airport_from,
						'name_city_airport_to' =>$name_city_airport_to,
						'time_to_date'=>$time_to_date
					]);
					return view('flight-detail', $this->data_view); 
				break;
			default:
				break;
		}


	}

}
