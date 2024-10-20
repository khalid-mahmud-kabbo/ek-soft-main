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
				<a href="https://eksoftwares.com" class="logo mb-30">
					<img src="{{ asset('frontend/assets/images/logo.png') }}" alt="image">
				</a>
				<p>Phasellus ultricies aliquam volutpat ullamcorper laoreet neque, a lacinia curabitur lacinia mollis</p>
				<div class="social-icon">
											<a target="_blank" class="social-media-link" href="{{ getSocialLink()->Facebook }}">
                                        <i class="fab fa-facebook-f"></i></a>


                                        <a target="_blank" class="social-media-link" href="{{ getSocialLink()->Twitter }}">
                                            <i class="fab fa-twitter"></i></a>

											<a target="_blank" class="social-media-link"
                                        href="{{ getSocialLink()->Linkedin }}">
                                        <i class="fab fa-linkedin-in"></i></a>
									</div>
			</div>


			<div class="footer__item item-sm wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
				<h3 class="footer-title">Our Services</h3>
				<ul>
											<li><a href="#"><i
									class="fa-regular fa-angles-right me-1"></i> IT Management</a></li>
											<li><a href="#"><i
									class="fa-regular fa-angles-right me-1"></i> Database Security</a></li>
											<li><a href="#"><i
									class="fa-regular fa-angles-right me-1"></i> Cyber Security</a></li>
											<li><a href="#"><i
									class="fa-regular fa-angles-right me-1"></i> IT Consultancy</a></li>
											<li><a href="#"><i
									class="fa-regular fa-angles-right me-1"></i> App Development</a></li>
									</ul>
			</div>

			<div class="footer__item item-sm wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
				<h3 class="footer-title">Quick Link</h3>
				<ul>
											<li><a href="/blog" target="_self"><i class="fa-regular fa-angles-right me-1"></i> Blog</a></li>
											<li><a href="/about" target="_self"><i class="fa-regular fa-angles-right me-1"></i> About</a></li>
											<li><a href="/contact" target="_self"><i class="fa-regular fa-angles-right me-1"></i> Contact</a></li>
											<li><a href="/faq" target="_self"><i class="fa-regular fa-angles-right me-1"></i> FAQ</a></li>
											<li><a href="https://eksoftwares.com" target="_self"><i class="fa-regular fa-angles-right me-1"></i> Home</a></li>
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
					<li><a href="/terms-condition">Terms &amp; Conditions</a></li>
					<li><a href="/privacy-policy">Privacy Policy</a></li>
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
