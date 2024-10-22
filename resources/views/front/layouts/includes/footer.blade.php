<footer class="footer-two-area secondary-bg">
	<div class="footer__shape-regular-left wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
		<img src="{{ asset('frontend/assets/images/BAQVgLnU7QvZtTJjG4Jh.png') }}" alt="shape">
	</div>
	<div class="footer__shape-solid-left wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
		<img class="sway_Y__animation" src="{{ asset('frontend/assets/images/x8UL5jR65pUMjCNXZayT.png') }}" alt="shape">
	</div>
	<div class="footer__shape-solid-right wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
		<img class="sway_Y__animation" src="{{ asset('frontend/assets/images/NM5dHWi3A6tYT1Qwx1wy.png') }}" alt="shape">
	</div>
	<div class="footer__shape-regular-right wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
		<img src="{{ asset('frontend/assets/images/UqVx6L4239ct7n3yeXfe.png') }}" alt="shape">
	</div>
	<div class="footer__shadow-shape">
		<img src="{{ asset('frontend/assets/images/Il3Ju0hJ6BFqI4lRFh62.png') }}" alt="shodow">
	</div>
	<div class="container">
		<div class="footer__wrp pt-100 pb-100">
			<div class="footer__item item-big wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
				<a href="/" class="logo mb-30">
					<img src="{{ asset(IMG_LOGO_PATH . $allsettings['main_logo']) }}" alt="image">
				</a>
				<p style="text-align: justify;">{{ $allsettings['footer_about'] }}</p>
				<div class="social-icon">
											<a target="_blank" class="social-media-link" href="{{ $allsettings['Facebook'] }}">
                                        <i class="fab fa-facebook-f"></i></a>


                                        <a target="_blank" class="social-media-link" href="{{ $allsettings['Twitter'] }}">
                                            <i class="fab fa-twitter"></i></a>

											<a target="_blank" class="social-media-link"
                                        href="{{ $allsettings['Linkedin'] }}">
                                        <i class="fab fa-linkedin-in"></i></a>

											<a target="_blank" class="social-media-link"
                                        href="{{ $allsettings['Youtube'] }}">
                                        <i class="fa-brands fa-youtube"></i></a>
									</div>
			</div>


			<div class="footer__item item-sm wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
				<h3 class="footer-title">Our Services</h3>
				<ul>
					<li><a href="{{ $allsettings['footer_link_service_1'] }}"><i class="fa-regular fa-angles-right me-1"></i> {{ $allsettings['footer_link_title_service_1'] }}</a></li>
											<li><a href="{{ $allsettings['footer_link_service_2'] }}"><i
									class="fa-regular fa-angles-right me-1"></i> {{ $allsettings['footer_link_title_service_2'] }}</a></li>
											<li><a href="{{ $allsettings['footer_link_service_3'] }}"><i
									class="fa-regular fa-angles-right me-1"></i> {{ $allsettings['footer_link_title_service_3'] }}</a></li>
											<li><a href="{{ $allsettings['footer_link_service_4'] }}"><i
									class="fa-regular fa-angles-right me-1"></i> {{ $allsettings['footer_link_title_service_4'] }}</a></li>
											<li><a href="{{ $allsettings['footer_link_service_5'] }}"><i
									class="fa-regular fa-angles-right me-1"></i> {{ $allsettings['footer_link_title_service_5'] }}</a></li>
									</ul>
			</div>

			<div class="footer__item item-sm wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
				<h3 class="footer-title">Quick Link</h3>
				<ul>
											<li><a href="{{ route('front') }}" target="_self"><i class="fa-regular fa-angles-right me-1"></i> Home</a></li>
											<li><a href="{{ route('services') }}" target="_self"><i class="fa-regular fa-angles-right me-1"></i> Service</a></li>
											<li><a href="{{ route('about') }}" target="_self"><i class="fa-regular fa-angles-right me-1"></i> About</a></li>
											<li><a href="{{ route('blogs') }}" target="_self"><i class="fa-regular fa-angles-right me-1"></i> Blog</a></li>
											<li><a href="{{ route('career') }}" target="_self"><i class="fa-regular fa-angles-right me-1"></i> Career</a></li>
									</ul>
			</div>


			<div class="footer__item item-big wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
				<h3 class="footer-title">Contact Us</h3>
				<ul class="footer-contact">
					<li>
						<i class="fa-regular fa-location"></i>
						<div class="info">
							<h5>
								Location:
							</h5>
							<p>{{ $allsettings['address'] }}</p>
						</div>
					</li>
					<li>
						<i class="fa-regular fa-clock"></i>
						<div class="info">
							<h5>
								Opening Hours:
							</h5>
							<p>{{ $allsettings['opening_time'] }}</p>
						</div>
					</li>
					<li>
						<i class="fa-duotone fa-phone"></i>
						<div class="info">
							<h5>
								Phone Call:
							</h5>
							<p>{{ $allsettings['call_us'] }}</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer__copyright">
		<div class="container">
			<div
				class="d-flex gap-1 flex-wrap align-items-center justify-content-md-between justify-content-center">
				<p class="wow fadeInDown" data-wow-delay="00ms" data-wow-duration="1500ms">{{ $allsettings['footer_title'] }}</a></p>
				<ul class="d-flex align-items-center gap-4 wow fadeInDown" data-wow-delay="200ms"
				    data-wow-duration="1500ms">
					<li><a href="{{ route('terms-conditions') }}" class="{{ Request::routeIs('terms-conditions') ? 'active' : '' }}">Terms &amp; Conditions</a></li>
					<li><a href="{{ route('privacy-policy') }}" class="{{ Request::routeIs('privacy-policy') ? 'active' : '' }}">Privacy Policy</a></li>
					<li><a href="{{ route('refund-policy') }}" class="{{ Request::routeIs('refund-policy') ? 'active' : '' }}">Refund Policy</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!-- Footer area end here -->
<!-- Back to top area start here -->
	<div class="scroll-up">
		<svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
</svg>
</div>
