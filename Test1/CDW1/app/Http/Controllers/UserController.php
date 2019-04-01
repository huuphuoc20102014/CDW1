<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register(){

        return view('register');
    }
    public function postRegister(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'tel' => 'required',
            'password' => 'required|min:5',
            'name' => 'required',
        ],
        [
            // 'email.required'=>'email sai'
        ]);
        if($validator->fails()){
            // dd($validator->errors());
            return redirect()->route('register')->withErrors($validator);
        }
        else{
            DB::table('users')->insert([
                'email'=>$request->email,
                'phone'=>$request->tel,
                'password'=>bcrypt($request->password),
                'name'=>$request->name,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ]);
            return redirect()->route('register')->with('success','Đăng ký thành công');
        }

    }
    public function getLogin(){

        if(Auth::check()){
            return redirect()->route('index');
        }

        return view('login');
    }
    public function login_post(Request $request){
        $rules = [
    		'email' =>'required|email',
    		'password' => 'required|min:5'
    	];
    	$messages = [
    		'email.required' => 'Email là trường bắt buộc',
    		'email.email' => 'Email không đúng định dạng',
    		'password.required' => 'Mật khẩu là trường bắt buộc',
    		'password.min' => 'Mật khẩu phải chứa ít nhất 5 ký tự',
    	];
    	$validator = Validator::make($request->all(), $rules, $messages);

    	if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
    		$email = $request->input('email');
    		$password = $request->input('password');
                $attempt = $request->input('attempt');
                        
    		if( Auth::attempt(['email' => $email, 'password' =>$password])) {
                        
    			return redirect()->intended('/');
    		} else {
                        $attempt += 1;
    			$errors = new \Illuminate\Support\MessageBag(['error login' => 'Email hoặc mật khẩu không đúng']);
    			return redirect()->back()->withInput()->withErrors($errors);
    		}
    	}
      
        
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }

    public function edit_profile(){
        $user = Auth::user();
        return view('edit_profile',compact('user'));
    }
    public function edit_profile_post(Request $request){
        
        if($request->password != null){
            DB::table('users')->update([
                'password'=>bcrypt($request->password),
                // 'email'=>$request->email,
                'phone'=>$request->tel,
                'name'=>$request->name,
                'updated_at'=>date('Y-m-d H:i:s'),
            ]);
        }
        else{
            DB::table('users')->update([
                // 'email'=>$request->email,
                'phone'=>$request->tel,
                'name'=>$request->name,
                'updated_at'=>date('Y-m-d H:i:s'),
            ]);
        }
        
        return redirect()->route('edit-profile')->with('success',' Cập nhật thành công');
    }

}
