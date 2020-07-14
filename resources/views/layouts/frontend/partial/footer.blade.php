	<footer>

		<div class="container">
			<div class="row">

				<div class="col-lg-4 col-md-6">
					<div class="footer-section">

                        <a href="{{route('home')}}" class="logo"><img src="{{ asset('assets/frontend/images/logo.png') }}" alt="Logo Image"></a>
						<p class="copyright">{{ config('app.name') }} @ 2018-@php
                            $date1=date('Y');

                            echo $date1;
                        @endphp. All rights reserved.</p>
						<p class="copyright">Developed by <a href="https://github.com/mizan93?tab=projects" target="_blank">M.R Mizan</a></p>
						<ul class="icons">
							<li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
							<li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>
							<li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
							<li><a href="#"><i class="ion-social-vimeo-outline"></i></a></li>
							<li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
						</ul>

					</div><!-- footer-section -->
				</div><!-- col-lg-4 col-md-6 -->

				<div class="col-lg-4 col-md-6">
						<div class="footer-section">
						<h4 class="title"><b>CATAGORIES</b></h4>
						<ul>
							@foreach ($categories as $category)
							<li><a href="{{ route('category.posts',$category->slug) }}">{{ $category->name }}</a></li>

                            @endforeach
						</ul>

					</div><!-- footer-section -->
				</div><!-- col-lg-4 col-md-6 -->

				<div class="col-lg-4 col-md-6">
					<div class="footer-section">

						<h4 class="title"><b>SUBSCRIBE</b></h4>
						<div class="input-area">

                            <form method="POST" action="{{ route('subscriber.store') }}">
                                 @csrf
								<input class="email-input" name="email" type="text" placeholder="Enter your email">
								<button class="submit-btn" type="submit"><i class="icon ion-ios-email-outline"></i></button>
							</form>
						</div>

					</div><!-- footer-section -->
				</div><!-- col-lg-4 col-md-6 -->

			</div><!-- row -->
		</div><!-- container -->
	</footer>
