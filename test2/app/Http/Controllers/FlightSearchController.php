<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Transits;
use App\Model\FlightList;
use Validator;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Collection;

class FlightSearchController extends Controller
{
    // Search - return ID of flight list 
	public function search_Id_Flight(Request $request)
	{
		$obj_fl = new FlightList();
        if (is_null($request->city_from) && is_null($request->city_to)) 
        {
            $errors = new MessageBag(['error' => 'No city selection! Please check again !']);
            return redirect()->back()->withInput()->withErrors($errors);
        }
		elseif($request->city_from == $request->city_to)
		{
			$errors = new MessageBag(['error' => 'Cannot search for flights with 1 city! Please check again! ']);
			return redirect()->back()->withInput()->withErrors($errors);
		}
        
		else
		{
			$rules = [
				'departure_date' =>'required'
			];
			$messages = [
				'departure_date.required' => 'Departure is a required field ! ',
			];

			$validator = Validator::make($request->all(),$rules,$messages);

            if ($validator->fails()) 
            {
            	return redirect()->back()->withErrors($validator)->withInput();
            }
            else
            {
            	switch ($request->flight_type) 
                {
            		case 1: // One way 
                		date_default_timezone_set('Asia/Ho_Chi_Minh');
                		$time_return = 0;
                		$time_departure = strtotime($request->departure_date);
                		if($time_departure <= time('Asia/Ho_Chi_Minh')) 
                		{
                			$errors = new MessageBag(['error' => ' Time for the flight to end !!']);
                			return redirect()->back()->withInput()->withErrors($errors);
                		}
                		else
                		{
                			$data_first = $obj_fl->getId_search($request->flight_route, $request->city_from, $request->city_to, $request->flight_class, $request->flight_type, $request->total , $time_departure, $time_return);
                			if(count($data_first) > 0 ) 
                			{
                				$request->session()->put('total_people',$request->total);
                                $request->session()->put('type_flight',$request->flight_type);
                                return redirect()->route('flight_list_id',['id'=> $data_first[0]['fl_id']]);
                            }
                            else
                            {
                            	$errors = new MessageBag(['error' => ' No requested flight found !!']);
                            	return redirect()->back()->withInput()->withErrors($errors);
                            }
                        }
                        break;
                    case 0:   // Return 
                        $rules = [
                        	'return_date' => 'required'
                        ];
                        $messages = [
                        	'return_date.required' => 'Return is a required field!'
                        ];

                        $validator = Validator::make($request->all(),$rules,$messages);
                        if ($validator->fails()) 
                        {
                        	return redirect()->back()->withErrors($validator)->withInput();
                        }
                        else
                        {
                            // set default timezone
                        	date_default_timezone_set('Asia/Ho_Chi_Minh');
                            //define date and time
                            //$request->return_date = date("d M Y H:i:s");
                        	$time_return = strtotime($request->return_date);
                        	$time_departure = strtotime($request->departure_date);

                        	if($time_departure <= time('Asia/Ho_Chi_Minh') && $time_return <= time('Asia/Ho_Chi_Minh')) 
                        	{
                        		$errors = new MessageBag(['error' => ' Time for the flight to end !!']);
                        		return redirect()->back()->withInput()->withErrors($errors);
                        	}
                        	else
                        	{
                                // Query ID 
                        		$data_search= $obj_fl->getId_search($request->flight_route, $request->city_from, $request->city_to, $request->flight_class, $request->flight_type, $request->total , $time_departure, $time_return);

                        		if(count($data_first) > 0) 
                        		{
                        			$request->session()->put('total_people',$request->total);
                                    $request->session()->put('type_flight',$request->flight_type);

                                    return redirect()->route('flight_list_id',['id'=> $data_search[0]['fl_id']]); 
                                    // return ID of flight_list
                                }
                                else
                                {
                                   $errors = new MessageBag(['error' => ' No requested flight found !!']);
                                   return redirect()->back()->withInput()->withErrors($errors);
                               }
                           }
                       	}
                        break;
                    default:
                        break; 
                }
            }
        }
    }
}
