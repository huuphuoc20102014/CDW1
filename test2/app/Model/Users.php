<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = [
    	'user_id',
        'user_email',
        'user_password',
        'user_first_name',
        'user_last_name',
        'user_phone',
        'user_last_access',
        'user_attempt',
        'user_status',
        'user_time_register',
        'user_level',
        'user_gender',
        'user_address'
    ];

    protected $table = 'users';
    protected $timestamp = false;
    protected $primarykey = 'user_id';
    const UPDATED_AT = null;

    // Lấy toàn bộ dữ liệu ra = email 
    public function getdata($email)
    {
        $users = $this->where('user_email',$email);
        return $users;
    }
    public function getdata_id($id)
    {
        $users = $this->where('user_id',$id)->first();
        return $users;
    }
    // Hàm cập nhật khi login sai 
    public function updateAttempt($email,$date,$attempt)
    {
        Users::where('user_email',$email)->update(['user_attempt'=> $attempt,'user_last_access'=>$date]);
    }
    

    // Hàm update 
    public function update_info($us_firstname , $us_lastname, $us_phonenumber , $us_gender ,$us_address , $us_pass , $user_email)
    {
        if($us_pass == "")
        {
            Users::where('user_email',$user_email)->update([
                'user_first_name'   => $us_firstname,
                'user_last_name'    => $us_lastname,
                'user_phone'        => $us_phonenumber,
                'user_gender'       => $us_gender,
                'user_address'      => $us_address
            ]);
        }
        else
        {
            $password = md5($us_pass);
            Users::where('user_email',$user_email)
                ->update([
                'user_first_name'   => $us_firstname,
                'user_last_name'    => $us_lastname,
                'user_phone'        => $us_phonenumber,
                'user_gender'       => $us_gender,
                'user_address'      => $us_address,
                'user_password'     =>  $password
            ]);
        }
        
    }
}
