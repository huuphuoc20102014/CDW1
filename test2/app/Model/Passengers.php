<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Passengers extends Model
{
    protected $fillable = [
    	'passenger_id',
    	'passenger_firstname',
    	'passenger_lastname',
    	'passenger_title',
    	'passenger_customer_id'
    ];
    protected $table = 'passengers';
    protected $timestamp = false;
    protected $primarykey = 'passenger_id';

    public function insert_passenger($ps_first , $ps_last , $ps_title,$ps_cs_id)
    {
    	Passengers::insert([
    		'passenger_firstname'  => $ps_first,
    		'passenger_lastname'  => $ps_last,
    		'passenger_title'  => $ps_title,
    		'passenger_customer_id' => $ps_cs_id
    	]);
    }
    public function getDataPassenger($id)
    {
        $value = Passengers::where([
            'passenger_customer_id' => $id
        ])->get();
        return $value;
    }
}
