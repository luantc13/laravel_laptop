@extends('layout.master')

@section('title')
	Liên hệ
@endsection

@section('content')
	@include('layout.navigation2')

	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="trang-chu">Trang chủ</a></li>
				<li class="active">Liên hệ</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<h3><i class="fa fa-info-circle"></i> Thông tin liên hệ</h3>
						    
	                <div class="break"></div>
				   	<h4><i class= "fa fa-home"></i> Địa chỉ: <small>KTX Khu B ĐHQG Tp. HCM, Đông Hòa, Dĩ An, Bình Dương </small></h4>

	                <h4><i class="fa fa-envelope"></i> Email : <small>luantc13@gmail.com</small></h4>

	                <h4><i class="fa fa-phone"></i> Điện thoại: <small>0123456789</small></h4>



	                <br><br>
	                <h3><i class="fa fa-globe"></i> Bản đồ</h3>
	                <div class="break"></div><br>
	                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.073873347653!2d106.78043601473475!3d10.881985892249995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d89aad780e49%3A0x54542761d4c22175!2sKTX+Khu+B%2C+%C4%90HQG!5e0!3m2!1svi!2s!4v1515146144525" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
					
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
@endsection