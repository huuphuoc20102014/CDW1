<?php
namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;

class Province extends Model{
    protected $table = 'province';
    protected $primaryKey = 'province_id';
    public function flights()
    {
        return $this->hasMany(App\Http\Models\Flight::class, 'province_id','flight_from_id');
    }
}

