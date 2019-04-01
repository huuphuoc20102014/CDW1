<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\MessageBag;
use App\Model\Users;
use DateTime;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{

    public function getLogin() {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $loginrequest = new LoginRequest();
        $validator = Validator::make($request->all(), $loginrequest->rules(), $loginrequest->messages());
        if ($validator->fails()) 
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else
        {
            $obj_users = new Users();
            $data_users = $obj_users->getdata($request->email)->first();
            $attempt_now = $data_users['user_attempt']; 
            $getEmail = $data_users['user_email'];
            $getPassword = $data_users['user_password'];
            $getLast_access = $data_users['user_last_access'];
            $current_time = time('Asia/Ho_Chi_Minh'); 

            if($getEmail == $request->email)
            {
                if($getPassword == md5($request->password) )
                {
                    if($attempt_now <= 3)
                    {
                        $request->session()->put('login', true);
                        $request->session()->put('email',$data_users['user_email']);
                        $request->session()->put('firstname', $data_users['user_first_name']);
                        $request->session()->put('lastname', $data_users['user_last_name']);
                        $request->session()->put('user_remember',1);

                        if(Session()->has('id_book'))
                        {
                            $errors = new MessageBag(['successlogin' => ' Logged in successfully !']);
                            return redirect()->route('flight_book',['id'=> Session()->get('id_book')])->withInput()->withErrors($errors);
                        }
                        else
                        {
                            $errors = new MessageBag(['successlogin' => ' Logged in successfully !']);
                            return redirect()->route('home')->withInput()->withErrors($errors);
                        }
                    }
                    else 
                    {

                        if( $getLast_access + 120 > $current_time )
                        {
                            $errors = new MessageBag(['errorlogin' => ' Account has been locked for 30 minutes !']);
                            return redirect()->back()->withInput()->withErrors($errors);
                        }
                        else 
                        {
                            $obj_users->updateAttempt($getEmail,0,0);
                                // Set session return for app.blade.php
                            $request->session()->put('login', true);
                            $request->session()->put('email',$data_users['user_email']);
                            $request->session()->put('firstname', $data_users['user_first_name']);
                            $request->session()->put('lastname', $data_users['user_last_name']);
                            $request->session()->put('user_remember',1);

                            if(Session()->has('id_book'))
                            {
                                $errors = new MessageBag(['successlogin' => ' Logged in successfully !']);
                                return redirect()->route('flight_book',['id'=> Session()->get('id_book')])->withInput()->withErrors($errors);
                            }
                            else
                            {
                                $errors = new MessageBag(['successlogin' => ' Logged in successfully !']);
                                return redirect()->route('home')->withInput()->withErrors($errors);
                            }
                        }
                    }
                }
                else 
                {
                    if($attempt_now >= 3)
                    {
                        if(($getLast_access + 120 ) > $current_time ) 
                        {
                            $errors = new MessageBag(['errorlogin' => 'Account has been locked for 30 minutes!']);
                            $obj_users->updateAttempt($getEmail,$getLast_access,$attempt_now + 1);
                            return redirect()->back()->withInput()->withErrors($errors);
                        }
                        else
                        {
                            $obj_users->updateAttempt($getEmail,$current_time,$attempt_now + 1);
                            $errors = new MessageBag(['errorlogin' => ' Wrong email or password! Please check again !']);
                            return redirect()->back()->withInput()->withErrors($errors); 
                        }

                    }
                    else 
                    {
                        $current_time = time();
                        $obj_users->updateAttempt($getEmail,$current_time,$attempt_now + 1);
                        $errors = new MessageBag(['errorlogin' => ' Wrong email or password! Please check again !']);
                        return redirect()->back()->withInput()->withErrors($errors);
                    }
                }
            }
            else
            {
                $errors = new MessageBag(['errorlogin' => 'Email does not exist . Please register for an account !']);
                return redirect()->back()->withInput()->withErrors($errors);
            }
        }
    }


public function getLogout(Request $request)
{
    $request->session()->flush();
    $errors = new MessageBag(['errorlogin' => ' Account logged out !']);
    return redirect()->route('getLogin')->withInput()->withErrors($errors);
}


}
