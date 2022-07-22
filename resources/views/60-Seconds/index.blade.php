<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<title>60 Seconds</title>

	<!-- Stylesheets -->
	{{--@if(App::getLocale() == "en")--}}
	<link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{asset('front/css/material-design-iconic-font.css')}}" rel="stylesheet">
	<link href="{{asset('front/css/font-awesome.css')}}" rel="stylesheet">
	<link href="{{asset('front/css/owl.carousel.min.css')}}" rel="stylesheet">
	<link href="{{asset('front/css/owl.theme.default.min.css')}}" rel="stylesheet">
	<link href="{{asset('front/css/animate.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('front/css/style.css')}}" rel="stylesheet">
	<!-- Responsive -->
	<link href="{{asset('front/css/responsive.css')}}" rel="stylesheet">
	{{--@else
	<link href="{{asset('RTL/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{asset('RTL/css/material-design-iconic-font.css')}}" rel="stylesheet">
	<link href="{{asset('RTL/css/font-awesome.css')}}" rel="stylesheet">
	<link href="{{asset('RTL/css/owl.carousel.min.css')}}" rel="stylesheet">
	<link href="{{asset('RTL/css/owl.theme.default.min.css')}}" rel="stylesheet">
	<link href="{{asset('RTL/css/animate.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('RTL/css/style.css')}}" rel="stylesheet">
	<!-- Responsive -->
	<link href="{{asset('RTL/css/responsive.css')}}" rel="stylesheet">
	@endif
	--}}
	<script src="{{asset('front/js/jquery-3.2.1.min.js')}}"></script>
</head>

