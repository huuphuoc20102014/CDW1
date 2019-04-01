@extends('back-end.layout_master')  

@section('content')


  <!-- BEGIN CONTENT -->
  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="#" title="Quản lý sách" class="tip-bottom current">Quản lý Testimonials</div>
    </div>
    <div class="container-fluid">
      <hr>
      <a href="{{ url('/admin/testmon/create') }}" class="btn btn-success btn-mini" >Thêm cảm nhận mới</a>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
              <h5>Tất cả Testimonials</h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>testmon_avatar</th>
                    <th>testmon_name</th>
                    <th>testmon_description</th>
                    <th>testmon_position</th>
                    <th>Thao tác</th>
                  </tr>
                </thead>
                <tbody>
                @if(isset($testimonials))
                        @foreach($testimonials as $testimonial)
                        <tr class="">
                          <td><img src="{{ URL::asset('1278/uploads')}}/{{$testimonial['testmon_avatar']}}" alt="" width="200" height="200" style="margin: auto; display:block;"></td>
                          <td style="font-weight: bold;">{{$testimonial['testmon_name']}}</td>
                          <td>{{$testimonial['testmon_description']}}</td>
                          <td>{{$testimonial['testmon_position']}}</td>
                          <td>
                            <a href="{{route('edit-testmon',['id'=>$testimonial['testmon_id']])}}" class="btn btn-success btn-mini">Sửa</a>
                            <a href="{{route('destroy-testmon',$testimonial['testmon_id'])}}" class="btn btn-success btn-mini" style="background:red; margin:2px 0; width: 19px;">Xóa</a>
                          </td>
                        </tr>
                      @endforeach
                  @endif   
                </tbody>
              </table>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection