<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use App\Http\Requests\UpdateUserRequest;
use App\Model\Users;

class UpdateController extends Controller
{
    public function __construct() {
        $this->data_view = [
            'test' => 'array',
        ];
    }
    public function index()
    {
        $obj_us = new Users();
        $data = $obj_us->getdata(Session()->get('email'))->first();
        return view('update', ['data'=> $data]); 
    }

    
    public function store(Request $request)
    {
    	$updateuserrequest = new UpdateUserRequest();
        $validator = Validator::make($request->all(),$updateuserrequest->rules(),$updateuserrequest->messages());
        if ($validator->fails())
        {
             return redirect()->back()->withErrors($validator)->withInput();
        }
        else
        {
            $obj_us = new Users();
            $obj_us->update_info($request->first_name,$request->last_name,$request->phone_number , $request->gender ,$request->address,$request->password,Session()->get('email'));
            $request->session()->forget('firstname');
            $request->session()->forget('lastname');
            $request->session()->put('firstname', $request->first_name);
            $request->session()->put('lastname', $request->last_name);

            $errors = new MessageBag(['success_update' => 'Update in successfully !']);
            return redirect()->back()->withInput()->withErrors($errors);
           
        }
    }
}
