<section class="testimonial-two-area pb-120">
	<div class="container">
		<div class="section-header text-center mb-40">
			<h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
				<svg class="me-1" width="20" height="12" viewBox="0 0 20 12" fill="none"
				     xmlns="http://www.w3.org/2000/svg">
					<rect x="0.75" y="0.75" width="18.5" height="10.5" rx="5.25" stroke="#EB2026"
					      stroke-width="1.5"/>
					<mask id="path-2-inside-1_869_295" fill="white">
						<path
							d="M3 6C3 3.79086 4.79086 2 7 2H13C15.2091 2 17 3.79086 17 6C17 8.20914 15.2091 10 13 10H7C4.79086 10 3 8.20914 3 6Z"/>
					</mask>
					<path
						d="M3 6C3 2.96243 5.46243 0.5 8.5 0.5H11.5C14.5376 0.5 17 2.96243 17 6C17 4.61929 15.2091 3.5 13 3.5H7C4.79086 3.5 3 4.61929 3 6ZM17 6C17 9.03757 14.5376 11.5 11.5 11.5H8.5C5.46243 11.5 3 9.03757 3 6C3 7.38071 4.79086 8.5 7 8.5H13C15.2091 8.5 17 7.38071 17 6ZM3 10V2V10ZM17 2V10V2Z"
						fill="#EB2026" mask="url(#path-2-inside-1_869_295)"/>
				</svg>
				TESTIMONIALS
			</h5>
			<h2 class="wow fadeInUp text-white" data-wow-delay="200ms" data-wow-duration="1500ms">What Our Client’s Say About Us</h2>
		</div>
		<div class="swiper testimonial-two__slider">
			<div class="swiper-wrapper">





@foreach ($testimonial as $item)
                <div class="swiper-slide">
						<div class="testimonial-two__item  dark-mode ">
							<div class="star mb-10">
																											<i class="fa-sharp fa-solid fa-star"></i>
																																				<i class="fa-sharp fa-solid fa-star"></i>
																																				<i class="fa-sharp fa-solid fa-star"></i>
																																				<i class="fa-sharp fa-solid fa-star"></i>
																																				<i class="fa-sharp fa-solid fa-star"></i>
																								</div>
							<p class="mb-30">{{ $item->description }}</p>
							<div class="d-flex align-items-center gap-3">
								<img src="{{ asset(ClientImage() . $item->ClientImage) }}" style="width: 70px; height: 70px;" alt="image">
								<div class="con">
									<h4>{{ $item->client_name }}</h4>
									<span>{{ $item->designation }}</span>
								</div>
							</div>
							<svg class="coma" width="50" height="37" viewBox="0 0 50 37" fill="none"
							     xmlns="http://www.w3.org/2000/svg">
								<path d="M0 0V37L18.75 18.5V0H0ZM31.25 0V37L50 18.5V0H31.25Z" fill="#EB2026"/>
							</svg>
						</div>
					</div>
                    @endforeach



















							</div>
		</div>
		<div class="text-center mt-40">
			<div class="dot testimonial__dot"></div>
		</div>
	</div>
</section>
