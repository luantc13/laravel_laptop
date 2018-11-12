@extends('layout.master')

@section('title')
	Trang chủ
@endsection

@section('content')
	@include('layout.navigation1')

	@include('layout.slide')

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			@php
				$banner = $categories;
				$banner1 = $banner->take(3);
				$banner2 = $banner->slice(3);
			@endphp
			<!-- row -->
			<div class="row">
				@foreach ($banner1 as $item)
					<!-- banner -->
					<div class="col-md-4 col-sm-6">
						<a class="banner banner-1" href="{{ $item['slug'] }}">
							<img src="public/upload/category/{{ $item['image'] }}" alt="">
						</a>
					</div>
					<!-- /banner -->
				@endforeach

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Sản phẩm mới</h2>
					</div>
				</div>
				<!-- section title -->
				@foreach ($newProduct as $item)
					<!-- Product Single -->
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="product product-single">
							<div class="product-thumb">
								<div class="product-label">
									<span>Mới</span>
									@if ($item['promotion_price'] != 0)
										<span class="sale">Giảm giá</span>
									@endif
								</div>
								<a href="{{ $item['slug'] }}.html" class="main-btn quick-view" style="cursor: pointer;"><i class="fa fa-search-plus"></i> Chi tiết</a>
								<img src="public/upload/product/{{ $item->imageProduct[0]['name'] }}" alt="" height="200px">
							</div>
							<div class="product-body">
								@php
									printPrice($item['unit_price'], $item['promotion_price']);
								@endphp
								<h2 class="product-name"><a href="{{ $item['slug'] }}.html">{{ $item['name'] }}</a></h2>
								<div class="product-rating text-center">
									@for ($i = 0; $i < round($item['rating']); $i++)
										<i class="fa fa-star"></i>
									@endfor
									@for ($i = 0; $i < (5 - round($item['rating'])); $i++)
										<i class="fa fa-star-o empty"></i>
									@endfor
								</div>
								<div class="product-btns text-center">
									<a href="them-gio-hang/{{ $item->id }}/1" class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
								</div>
							</div>
						</div>
					</div>
					<!-- /Product Single -->
				@endforeach
			</div>
			<!-- /row -->
			<div class="pull-right"><a href="tat-ca-san-pham?sort=latest" class="primary-btn" style="cursor: pointer;">Xem thêm</a></div>
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- section -->
	<div class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				@php
					$banner2_1 = $banner2->shift();
					$banner2_2 = $banner2->take(2);
				@endphp
				<!-- banner -->
				<div class="col-md-8">
					<a class="banner banner-1" href="{{ $banner2_1['slug'] }}">
						<img src="public/upload/category/{{ $banner2_1['image'] }}" alt="">
					</a>
				</div>
				<!-- /banner -->
				
				@foreach ($banner2_2 as $item)
					<!-- banner -->
					<div class="col-md-4 col-sm-6">
						<a class="banner banner-1" href="{{ $item['slug'] }}">
							<img src="public/upload/category/{{ $item['image'] }}" alt="">
						</a>
					</div>
					<!-- /banner -->
				@endforeach

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Sản phẩm giá tốt</h2>
					</div>
				</div>
				<!-- section title -->

				@foreach ($goodPriceProduct as $item)
					<!-- Product Single -->
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="product product-single">
							<div class="product-thumb">
								<div class="product-label">
									<span>Mới</span>
									@if ($item['promotion_price'] != 0)
										<span class="sale">Giảm giá</span>
									@endif
								</div>
								<a href="{{ $item['slug'] }}.html" class="main-btn quick-view" style="cursor: pointer;"><i class="fa fa-search-plus"></i> Chi tiết</a>
								<img src="public/upload/product/{{ $item->imageProduct[1]['name'] }}" alt="" height="200px">
							</div>
							<div class="product-body">
								@php
									printPrice($item['unit_price'], $item['promotion_price']);
								@endphp
								<h2 class="product-name"><a href="{{ $item['slug'] }}.html">{{ $item['name'] }}</a></h2>
								<div class="product-rating text-center">
									@for ($i = 0; $i < round($item['rating']); $i++)
										<i class="fa fa-star"></i>
									@endfor
									@for ($i = 0; $i < (5 - round($item['rating'])); $i++)
										<i class="fa fa-star-o empty"></i>
									@endfor
									
								</div>
								<div class="product-btns text-center">
									<a href="them-gio-hang/{{ $item->id }}/1" class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
								</div>
							</div>
						</div>
					</div>
					<!-- /Product Single -->
				@endforeach
			</div>
			<!-- /row -->

			<div class="pull-right"><a href="tat-ca-san-pham?sort=price_asc" class="primary-btn" style="cursor: pointer;">Xem thêm</a></div>
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

		<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Sản phẩm bán chạy</h2>
					</div>
				</div>
				<!-- section title -->

				@foreach ($sellingProduct as $item)
					<!-- Product Single -->
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="product product-single">
							<div class="product-thumb">
								<div class="product-label">
									<span>Mới</span>
									@if ($item['promotion_price'] != 0)
										<span class="sale">Giảm giá</span>
									@endif
								</div>
								<a href="{{ $item['slug'] }}.html" class="main-btn quick-view" style="cursor: pointer;"><i class="fa fa-search-plus"></i> Chi tiết</a>
								<img src="public/upload/product/{{ $item->imageProduct[1]['name'] }}" alt="" height="200px">
							</div>
							<div class="product-body">
								@php
									printPrice($item['unit_price'], $item['promotion_price']);
								@endphp
								<h2 class="product-name"><a href="{{ $item['slug'] }}.html">{{ $item['name'] }}</a></h2>
								<div class="product-rating text-center">
									@for ($i = 0; $i < round($item['rating']); $i++)
										<i class="fa fa-star"></i>
									@endfor
									@for ($i = 0; $i < (5 - round($item['rating'])); $i++)
										<i class="fa fa-star-o empty"></i>
									@endfor
									
								</div>
								<div class="product-btns text-center">
									<a href="them-gio-hang/{{ $item->id }}/1" class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
								</div>
							</div>
						</div>
					</div>
					<!-- /Product Single -->
				@endforeach
			</div>
			<!-- /row -->

			<div class="pull-right"><a href="tat-ca-san-pham?sort=selling" class="primary-btn" style="cursor: pointer;">Xem thêm</a></div>
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
@endsection