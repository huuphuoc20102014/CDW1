<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title bariol-thin"><i class="fa fa-user"></i>Res list</h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-3">
                    <a href="{{route('create-res')}}" class="btn btn-info"><i class="fa fa-plus"></i> Thêm mới</a>
            </div>
        </div>
      <div class="row">
          <div class="col-md-12">
              <table class="table table-hover">
                      <thead>
                          <tr>
                              <th>STT</th>
                              <th>Images</th>
                              <th>Name</th>
                              <th>Description</th>
                              <th>Bedrooms</th>
                              <th>Bathrooms</th>
                              <th>Area</th>
                              <th>Price</th>
                              <th>Thao tác</th>
                          </tr>
                      </thead>
                      <tbody>
                      @if(isset($res_list))
                          @foreach($res_list as $res)
                          <tr>
                              <td>{!! $res->res_id !!}</td>
                              <td><img style="width: 100px; height: 100px;" src="{!! url('/images/'.$res->res_img) !!}"></td>
                              <td>{!! $res->res_name !!}</td>
                              <td>{!! $res->res_des !!}</td>
                              <td>{!! $res->res_bed !!}</td>
                              <td>{!! $res->res_bathroom !!}</td>
                              <td>{!! $res->res_size !!}</td>
                              <td>{!! $res->res_price !!}</td>
                              <td style="width: 10%">
                                      <a href="{{route('edit-res',['res_id'=>$res->res_id])}}"><i class="fa fa-pencil-square-o fa-2x"></i></a>
                                      <a href="{{route('destroy-res',['res_id'=>$res->res_id])}}" class="margin-left-5 delete"><i class="fa fa-trash-o fa-2x"></i></a>

                              </td>
                          </tr>
                      </tbody>
                      @endforeach
              </table>
              <div class="paginator">
                {{$res_list->links()}}
              </div>
              @else
                  <span class="text-warning"><h5>No results found.</h5></span>
              @endif
          </div>
      </div>
    </div>
</div>
