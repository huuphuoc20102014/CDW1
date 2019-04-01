<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Testimonials extends Model
{
    //testmon_id, testmon_name, testmon_avatar, testmon_description, testmon_position
    protected $table = 'testimonials';
    protected $fillable = ['testmon_name','testmon_avatar','testmon_description','testmon_position'];
    public function Sua($id, $testmon_name, $testmon_avatar, $testmon_description, $testmon_position)
    {
        DB::table('testimonials')
        ->where('testmon_id','=',$id)
        ->update([
            'testmon_name' => $testmon_name,
            'testmon_avatar'=>$testmon_avatar,
            'testmon_description'=>$testmon_description,
            'testmon_position'=>$testmon_position
            
        ]);
    }
   
    
}