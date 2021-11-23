<!DOCTYPE html>
<html lang="en">
<head>
	@include('template._head')
	@yield('css-extra')
</head>
<body>
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M4QR28H" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <div class="spandiv">
        <div id="content">
			@include('template._header')
			@yield('content')
		</div>
	</div>
	@include('template._footer')
	@include('template._scroll-to-top')
	@include('template._modals')
    <div class="main-overlay"></div>
	@include('template._js')
	@yield('js-extra')
</body>
</html>