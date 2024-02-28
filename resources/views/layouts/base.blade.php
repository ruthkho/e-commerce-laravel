<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.1/nouislider.min.css" integrity="sha512-qveKnGrvOChbSzAdtSs8p69eoLegyh+1hwOMbmpCViIwj7rn4oJjdmMvWOuyQlTOZgTlZA0N2PXA7iA8/2TUYA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @livewireStyles
</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">

						<div class="topbar-menu right-menu">
							<ul>

                                @if(Route::has('login'))
                                    @auth
                                        @if(Auth::user()->utype === 'ADM')
                                            <li class="menu-item menu-item-has-children parent" >
                                                <a title="My Account" href="#">My Account ({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                                <ul class="submenu curency" >
                                                    <li class="menu-item" >
                                                        <a title="Dashboard" href="{{ route('admin.dashboard') }}">Dashboard</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Products" href="{{route('admin.products')}}"> All Products </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="All Order" href="{{route('admin.orders')}}">All Orders</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Floriography" href="{{route('admin.floriography')}}"> All Floriographies </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="All Coupon" href="{{route('admin.coupons')}}">All Coupon</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Categories" href="{{route('admin.categories')}}"> Manage Categories </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Occasions" href="{{route('admin.occasions')}}"> Manage Occasions </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Flowers" href="{{route('admin.flowers')}}"> Manage Flowers </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Products" href="{{route('admin.viewusers')}}"> Customer List </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Manage Home Slider" href="{{route('admin.homeslider')}}">Manage Home Slider</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Contact Messages" href="{{route('admin.contact')}}">Contact Messages</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Settings" href="{{route('admin.settings')}}">Website Setting</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="{{ route ('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                    </li>
                                                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                    </form>
                                                </ul>
                                            </li>
                                        @else
                                            <li class="menu-item menu-item-has-children parent" >
                                                <a title="My Account" href="{{ route('user.profile') }}">My Account ({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                                <ul class="submenu curency" >
                                                    <li class="menu-item" >
                                                        <a title="Dashboard" href="{{ route('user.dashboard') }}">Dashboard</a>
                                                    </li>
                                                    <li class="menu-item" >
                                                        <a title="My Orders" href="{{ route('user.orders') }}">My Orders</a>
                                                    </li>
                                                    <li class="menu-item" >
                                                        <a title="My Profile" href="{{ route('user.profile') }}">My Profile</a>
                                                    </li>
                                                    <li class="menu-item" >
                                                        <a title="Change Password" href="{{ route('user.changepassword') }}">Change Password</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="{{ route ('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                    </li>
                                                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                    </form>
                                                </ul>
                                            </li>
                                        @endif
                                    @else
                                        <li class="menu-item" ><a title="Register or Login" href="{{route('login')}}">Login</a></li>
                                        <li class="menu-item" ><a title="Register or Login" href="{{route('register')}}">Register</a></li>
                                    @endif
                                @endif
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">
                        @if(Route::has('login'))
                            @auth
                                @if(Auth::user()->utype === 'ADM')
                                    <div class="wrap-logo-top left-section">
                                        <a href="{{route('admin.dashboard')}}" class="link-to-home"><img src="{{ asset('assets/images/sblogo.jpeg')}}" alt="mercado"></a>
                                    </div>
                                @else
                                    <div class="wrap-logo-top left-section">
                                        <a href="/" class="link-to-home"><img src="{{ asset('assets/images/sblogo.jpeg')}}" alt="mercado"></a>
                                    </div>
                                @endif
                            @else
                                <div class="wrap-logo-top left-section">
                                    <a href="/" class="link-to-home"><img src="{{ asset('assets/images/sblogo.jpeg')}}" alt="mercado"></a>
                                </div>
                            @endif
                        @endif

						@livewire('header-search-component')

						<div class="wrap-icon right-section">

                            @livewire('wishlist-count-component')

                            @livewire('cart-count-component')

							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>

					</div>
				</div>

				<div class="nav-section header-sticky">

					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="/" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="/aboutus" class="link-term mercado-item-title">About Us</a>
								</li>
								<li class="menu-item">
									<a href="/shop" class="link-term mercado-item-title">Shop</a>
								</li>
                                <li class="menu-item">
									<a href="/floriography" class="link-term mercado-item-title">Floriography</a>
								</li>
								<li class="menu-item">
									<a href="/cart" class="link-term mercado-item-title">Cart</a>
								</li>
                                <li class="menu-item">
									<a href="/contactus" class="link-term mercado-item-title">Contact Us</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

    {{$slot}}

    @livewire('footer-component')

	<script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
	{{-- <script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script> --}}
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('assets/js/functions.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.1/nouislider.min.js" integrity="sha512-T5Bneq9hePRO8JR0S/0lQ7gdW+ceLThvC80UjwkMRz+8q+4DARVZ4dqKoyENC7FcYresjfJ6ubaOgIE35irf4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.tiny.cloud/1/xae427gk55l27bb65zngg278g4da7buiv33zzmu6v2r0xd63/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6272442e7b967b11798db7ca/1g275km75';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    @livewireScripts

    @stack('scripts')
</body>
</html>
