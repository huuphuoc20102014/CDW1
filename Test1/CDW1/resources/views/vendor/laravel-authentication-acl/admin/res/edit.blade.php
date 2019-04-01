@extends('laravel-authentication-acl::admin.layouts.base-2cols')

@section('title')
    Admin area: edit res
@stop

@section('content')

    <div class="row">
        <div class="col-md-12">
            {{-- successful message --}}
            <?php $message = Session::get('message'); ?>
            @if( isset($message) )
                <div class="alert alert-success">{!! $message !!}</div>
            @endif
            @if($errors->any() )
                @foreach($errors->all() as $err)
                    <div class="alert alert-danger">{!! $err !!}</div>
                @endforeach
            @endif
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="panel-title bariol-thin">Edit Res</h3>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="col-md-6 col-xs-12">
                        <form action="{{route('update-res')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="txtResId" value="{{$res['res_id']}}">
                            <img style="width: 100px; height: 100px;" src="{!! url('images/'.$res['res_img']) !!}">
                            <div class="form-group">
                                <label for="">Images</label>
                                <input type="file" name="txtFile" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="txtName" value="{{$res['res_name']}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <input type="text" name="txtDes" value="{{$res['res_des']}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Bedroom</label>
                                <input type="text" name="txtBed" value="{{$res['res_bed']}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Bathroom</label>
                                <input type="text" name="txtBath" value="{{$res['res_bathroom']}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Area</label>
                                <input type="text" name="txtArea" value="{{$res['res_size']}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Price</label>
                                <input type="text" name="txtPrice" value="{{$res['res_price']}}" class="form-control">
                            </div>
                            <button class="btn btn-primary" type="submit">Lưu</button>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop