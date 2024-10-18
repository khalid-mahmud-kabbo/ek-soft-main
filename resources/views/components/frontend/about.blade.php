@if($about)
<section class="about-two-area pt-120">
	<div class="about-two__shape">
		<img src="{{ asset('frontend/assets/images/VRUJYT10pzK1Ba6ZAadm.png') }}" alt="shape">
	</div>
	<div class="container">
		<div class="row g-4">
			<div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
				<div class="about-two__left-item">
					<div class="dots">
						<img class="sway_Y__animation" src="{{ asset('frontend/assets/images/vjjksYs3OD22xjgJvSvL.png') }}" alt="shape">
					</div>
					<div class="shape-halper">
						<img class="sway__animation" src="{{ asset('frontend/assets/images/XSr7XtTUTBWo4XCtgTgv.png') }}"
						     alt="shape">
					</div>
					<div class="image big-image">
						<img src="{{ asset(AboutImage() . $about->AboutImage) }}" alt="image">
					</div>
					<div class="image sm-image">
						<img src="{{ asset(AboutImage2() . $about->AboutSubImage) }}" alt="image">
					</div>
					<div class="circle-shape">
						<img class="animation__rotate" src="{{ asset('frontend/assets/images/KioIYRQSg8I28X9QVomi.png') }}"
						     alt="shape">
					</div>
				</div>
			</div>
			<div class="col-xl-6">
				<div class="section-header mb-40">
					<h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
						<img class="me-1" src="{{ asset('frontend/assets/images/6ANlZimaQlmDjBqhVmkA.png') }}" alt="icon">
						WHO WE ARE
					</h5>
					<h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">{{ $about->title }}</h2>
					<p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">{{ $about->description }}</p>
				</div>
				<div class="about-two__right-item wow fadeInDown" data-wow-delay="200ms"
				     data-wow-duration="1500ms">
					<ul>
						<li><i class="fa-solid fa-check"></i>{{ $about->point_1 }}</li>
						<li><i class="fa-solid fa-check"></i>{{ $about->point_2 }}</li>
					</ul>
					<ul>
						<li><i class="fa-solid fa-check"></i>{{ $about->point_3 }}</li>
						<li><i class="fa-solid fa-check"></i>{{ $about->point_4 }}</li>
					</ul>
				</div>
				<div class="about__info mt-50 wow fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
					<a href="#" class="btn-one">Explore More <i class="fa-regular fa-arrow-right-long"></i></a>
					<img src="{{ asset('frontend/assets/images/bxc6ptmmoLSZMeojbANk.png') }}" alt="singature">
				</div>
			</div>
		</div>
	</div>
</section>
@endif
