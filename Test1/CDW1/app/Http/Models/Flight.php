<?php
namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
use DB;

class Flight extends Model{
    protected $table = 'flight';
    protected $primaryKey = 'flight_id';
    public function provinces()
    {
        return $this->hasMany(App\Http\Models\Province::class, 'flight_from_id','province_id');
    }
    public function findFlightByPro($flight_from ,$flight_to)
    {
      return $this->leftJoin('province', 'province.province_id', '=', 'flight.flight_from_id')
      
        ->where([['flight_from_id', '=' , $flight_from],['flight_to_id', '=' , $flight_to]])
        ->get();
    }
    
}

