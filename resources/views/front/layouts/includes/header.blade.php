<header class="header-area header-two-area">
	<div class="container header__container">
		<div class="header__main">
			<a href="/" class="logo">
				<img src="{{ asset('frontend/assets/images/logo.png') }}" alt="logo">
			</a>
			<div class="main-menu">
				<nav>
					<ul>
													<li><a href="/" target="_self">Home</a></li>
													<li><a href="{{ route('services') }}" target="_self">Service</a></li>
													<li><a href="{{ route('about') }}" target="_self">About</a></li>
													<li><a href="{{ route('blogs') }}" target="_self">Blog</a></li>
													<li><a href="{{ route('career') }}" target="_self">Career</a></li>
											</ul>
				</nav>
			</div>
			<div class="d-none d-xl-flex gap-4">
					<div class="about-three__left-item d-flex flex-wrap gap-2 align-items-center">

						<div class="info">
                            <a href="{{ route('contact') }}" class="btn-one">Contact with Us</a>
						</div>
					</div>




			</div>
						<div class="bars d-block d-lg-none">
				<i id="openButton" class="fa-solid fa-bars"></i>
			</div>
		</div>
	</div>
</header>
