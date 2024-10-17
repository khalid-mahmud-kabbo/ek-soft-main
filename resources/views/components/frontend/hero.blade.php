<section class="banner-two-area">
	<div class="banner-two__line">
		<img class="sway_Y__animation" src="{{ asset('frontend/assets/images/H3wcidxsCpOM8SQ274ax.png') }}" alt="shape">
	</div>
	<div class="swiper banner__slider">
		<div class="swiper-wrapper">

@foreach ($sliders as $item)
											<div class="swiper-slide">
					<div class="banner-two__line-left" data-animation="slideInLeft" data-duration="3s"
					     data-delay=".3s">
						<img src="{{ asset('frontend/assets/images/wfHxFfHI2xI62jsg25EB.png') }}" alt="shape">
					</div>
					<div class="banner-two__shape2" data-animation="slideInRight" data-duration="2s"
					     data-delay=".3s">
						<img src="{{ asset('frontend/assets/images/yiFCdKB5ZG4m35GZ0Vg2.png') }}" alt="shape">
					</div>
					<div class="banner-two__shape1" data-animation="slideInRight" data-duration="2s"
					     data-delay=".5s">
						<img src="{{ asset('frontend/assets/images/Gi5hMdVOGMK903R0o2yl.png') }}" alt="shape">
					</div>
					<div class="banner-two__right-shape wow slideInRight" data-wow-delay="200ms"
					     data-wow-duration="1500ms">
						<img class="sway_Y__animation" src="{{ asset('frontend/assets/images/bmaBGRE1VRPceZFzP0ub.png') }}"
						     alt="shape">
					</div>
					<div class="banner-two__circle-solid">
						<img class="animation__rotate" src="{{ asset('frontend/assets/images/BngX6ulmrpt2BkKgdNro.png') }}"
						     alt="shape">
					</div>
					<div class="banner-two__circle-regular">
						<img class="animation__rotateY" src="{{ asset('frontend/assets/images/cCUaHj29ZjMF6SpR75iX.png') }}"
						     alt="shape">
					</div>
					<div class="slide-bg" data-background="{{ asset(SliderImage() . $item->SliderImage) }}"></div>
					<div class="container">
						<div class="banner-two__content text-center">
							<h4 data-animation="fadeInUp" data-delay=".3s" class="text-white mb-20">
								{{ $item->subtitle }}
							</h4>
							<h1 data-animation="fadeInUp" data-delay=".5s" class="text-white">
								{{ $item->title }}
							</h1>
							<p data-animation="fadeInUp" data-delay=".7s" class="mt-20">
								{{ $item->short_description }}
							</p>
							<a data-animation="fadeInUp" data-delay="1s" href="{{ $item->button_link }}"
							   class="btn-one mt-50">{{ $item->button_text }} <i class="fa-regular fa-arrow-right-long"></i></a>
						</div>
					</div>
				</div>
                @endforeach
					</div>
	</div>
	<div class="banner__dot-wrp banner-two__dot-wrp">
		<div class="dot-light banner__dot"></div>
	</div>
</section>
