<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Transits extends Model
{
     protected $fillable = [
    	'transit_id',
        'transit_city',
        'transit_departure_date',
        'transit_landing_date',
        'transit_fl_id',
        'transit_airport_id',
        'transit_fl_type'
    ];

    protected $table = 'transits';
    protected $timestamp = false;
    protected $primarykey = 'transit_id';

    public function getTransit($idfly)
    {
        $obj = new Transits();
        $values = $obj::where('transit_fl_id',$idfly)
                ->join('cities','cities.city_id', '=', 'transits.transit_city_id')
                ->join('airports','airports.airport_id', '=', 'transits.transit_airport_id')
                ->paginate(4);
        return $values;
    }

    public function getTransit_type($idfly,$type)
    {
        $obj = new Transits();
        $values = $obj::where([['transit_fl_id',$idfly],['transit_fl_type',$type]])
                ->join('cities','cities.city_id', '=', 'transits.transit_city_id')
                ->join('airports','airports.airport_id', '=', 'transits.transit_airport_id')
                ->paginate(4);
        return $values;
    }
}
