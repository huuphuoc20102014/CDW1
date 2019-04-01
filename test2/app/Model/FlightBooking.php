<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FlightBooking extends Model
{
    protected $fillable = [
    	'fb_id',
        'fb_fl_id',
    	'fb_departure_date',
    	'fb_landing_date',
        'fb_customer_id',
        'fb_total',
        'fb_price'
    ];

    protected $table = 'flight_booking';
    protected $timestamp = false;
    protected $primarykey = 'fb_id';

    public function insert_Flight($fb_fl_id,$fb_departure_date,$fb_landing_date,$fb_customer_id,$fb_total,$fb_price)
    {
        FlightBooking::insert([
            'fb_fl_id' => $fb_fl_id,
            'fb_departure_date' => $fb_departure_date,
            'fb_landing_date' => $fb_landing_date,
            'fb_customer_id'=>$fb_customer_id,
            'fb_total' =>$fb_total,
            'fb_price' =>$fb_price
        ]);
    }

    public function get_total($id)
    {
        $value = FlightBooking::where(['fb_fl_id' => $id])
                    ->sum('fb_total');
        return $value;
    }
    public function get_Id_Book($fb_fl_id,$fb_departure_date,$fb_landing_date,$fb_customer_id,$fb_total,$fb_price)
    {
        $value = FlightBooking::where([
            ['fb_fl_id' , $fb_fl_id],
            ['fb_departure_date' , $fb_departure_date],
            ['fb_landing_date' , $fb_landing_date],
            ['fb_customer_id',$fb_customer_id],
            ['fb_total' ,$fb_total],
            ['fb_price' ,$fb_price]
        ])->get('fb_id');
        return $value;
    }
    public function getDataBooking($id)
    {
        $value = FlightBooking::where([
            'fb_id' => $id
        ])->get();
        return $value;
    }
}
