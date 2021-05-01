
	<title>@yield('title') {{ setting('site.name') }} &#8211; {{ setting('site.tagline') }}</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=0"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="robots" content="index, follow"/>
	<meta name="revisit-after" content="1 days"/>
	<meta name="title" content="{{ setting('site.name') }}"/>
	<meta name="description" content="{{ setting('site.name') }}"/>
	<meta name="keywords" content="{{ setting('site.name') }}"/>
	<meta name="author" content="{{ setting('site.name') }}"/>
	<meta itemProp="name" content="{{ setting('site.name') }}"/>
	<meta itemprop="url" content="{{ URL::to('/') }}" />
	<meta itemProp="description" content="{{ setting('site.name') }}"/>
	<meta itemProp="image" content="{{ asset('assets/images/logo/'.setting('site.icon')) }}"/>
	<meta property="og:site_name" content="{{ setting('site.name') }}" />
	<meta property="og:title" content="{{ setting('site.name') }}" />
	<meta property="og:description" content="{{ setting('site.name') }}"/>
	<meta property="og:type" content="website" />
	<meta property="og:image" content="{{ asset('assets/images/logo/'.setting('site.icon')) }}" />
	<meta property="og:url" content="{{ URL::to('/') }}" />
	<meta name="twitter:card" content="photo" />
	<meta name="twitter:title" content="{{ setting('site.name') }}" />
	<meta name="twitter:description" content="{{ setting('site.name') }}" />
	<meta name="twitter:image" content="{{ asset('assets/images/logo/'.setting('site.icon')) }}" />
	<meta name="twitter:domain" content="{{ URL::to('/') }}"/>
	<link rel="canonical" href="{{ URL::to('/') }}"/>
	<link rel="image_src" href="{{ asset('assets/images/logo/'.setting('site.icon')) }}"/>
	<link rel="shortcut icon" href="{{ asset('assets/images/logo/'.setting('site.icon')) }}" type="image/x-icon">
<!-- 	<link rel="stylesheet" type="text/css" href="{{ asset('templates/qbs/bootstrap/bootstrap.min.css') }}"> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="{{ asset('templates/qbs/bootstrap/style.min.css') }}">
    <!-- <script type="text/javascript" src="{{ asset('templates/qbs/jquery/jquery.min.js') }}"></script> -->
	<link rel="stylesheet" type="text/css" href="{{ asset('templates/qbs/bootstrap/homev2.min.css') }}">
<!-- 	<link rel="stylesheet" type="text/css" href="{{ asset('templates/qbs/video-js/video-js.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('templates/qbs/star-rating/star-rating-svg.css') }}"> -->
<!-- 	<link rel="stylesheet" type="text/css" href="{{ asset('templates/qbs/slick/slick.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('templates/qbs/slick/slick-theme.min.css') }}"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css" integrity="sha256-8g4waLJVanZaKB04tvyhKu2CZges6pA5SUelZAux/1U=" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css"/>
    
    <!-- Google Analytics -->
    {!! html_entity_decode(setting('site.google_analytics')) !!}
    
	<style type="text/css">
		/* Sidebar */
		#sidebar {padding: 1rem;}
		
		/* Navbar */
		@media (max-width: 767px) { header > nav .navbar-brand {right: 0px!important;} }
		header > nav .navbar-brand img, header > nav .navbar-text img {width: 140px!important;}
		header > nav .search-wrapper {border: 1px solid #505763;}
		header > nav ul.n-log li .btn {padding: 8px!important; width: auto!important;}
		header > nav ul.n-log li .btn.btn-borderless {border-width: 0px!important;}
		.dropdown-item:hover, .dropdown-item:active {background-color: #fb8312!important; color: #fff!important;}
		.btn.btn-default:hover {color: #fb8312!important; border-color: #fb8312!important;}
		.btn.btn-primary {background-color: #fb8312!important; border-color: #fb8312!important;}
		.btn.btn-primary:hover {background-color: #c16c1c!important; border-color: #c16c1c!important;}
		.btn.btn-secondary {background-color: #34495e!important; color: #fff!important; border-color: #34495e!important;}
		.btn.btn-secondary:hover {background-color: #668baf!important; border-color: #668baf!important;}
		.link-primary {color: #fb8312!important;}
		.link-primary:hover, .link-primary:active {color: #c16c1c!important;}
		#sidebar .sidebar-menu .sidebar-dropdown.active .sidebar-submenu {display: block!important}
		#sidebar ul li.menu-label:active, #sidebar ul li.menu-label:focus, #sidebar ul li.menu-label:hover, #sidebar ul li.menu-link:active, #sidebar ul li.menu-link:focus, #sidebar ul li.menu-link:hover{border-radius: .5em; transition: var(--transition)}
		#sidebar .sidebar-menu .sidebar-dropdown .drop-icon{top: 4px}

		/* Footer */
		footer {background-color: #34495e!important;}
	</style>
