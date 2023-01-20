<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Larashop</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="Larashop, Laravel, eShop, eCommerce">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('css/app.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/animate.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/style.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/fontawsome.css')}}"/>

	<!-- SweetAlert2 -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">



</head>
<body>
	@include('sweetalert::alert')
	<!-- Page Preloder -->
	{{-- <div id="preloder">
		<div class="loader"></div>
	</div> --}}

	<!-- Header section -->

	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="{{url('/')}}" class="site-logo">

							<img src=" {{asset('img/logo.png')}} " alt="">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<form class="header-search-form" method="GET" action=" {{ route('search') }} ">
							<input type="text" placeholder=" Qidiruv...  " name="product">
							<button> <span style="color:lightgray;font-size:1rem"><i class="fas fa-search mr-2"></i></span> </button>
						</form>
					</div>

{{--                    Login --}}

					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							@guest
								<div class="up-item my-auto">
									<a href="{{route('login')}}" class="my-auto"><i class="far fa-user-circle mr-1 mt-1" style="font-size: 1.1rem"></i></a><a href="{{route('register')}}"> Ro'yxatdan o'tish </a>
								</div>
							@else
							<div class="up-item">
								<div class="nav-item dropdown">
									 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
										{{ Auth::user()->firstName }} <span class="caret"></span>
									</a>

									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
										<a href=" {{route('dashboard')}} " class="dropdown-item" target="_blank">
											<span ><i class="fas fa-address-card" style="font-size: 0.9rem"></i></span>
											Profil
										</a>
										<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit()">
											<span ><i class="fas fa-sign-out-alt" style="font-size: 0.9rem"></i></span> {{ __('Long out') }}
										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
									</div>
								</div>

							</div>

							@endguest

							<div class="up-item">

								<a href="{{route('card.index')}}" class="ml-2">
									<div class="shopping-card mr-2">
										<i class="fas fa-shopping-cart mr-2" style="font-size: 1.1rem"></i>
										<span class="mr-3" id="cardItemCount">  </span>
									</div> Savat </a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li>
						<a href="/"> <i class="fas fa-home" style=" font-size: 1inderem; color:inheret "> </i>
							Menu
						</a>
					</li>

					@foreach ($categories as $category)
					<li>
						<a href="{{route('site.GetProductByMark',$category->name)}}">
							<i class="fas fa-mobile-dash" style="font-size: 1inderem;color:inheret"></i>
							{{$category->name}}
							@if($category->new == 1)
								<span class="new"> Yangi </span>
							@endif
						</a>
					</li>

					@endforeach
					<li class="text-danger">
						<a href="/contact"><i class="far fa-comments" style="font-size: 1inderem;color:inheret"></i>
                            Contact
						</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>




	@yield('content')




	<!-- Footer section -->
	<section class="footer-section">
		<div class="container">
			<div class="footer-logo text-center">
				<a href="{{url('/')}}"><img src=" {{asset('img/logot.png')}} " alt=""></a>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>LARASHOP</h2>
						<p>LARASHOP - bu LARAVEL bilan yaratilgan onlayn-do'kon</p>
						<img src="" alt="">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Muhim havola</h2>
						<ul>
							<li><a href=" {{ url('/') }} "> Xush kelibsiz </a></li>
							<li><a href=" {{ url('/contact') }} "> Biz bilan bog'lanish </a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Eng yaxshi brend</h2>

						<ul>
							<li><a href=" {{url('/browse/mark/Samsung')}} "> Chanel</a></li>
							<li><a href=" {{url('/browse/mark/Appel')}} "> Tomfort</a></li>
							<li><a href=" {{url('/browse/mark/Huawei')}} "> Eyfel</a></li>
							<li><a href=" {{url('/browse/mark/OPPO')}} "> Allure</a></li>
							<li><a href=" {{url('/browse/mark/Xiaomi')}} "> Coco</a></li>
						</ul>

					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget contact-widget">
						<h2>MANZIL</h2>
						<div class="con-info">
							<span>C.</span>
							<p>LARASHOP </p>
						</div>
						<div class="con-info">
							<span>N°.</span>
							<p> XORAZM VILOYATI, SHOVOT TUMANI</p>
						</div>
						<div class="con-info">
							<span>T.</span>
							<p>+998 93 090 09 27</p>
						</div>
						<div class="con-info">
							<span>E.</span>
							<p>abrorbek94220@gmail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="https://www.instagram.com/" class="instagram"><i class="fab fa-instagram"></i><span>instagram</span></a>
					<a href="https://www.pinterest.com/" class="pinterest"><i class="fab fa-pinterest"></i><span>pinterest</span></a>
					<a href="https://www.facebook.com/" class="facebook"><i class="fab fa-facebook"></i><span>facebook</span></a>
					<a href="https://twitter.com/home" class="twitter"><i class="fab fa-twitter"></i><span>twitter</span></a>
					<a href="https://www.youtube.com/" class="youtube"><i class="fab fa-youtube"></i><span>youtube</span></a>
					<a href="https://www.telegram.org/" class="tumblr"><i class="fab fa-telegram"></i><span>telegram</span></a>
				</div>

			</div>
		</div>
	</section>

    {{-- Javascript Plugins --}}
    <section>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
ss
            <!--====== Javascripts & Jquery ======-->
            <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
            <script src="{{asset('js/bootstrap.min.js')}}"></script>
            <script src="{{asset('js/jquery.slicknav.min.js')}}"></script>
            <script src="{{asset('js/owl.carousel.min.js')}}"></script>
            <script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
            <script src="{{asset('js/jquery.zoom.min.js')}}"></script>
            <script src="{{asset('js/jquery-ui.min.js')}}"></script>
			<script src="{{asset('js/main.js')}}"></script>
			<script src="{{asset('js/app.js')}}"></script>
			@yield('scripts')

    </section>
	</body>
</html>

