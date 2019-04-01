<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Tạo cây menu 
Route::get('listairport',['as'=> 'list_airport','uses'=> 'FlightListController@list_airport']);
Route::get('listairport/{id}',['as'=> 'list_airport_nation','uses'=> 'FlightListController@list_airport_nation']);


Route::post('/insert-booking',['as'=> 'insert_booking','uses'=> 'FlightBookingController@insertBooking']);



Route::group(['middleware' => ['web']], function () {
    // Route for home - Flight Controller 
	Route::get('/',['as'=>'home','uses'=> 'FlightController@loadhome']);

	// Route Login - logout 
	Route::get('/login', ['as' => 'getLogin', 'uses' => 'LoginController@getLogin']);
	Route::post('/login', ['as' => 'postLogin', 'uses' => 'LoginController@postLogin']);
	Route::get('/logout', ['as' => 'getLogout', 'uses' => 'LoginController@getLogout']);

    // Register - Update User controller
	Route::get('/register',['as'=>'regis','uses'=> function () {return view('register');}]);
	Route::post('/postregister','RegisterController@store');
	Route::get('/update',['as'=>'user_up','uses'=> 'UpdateController@index']);
	Route::post('/post_update',['as'=>'post_up','uses'=> 'UpdateController@store']);

	// List controller 
	Route::get('/flight-list',['as'=> 'flight-list','uses'=> 'FlightSearchController@search_Id_Flight']);
	Route::get('/flight-list/{id}',['as'=> 'flight_list_id','uses'=> 'FlightListController@get_Id_Flightlist']);  


	// Detail Controller 
	Route::get('/flight-detail/{fl_id}',['as'=> 'flight_detail','uses'=> 'FlightDetailController@getDetail']);

	// Booking controller 
	Route::get('/flight-book/{id}',['as'=> 'flight_book','uses'=> 'FlightBookingController@getBooking']);
	
	Route::get('/flight-booking/user/{values}','FlightBookingController@handlingUser') ->name('handlinguser');

	// View Booking 
	Route::get('/view-book/{id}',['as'=> 'view_book','uses'=> 'ViewBookingController@viewBooking']);
});