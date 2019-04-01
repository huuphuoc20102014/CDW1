<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct() {
    	$this->middleware('auth');
    }
    
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   /* public function index()
    {
        $res_list = Res::all();
//        return view('home',[
//            'res_list'=>$res_list,
//        ]);
        return view('home')->with(compact('res_list'));
    }*/
   
    public function index(){
        
        return view('template.index');
    }
    
}