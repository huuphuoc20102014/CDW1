<?php

namespace App\Http\Controllers;

use App\Http\Models\Flight;
use App\Http\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FlightController extends Controller
{
   
    public function index()
    {
        $fli_list = Flight::all();
        $pro_list = Province::all();
        /* chuyen doi string -> float
        $var = '122.34343';
        $float_value_of_var = floatval($var);
        var_dump($float_value_of_var);*/
        
        return view('index', ['fli_list'=>$fli_list, 'pro_list'=>$pro_list]);
        

    }
    public function search(Request $request)
    {
        
        $departure = new \DateTime($request->get('departure'));
        $return_date = new \DateTime($request->get('return'));
        $flight_from = $request->get('from');
        $flight_to = $request->get('to');
        $item = DB::table('flight')
                    ->where([['flight_from_id', '=' , $flight_from],
                    ['flight_to_id', '=' , $flight_to],
                    /*['flight_departure', '>=', $departure],
                    ['flight_return', '>=', $return_date],*/
                    ])
                    ->get();
        $citys = Province::all();
        
        return view('flight-list',['fli_list'=>$item,'citys' =>$citys ,'person'=>$request->get('person')]);
       

    }
    public function getDetailFlight(Request $request)
    {
       
        $flight = Flight::find($request->get('id'));

        $price = $flight->flight_price * $request->get('person');
        $sum_price = number_format($price);
      
        $citys = Province::all();
        $person= $request->get('person');
        return view('flight-detail', compact('flight', 'citys','person','sum_price'));
    }
    public function getDetail($id)
    {
        
        $flight = Flight::find($id);
        $citys = Province::all();
        return view('flight-detail', compact('flight', 'citys'));
        
    }
    
   
}
