<div class="brand-area">
	<div class="container">
		<div class="brand__wrp">
			<div class="brand__shape">
				<img src="{{ asset('frontend/assets/images/FllACBjyLdGWBdDkApJg.png') }}" alt="">
			</div>
			<div class="swiper brand__slider">
				<div class="swiper-wrapper">



                    @foreach ($brands as $item)



												<div class="swiper-slide">
							<div class="brand__image image">
								<img src="{{asset(BrandImage().$item->BrandImage)}}" alt="image">
							</div>
						</div>

                        @endforeach




									</div>
			</div>
		</div>
	</div>
</div>
