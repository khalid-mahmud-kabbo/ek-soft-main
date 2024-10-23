<div id="targetElement" class="sidebar-area light-area sidebar__hide">
	<div class="sidebar__overlay"></div>


	<a href="{{ route('front') }}" class="logo mb-40">
		<img src="{{ asset(IMG_LOGO_PATH . $allsettings['main_logo']) }}" alt="logo">
	</a>
	<div class="mobile-menu overflow-hidden mean-container"><div class="mean-bar"><a href="#nav" class="meanmenu-reveal" style="right: 0px; left: auto; display: inline-block;"><span><span><span></span></span></span></a><nav class="mean-nav">
					<ul style="display: none;">
                        <ul>
                            <li><a href="/" target="_self" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                            <li><a href="{{ route('services') }}" target="_self" class="{{ Request::routeIs('services') ? 'active' : '' }}">Service</a></li>
                            <li><a href="{{ route('about') }}" target="_self" class="{{ Request::routeIs('about') ? 'active' : '' }}">About</a></li>
                            <li><a href="{{ route('blogs') }}" target="_self" class="{{ Request::routeIs('blogs') ? 'active' : '' }}">Blog</a></li>
                            <li><a href="{{ route('career') }}" target="_self" class="{{ Request::routeIs('career') ? 'active' : '' }}">Career</a></li>
							<li class="mean-last"><a href="{{ route('contact') }}" class="{{ Request::routeIs('contact') ? 'active' : '' }}" target="_self">Contact</a></li>
							<li class="mean-last"><a href="{{ route('terms-conditions') }}" class="{{ Request::routeIs('terms-conditions') ? 'active' : '' }}" target="_self">Terms & Conditions</a></li>
							<li class="mean-last"><a href="{{ route('privacy-policy') }}" class="{{ Request::routeIs('privacy-policy') ? 'active' : '' }}" target="_self">Privacy Policy</a></li>
							<li class="mean-last"><a href="{{ route('refund-policy') }}" class="{{ Request::routeIs('refund-policy') ? 'active' : '' }}" target="_self">Refund Policy</a></li>
											</ul>
				</nav>
            </div>
        </div>


		<ul class="info pt-40">
		<li class="py-2">
            <i class="fa-solid primary-color fa-phone-volume"></i> <a href="tel:{{ $allsettings['call_us'] }}">{{ $allsettings['call_us'] }}</a>
		</li>
		<li>
            <i class="fa-solid primary-color fa-paper-plane"></i> <a href="mailto:{{ $allsettings['email'] }}">{{ $allsettings['email'] }}</a>
        </li>
	</ul>
	<div class="social-icon mt-20">
					<a href="{{ $allsettings['Facebook'] }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
					<a href="{{ $allsettings['Twitter'] }}" target="_blank"><i class="fa-brands fa-twitter"></i></a>
					<a href="{{ $allsettings['Linkedin'] }}" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
					<a href="{{ $allsettings['Youtube'] }}" target="_blank"><i class="fa-brands fa-youtube"></i></a>
			</div>
	<button id="closeButton" class="text-white"><i class="fa-solid fa-xmark"></i></button>
</div>
