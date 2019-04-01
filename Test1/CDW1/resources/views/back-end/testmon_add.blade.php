@extends('back-end.layout_master')  

@section('content')

<!-- BEGIN CONTENT -->
<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="#" title="Quản lý testmon" class="tip-bottom current">Quản lý cảm nhận</div>
		<h1>Thêm cảm nhận</h1>
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


						<form role="form" action="{{ url('/admin/testmon/store') }}" method="post" class="form-horizontal" enctype="multipart/form-data">

							{{ csrf_field() }}

							<div class="product_technical"><h5>Thông tin cảm nhận khách hàng</h5></div>

							<div class="control-group">
								<label class="control-label">Chọn một ảnh :</label>
								<div class="controls">
									<input type="file" name="file" id="file">
								</div>
								
							</div>

							<div class="control-group">
								<label class="control-label">Tên khách hàng</label>
								<div class="controls">
									<input type="text" class="span11" placeholder="Tên khách hàng" name="ten_kh" id="ten_sach" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Vị trí</label>
								<div class="controls">
									<input type="text" class="span11" placeholder="Vị trí" name="vitri" id="ten_sach" />
								</div>
							</div>

							<div class="control-group">
								<label class="control-label">Mô tả</label>
								<div class="controls">
									<textarea class="span11" name="mo_ta" id="mo_ta"></textarea>
								</div>									
							</div>

						<div class="product_technical">
							<a href="{{ URL::to('/admin') }}" class="btn btn-danger" >Quay lại</a>
							<button type="submit" value="submit" name="OK" value="OK" class="btn btn-success" >Thêm</button>
						</div>
							
						</div>
						
						
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