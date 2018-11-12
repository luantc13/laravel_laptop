	<!-- HOME -->
	<div id="home">
		<!-- container -->
		<div class="container">
			<!-- home wrap -->
			<div class="home-wrap">
				<!-- home slick -->
				<div id="home-slick">
					@foreach ($slides as $item)
						<!-- banner -->
						<a href="{{ $item['link'] }}" class="banner banner-1">
							<img src="public/upload/slide/{{ $item['image'] }}" alt="">
						</a>
						<!-- /banner -->
					@endforeach
					
				</div>
				<!-- /home slick -->
			</div>
			<!-- /home wrap -->
		</div>
		<!-- /container -->
	</div>
	<!-- /HOME -->