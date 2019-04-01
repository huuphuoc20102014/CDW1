<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonials;
use Guzzle\Http\Message\Response;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    //
    public function index()
    {
    
        $testimonials = Testimonials::all();
        return view('back-end.home',[
            'testimonials'=>$testimonials
        ]);
    }
    public function create(){
        return response()->view('back-end.testmon_add');
    }
    public function edit(Request $request, $id)
    {
        $testimonial = DB::table('testimonials')
        ->where('testmon_id','=',$id)
        ->get();
        return response()->view('back-end.testmon_edit',['testimonial'=>$testimonial]);
    }
    public function destroy( $id)
    {
        //Testimonials::find($id)->delete();
        DB::table('testimonials')
        ->where('testmon_id','=',$id)
        ->delete();
        return redirect('admin');
    }
    
//testimonials(testmon_id, testmon_name, testmon_avatar, testmon_description, testmon_position)
    public function store(Request $request)
    {
        $user_data = $request->only('ten_kh', 'vitri', 'mo_ta','file');
      
        $testimonials = new Testimonials();
        $testimonials->testmon_name = $user_data['ten_kh'];
        $testimonials->testmon_description = $user_data['mo_ta'];
        $testimonials->testmon_position = $user_data['vitri'];
        if (!$request->hasFile($user_data['file'])){
            $file = $request->file('file');
            $file->move('1278/uploads',$file->getClientOriginalName());
            $testmon_avatar = $file->getClientOriginalName();
            $testimonials->testmon_avatar =  $testmon_avatar;
        }
        $testimonials->save();
        return \response()->view('back-end.testmon_add',['message'=>"Thêm cảm nhận thành công"]);
    }

    public function update(Request $request,$id)
    {

        $user_data = $request->only('ten_kh', 'vitri', 'mo_ta','file','file_hidden');
        $testmon_name = $user_data['ten_kh'];
        $testmon_description = $user_data['mo_ta'];
        $testmon_position = $user_data['vitri'];
        $testmon_avatar =$user_data['file_hidden'];
        $testimonial = DB::table('testimonials')
        ->where('testmon_id','=',$id)
        ->get();
        $testimonials = new Testimonials();
        if (!$request->hasFile($user_data['file'])){
            $file = $request->file('file');
            if(!empty($file)){
                $file->move('1278/uploads',$file->getClientOriginalName());
                $testmon_avatar = $file->getClientOriginalName();
            }
            
            
        }
        
        //Sua($id, $testmon_name, $testmon_avatar, $testmon_description, $testmon_position)
        $testimonials->Sua($id,$testmon_name,$testmon_avatar,$testmon_description,$testmon_position);
       
        return \response()->view('back-end.testmon_edit',['message'=>"Sửa cảm nhận thành công",'testimonial'=>$testimonial]);
    }

}
