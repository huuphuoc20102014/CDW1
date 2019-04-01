<?php

namespace App\Http\Controllers;

use App\Http\Models\Res;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ResController extends PageController
{
    public function index()
    {
        $res_list = Res::paginate(10);
        return view('vendor.laravel-authentication-acl.admin.res.index', compact('res_list'));

    }
    public function create()
    {
        return view('vendor.laravel-authentication-acl.admin.res.create');
    }

    public function edit($res_id)
    {
        $res = Res::find($res_id)->toArray();
        return view('vendor.laravel-authentication-acl.admin.res.edit', compact('res'));
    }
    public function destroy($res_id)
    {
        $res = Res::find($res_id)->delete();
        return redirect()->route('list-res');
    }
    public function update(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'txtName' => "required:res,res_name",
                'txtDes' => "required:res,res_des",
                'txtBed' => "required|numeric:res,res_bed",
                'txtBath' => "required|numeric:res,res_bathroom",
                'txtArea' => "required|numeric:res,res_size",
                'txtPrice' => "required|numeric:res,res_price",
            ],
            [
                'txtName.required' => "Name không được bỏ trống",
                'txtDes.required' => "Description không được bỏ trống",
                'txtBed.required' => "Bedroom không được bỏ trống",
                'txtBed.numeric' => "Bedroom phải nhập số",
                'txtBath.required' => "Bathroom không được bỏ trống",
                'txtBath.numeric' => "Bathroom phải nhập số",
                'txtArea.required' => "Area không được bỏ trống",
                'txtArea.numeric' => "Area phải nhập số",
                'txtPrice.required' => "Price không được bỏ trống",
                'txtPrice.numeric' => "Price phải nhập số",
            ]
        );
        if ($validator->fails()) {
            return redirect()->route('create-res')->with(['errors' => $validator->errors()]);
        }
        $res = Res::find($request->txtResId);

        if(Input::hasFile('txtFile')){
            $file = Input::file('txtFile');
            $file->move(public_path().'/images/', $file->getClientOriginalName());
            $oldFile = $res->res_img;
            $res->res_img = $file->getClientOriginalName();
            Storage::delete($oldFile);
        }

        $res->res_name = $request->txtName;
        $res->res_des = $request->txtDes;
        $res->res_bed = $request->txtBed;
        $res->res_bathroom = $request->txtBath;
        $res->res_size = $request->txtArea;
        $res->res_price = $request->txtPrice;
        $res->save();
        return redirect()->route('edit-res',['res_id'=>$request->txtResId])->with(['message' => 'Sửa thành công']);
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'txtName' => "required:res,res_name",
                'txtDes' => "required:res,res_des",
                'txtBed' => "required|numeric:res,res_bed",
                'txtBath' => "required|numeric:res,res_bathroom",
                'txtArea' => "required|numeric:res,res_size",
                'txtPrice' => "required|numeric:res,res_price",
                'txtFile' => "required:res,res_img",
            ],
            [
                'txtName.required' => "Name không được bỏ trống",
                'txtDes.required' => "Description không được bỏ trống",
                'txtBed.required' => "Bedroom không được bỏ trống",
                'txtBed.numeric' => "Bedroom phải nhập số",
                'txtBath.required' => "Bathroom không được bỏ trống",
                'txtBath.numeric' => "Bathroom phải nhập số",
                'txtArea.required' => "Area không được bỏ trống",
                'txtArea.numeric' => "Area phải nhập số",
                'txtPrice.required' => "Price không được bỏ trống",
                'txtPrice.numeric' => "Price phải nhập số",
                'txtFile.required' => "Images không được bỏ trống",
            ]
        );
        if ($validator->fails()) {
            return redirect()->route('create-res')->with(['errors' => $validator->errors()]);
        }
        $res = new Res();

        if(Input::hasFile('txtFile')){
            $file = Input::file('txtFile');
            $file->move('images', $file->getClientOriginalName());
            $res->res_img = $file->getClientOriginalName();
        }
        $res->res_name = $request->txtName;
        $res->res_des = $request->txtDes;
        $res->res_bed = $request->txtBed;
        $res->res_bathroom = $request->txtBath;
        $res->res_size = $request->txtArea;
        $res->res_price = $request->txtPrice;
        $res->save();
        return redirect()->route('create-res')->with(['message' => 'Thêm thành công']);
    }
}
