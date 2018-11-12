<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>E-SHOP | @yield('title')</title>
	<base href="{{ asset('') }}">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="public/css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="public/css/slick.css" />
	<link type="text/css" rel="stylesheet" href="public/css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="public/css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="public/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="public/css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	@include('layout.header')

	@yield('content')

	@include('layout.footer')
	@if (session('success') || session('error'))
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-show="true">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <div class="modal-header">
		                <h4 class="modal-title" id="myModalLabel"><span style="color: #F8694A; border-color: #F8694A; border-bottom: 5px solid; font-size: 24px;">Thông báo</span></h4>
		            </div>
		            <div class="modal-body">
		            	<span style="font-size: 18px;">{{ session('success') }}{{ session('error') }}</span>
		                
		            </div>
		            <div class="modal-footer">
		                <button type="button" class="primary-btn" data-dismiss="modal">Đóng</button>
		            </div>
		        </div>
		    </div>
		</div>
	@endif
	<!-- jQuery Plugins -->
	<script src="public/js/jquery.min.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
	<script src="public/js/slick.min.js"></script>
	<script src="public/js/nouislider.min.js"></script>
	<script src="public/js/jquery.zoom.min.js"></script>
	<script src="public/js/main.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#myModal').modal('show');

			$('.dang-nhap').click(function () {
				currentUrl = window.location.pathname;

				window.location.href = 'dang-nhap?current_url=' + currentUrl;
			});

			$('.dang-xuat').click(function () {
				currentUrl = window.location.pathname;

				window.location.href = 'dang-xuat?current_url=' + currentUrl;
			});
		})
	</script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.1/socket.io.js"></script>
	<script>   
    	var socket = io('http://localhost:6001')
    </script>
	@yield('script')

</body>

</html>
