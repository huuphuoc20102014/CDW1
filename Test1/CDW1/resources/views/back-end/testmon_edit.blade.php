@extends('back-end.layout_master')  

@section('content')

<!-- BEGIN CONTENT -->
<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="#" title="" class="tip-bottom current">Sửa thông tin cảm nhận</a></div>
	</div>
	@if(isset($message))
    <div class="alert alert-success">
        <strong>{{$message}}</strong>
    </div>
    @endif
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-box">
					
					<div class="widget-content nopadding">

						<!-- BEGIN USER FORM -->
						@if(isset($testimonial))
                        		@foreach($testimonial as $item)

						<form role="form" action="{{ route('update-testmon',['id'=>  $item->testmon_id])}}" method="post" class="form-horizontal" enctype="multipart/form-data">

							{{ csrf_field() }}
							<div class="product_technical"><h5>Thông tin cảm nhận khách hàng</h5></div>
								
							<div class="control-group">
								<label class="control-label">Chọn một ảnh :</label>
								<div class="controls">
									<input type="file" name="file" id="file">
								</div>
								<div class="controls">
									<input type="hidden" class="span11" value="{{$item->testmon_avatar}}" name="file_hidden" id="ten_sach" />
								</div>
							</div>

							<div class="control-group">
								<label class="control-label">Tên khách hàng</label>
								<div class="controls">
									<input type="text" class="span11" value="{{$item->testmon_name}}" name="ten_kh" id="ten_sach" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Vị trí</label>
								<div class="controls">
									<input type="text" class="span11" value="{{$item->testmon_position}}" name="vitri" id="ten_sach" />
								</div>
							</div>

							<div class="control-group">
								<label class="control-label">Mô tả</label>
								<div class="controls">
									<textarea class="span11" name="mo_ta" id="mo_ta">{{$item->testmon_description}}</textarea>
								</div>									
							</div>

						<div class="product_technical">
							<a href="{{ URL::to('/admin') }}" class="btn btn-danger" >Quay lại</a>
							<button type="submit" value="submit" name="OK" value="OK" class="btn btn-success" >Sửa</button>
						</div>
							
						</div>
							@endforeach
						@endif   	
						
					</form>

					<!-- END USER FORM -->
					<style type="text/css">
						.product_technical{
							text-align: center;
							margin: 5px 0px;
						}
					</style>

				</div>
			</div>
		</div>
	</div>
</div>
</div>

<!-- END CONTENT -->
@endsection