<?php

namespace App\ Http\ Controllers;

use Validator;
use Illuminate\ Http\ Request;
use Illuminate\ Support\ MessageBag;
use RealRashid\ SweetAlert\ Facades\ Alert;
use App\ Model\ Users;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller {
	public function store( Request $request ) {
		$registerrequest = new RegisterRequest();
		$validator = Validator::make( $request->all(),$registerrequest->rules(), $registerrequest->messages());
		if ( $validator->fails() ) {
			return redirect()->back()->withErrors( $validator )->withInput();
		} else {
			$checkemail = Users::where( 'user_email', $request->email )->get();
			if ( count( $checkemail ) > 0 ) {
				$errors = new MessageBag( [ 'errorregis' => 'Account already exists! Please register another account !! ' ] );
				return redirect()->route( 'regis' )->withInput()->withErrors( $errors );
			} else {
				$time_register = time();
				$password = md5( $request->password );
				Users::insert( [
					'user_email' => $request->email,
					'user_password' => $password,
					'user_last_name' => $request->last_name,
					'user_first_name' => $request->first_name,
					'user_phone' => $request->phone,
					'user_time_register' => $time_register
				] );
				$errors = new MessageBag( [ 'successregis' => 'Sign up for a successful account !' ] );
				return redirect()->route( 'getLogin' )->withInput()->withErrors( $errors );

			}

		}
	}
}