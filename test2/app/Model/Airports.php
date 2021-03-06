<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Airports extends Model
{
    protected $fillable = [
    	'airport_id',
    	'airport_name',
        'airport_city_id'
    ];
    public $timestamps = false;
    protected $table = 'airports';
    protected $primarykey = 'airport_id';


	public function getAirport_id($id)
    {
        $value = Airports::where('airport_city_id', $id);
        return $value;
    }
}