<body>


	<div class="mobile-menu">
		<div class="menu-mobile">
			<div class="brand-area">
				<a href="#">
					<img src="{{asset('front/images/logo.svg')}}">
				</a>
			</div>
			<div class="mmenu">
				<ul>
					<li class="active"><a href="#home" rel="m_PageScroll2id">Home</a></li>
					<li><a href="#about" rel="m_PageScroll2id">About</a></li>
					<li><a href="#features" rel="m_PageScroll2id">Features</a></li>
					<li><a href="#how-work" rel="m_PageScroll2id">How Work</a></li>
					<li><a href="#reviews" rel="m_PageScroll2id">Reviews</a></li>
					<li><a href="#contact" rel="m_PageScroll2id">Connect</a></li>
					<li><a href="">AR</a></li>
					<li><a href="">EN</a></li>

				</ul>
			</div>
		</div>
		<div class="m-overlay"></div>
	</div>
	<!--mobile-menu-->

	<div class="main-wrapper">

		<header id="header">
			<div class="container">
				<div class="logo-site">
					<a href="#"><img src="{{asset('front/images/logo.svg')}}" alt="" class="img-responsive"></a>
				</div>
				<ul class="main_menu clearfix">
					<li class="active"><a href="#home" rel="m_PageScroll2id">{{$howConcat[0]->homeList}}</a></li>
					<li><a href="#about" rel="m_PageScroll2id">{{$howConcat[0]->aboutList}}</a></li>
					<li><a href="#features" rel="m_PageScroll2id">{{$howConcat[0]->featureList}}</a></li>
					<li><a href="#how-work" rel="m_PageScroll2id">{{$howConcat[0]->howWorkList}}</a></li>
					<li><a href="#reviews" rel="m_PageScroll2id">{{$howConcat[0]->reviewList}}</a></li>
					<li><a href="#contact" rel="m_PageScroll2id">{{$howConcat[0]->connectList}}</a></li>
					@if(App::getLocale() == "en")
					<li><a href="?lang=ar">AR</a></li>
					@else
					<li><a href="?lang=en">EN</a></li>
					@endif

				</ul>
				<button type="button" class="hamburger is-closed">
					<span class="hamb-top"></span>
					<span class="hamb-middle"></span>
					<span class="hamb-bottom"></span>
				</button>
			</div>
		</header>
		<!--header-->

		<section class="section_home" id="home">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="home_txt">
							<h1 class="wow fadeInUp">{{$data[0]->best}}</h1>
							<p class="wow fadeInUp">{{$data[0]->lorem}}</p>
							<div class="download-app">
								<ul class="btn-download-app wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.500s">
									<li class="">
										<a href="#">
											<p>{{$data[0]->playstore}}</p>
											<i class="zmdi zmdi-android"></i>
										</a>
									</li>

									<li class="">
										<a href="#">
											<p>{{$data[0]->appstore}}</p>
											<i class="zmdi zmdi-apple"></i>
										</a>
									</li>

								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6">

						<div class="home_thumbs wow zoomInDown">
							<img src="{{asset($data[0]->bestImage)}}" alt="" class="img-responsive">
						</div>

					</div>
				</div>
			</div>
		</section>
		<!--section_home-->

		<section class="sec-site">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="box-sec">
							<figure><img src="{{asset($data[0]->likesImage)}}" alt="" /></figure>
							<div class="sec-title">
								<h2>{{$data[0]->likesNumber}}</h2>
								<p>{{$data[0]->likes}}</p>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="box-sec">
							<figure><img src="{{asset($data[0]->communicationImage)}}" alt="" /></figure>
							<div class="sec-title">
								<h2>{{$data[0]->communicationNumber}}</h2>
								<p>{{$data[0]->communication}}</p>
							</div>
						</div>
					</div>


					<div class="col-md-3">
						<div class="box-sec">

							<figure><img src="{{asset($data[0]->advertisingImage)}}" alt="" /></figure>
							<div class="sec-title">
								<h2>{{$data[0]->advertisingNumber}}</h2>
								<p>{{$data[0]->advertising}}</p>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="box-sec">
							<figure><img src="{{asset($data[0]->usersImage)}}" alt="" /></figure>
							<div class="sec-title">
								<h2>{{$data[0]->usersNumber}}</h2>
								<p>{{$data[0]->users}}</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!--section_home-->

		<section class="section_about" id="about">
			<div class="container">
				<div class="flex-about">
					<div class="ab-right">

						<div class="img-about">
							<img src="{{asset($data[0]->aboutImage)}}" alt="" />
						</div>

					</div>
					<div class="ab-left">
						<div class="box-about">

							<div class="head-about">
								<h2>{{$data[0]->about}}</h2>
								<p>{{$data[0]->lorem}}</p>
							</div>

							<ul>

								<li>
									<p>{{$data[0]->reliable}} </p>
								</li>
								<li>
									<p>{{$data[0]->everything}}</p>
								</li>
								<li>
									<p>{{$data[0]->tons}}</p>
								</li>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--section_services-->

		<section class="section_features" id="features">
			<div class="container">
				<div class="sec_head wow fadeInUp">
					<h2>{{$data[0]->feature}}</h2>
					<p>{{$data[0]->lorem}}</p>
				</div>

				<div class="owl-carousel" id="feat-slider">
					@foreach($features as $feature)
					<div class="item">
						<div class="box-features">
							<div class="sec-title">
								<h5>{{$feature->name}}</h5>
								<p>{{$feature->content}}</p>
							</div>
							<figure>
								<img src="{{asset('/front/images/' . $feature->image)}}" alt="" />
							</figure>
						</div>
					</div>
					@endforeach

				</div>

			</div>
		</section>
		<!--section_portfolio-->

		<section class="section_how_work" id="how-work">
			<div class="container">

				<div class="row">
					<div class="col-md-4">
						<div class="work-item">
							<img src="{{asset($howConcat[0]->howImage)}}" alt="" class="img-responsive">
						</div>
					</div>
					<div class="col-md-8">

						<div class="head-title wow fadeInUp">
							<h2>{{$howConcat[0]->how}}</h2>
							<p>{{$data[0]->lorem}}</p>
						</div>

						<ul class="list-work">

							<li>
								<h3>{{$howConcat[0]->first}}</h3>
								<p>{{$howConcat[0]->loremSmoll}}</p>
							</li>

							<li>
								<h3>{{$howConcat[0]->second}}</h3>
								<p>{{$howConcat[0]->loremSmoll}}</p>
							</li>

							<li>
								<h3>{{$howConcat[0]->third}}</h3>
								<p>{{$howConcat[0]->loremSmoll}}</p>
							</li>

							<li>
								<h3>{{$howConcat[0]->fourth}}</h3>
								<p>{{$howConcat[0]->loremSmoll}}</p>
							</li>

						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--section_how_work-->

		<section class="section_customer_opinions" id="reviews">
			<div class="container">
				<div class="sec_head wow fadeInUp">
					<h2>{{$howConcat[0]->client}}</h2>
				</div>
				<div class="owl-carousel" id="slider-testi">
					@foreach($clients as $client)
					<div class="item">
						<div class="content-testi">
							<figure>
								<img src="{{asset('front/images/' . $client->image)}}" alt="" />
							</figure>
							<p>{{$client->content}}</p>
							<div class="sec-title">
								<h6>{{$client->name}}</h6>
								<div class="star-rating">
									<span style="width:{{$client->Evaluation * 20}}%"><strong class="rating">x</strong> out of 5</span>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>
		<!--section_customer_opinions-->

		<section class="section_contact" id="contact">
			<div class="container">
				<div class="sec_head wow fadeInUp">
					<h2>{{$howConcat[0]->connectUs}}</h2>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p class="ph-head">{{$howConcat[0]->contactInformation}}</p>
						<ul class="list-contact">
							<li>
								<figure>
									<img src="{{asset($howConcat[0]->locationImage)}}" alt="Location" />
									<span>{{$howConcat[0]->location}}</span>
								</figure>
								<div class="sec-title">
									<p>{{$howConcat[0]->locationValue}}</p>
								</div>
							</li>
							<li>
								<figure>
									<img src="{{asset($howConcat[0]->emailImage)}}" alt="Email" />
									<span>{{$howConcat[0]->email}}:</span>
								</figure>
								<div class="sec-title">
									<p class="number-site">{{$howConcat[0]->emailValue}}</p>
								</div>
							</li>
							<li>
								<figure>
									<img src="{{asset($howConcat[0]->mobileImage)}}" alt="Mobail" />
									<span>{{$howConcat[0]->mobile}}</span>
								</figure>
								<div class="sec-title">
									<p class="number-site">{{$howConcat[0]->mobileValue}}</p>
								</div>
							</li>
							<li>
								<figure>
									<img src="{{asset($howConcat[0]->phoneImage)}}" alt="Phone" />
									<span>{{$howConcat[0]->phone}}</span>
								</figure>
								<div class="sec-title">
									<p>{{$howConcat[0]->phoneValue}}</p>
								</div>
							</li>
						</ul>
					</div>
					<div class="col-md-6">
						<p class="ph-head">{{$howConcat[0]->contactForm}}</p>
						<form method="post" action="{{route('messages.store')}}" class="form-contact">
							@csrf
							<div class="form-group">
								<input type="text" name="fullName" class="form-control" placeholder="{{$howConcat[0]->placeholderFullName}}" required />
								<img src="{{asset($howConcat[0]->fullNameImage)}}" alt="User Name" />
								@error('fullName')
								<p style="color:red">{{$message}}</p>
								@enderror
							</div>
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="{{$howConcat[0]->placeholderEmail}}" required />
								<img src="{{asset($howConcat[0]->emailImage)}}" alt="Email" />
								@error('email')
								<p style="color:red">{{$message}}</p>
								@enderror
							</div>
							<div class="form-group des-mess">
								<textarea class="form-control" name="content" placeholder="{{$howConcat[0]->placeholderMessage}}" required></textarea>
								@error('content')
								<p style="color:red">{{$message}}</p>
								@enderror
							</div>
							<div class="form-group">
								<button type="submit" class="btn-send"><span>{{$howConcat[0]->send}}</span></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!--section_contact-->

		<footer id="footer">
			<div class="container">
				<div class="social-media wow fadeInUp">
					<li class="twitter"><a href="https://twitter.com/login?lang=ar"><i class="zmdi zmdi-twitter"></i></a></li>
					<li class="facebook"><a href="https://www.facebook.com/profile.php?id=100037663337235"><i class="zmdi zmdi-facebook"></i></a></li>
					<li class="instagram"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
				</div>
				<div class="flex-ft">
					<p class="copyRight number-site">© copyright 2021 all rights reserved</p>
				</div>
			</div>
		</footer>
		<!--footer-->

	</div>
	<!--main-wrapper-->
	<script src="{{asset('front/js/popper.min.js')}}"></script>
	<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('front/js/jquery.malihu.PageScroll2id.min.js')}}"></script>
	<script src="{{asset('front/js/wow.js')}}"></script>
	<script src="{{asset('front/js/script.js')}}"></script>

	<script>
		new WOW().init();

		(function($) {
			$(window).on("load", function() {

				/* Page Scroll to id fn call */
				$("a[rel='m_PageScroll2id']").mPageScroll2id({
					scrollSpeed: 1200,
					scrollEasing: "easeOutQuint",
					liveSelector: "a[rel='m_PageScroll2id']"
				});

			});
		})(jQuery);

		istener(window, 'load', initialize);
	</script>

</body>

</html>