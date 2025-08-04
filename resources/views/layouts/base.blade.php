<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{ $meta_title ?? 'Larydot Recruitment – Experts in Healthcare, Construction & ICT Solutions' }}</title>
    <meta name="description" content="{{ $meta_description ?? 'Larydot Recruitment provides professional recruitment, healthcare decontamination, ICT solutions, and construction services across the UK and globally.' }}">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/fevicon.png') }}">

    <!-- CSS Dependencies -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('fonts/pbmit-xhyre-icon/pbmit_xhyre.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pbminfotech-base-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/shortcode.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>

   <body>
    <!-- Page Wrapper -->
    <div class="page-wrapper" id="page">

        @include('layouts.header2')

        @yield('content')

	@include('layouts.footer')

		<!-- Search Box Start Here -->
		<div class="pbmit-search-overlay">
			<div class="pbmit-icon-close">
				<svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg" width="28.163" height="28.163" viewBox="0 0 26.163 26.163">
					<rect width="36" height="1" transform="translate(0.707) rotate(45)"></rect>
					<rect width="36" height="1" transform="translate(0 25.456) rotate(-45)"></rect>
				</svg>
			</div>
			<div class="pbmit-search-outer">
				<form class="pbmit-site-searchform">
					<input type="search" class="form-control field searchform-s" name="s" placeholder="Search …">
					<button type="submit"></button>
				</form>
			</div>
		</div>
		<!-- Search Box End Here -->

		<!-- Scroll To Top -->
		<div class="pbmit-progress-wrap">
			<svg class="pbmit-progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
				<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
			</svg>
		</div>
		<!-- Scroll To Top End -->

        </div>
        <!-- Page Wrapper End -->

    <!-- JS
        ============================================ -->
<!-- jQuery -->
<script data-cfasync="false" src="{{ asset('../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>

<!-- Core Dependencies -->
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<!-- jQuery Plugins -->
<script src="{{ asset('js/jquery.sticky-kit.min.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.appear.js') }}"></script>
<script src="{{ asset('js/numinate.min.js') }}"></script>
<script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/circle-progress.js') }}"></script>

<!-- Sliders & Animations -->
<script src="{{ asset('js/swiper.min.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>

<!-- GSAP & Advanced Animation -->
<script src="{{ asset('js/gsap.js') }}"></script>
<script src="{{ asset('js/ScrollTrigger.js') }}"></script>
<script src="{{ asset('js/SplitText.js') }}"></script>
<script src="{{ asset('js/gsap-animation.js') }}"></script>

<!-- UI Enhancements -->
<script src="{{ asset('js/theia-sticky-sidebar.js') }}"></script>

<!-- Main Script -->
<script src="{{ asset('js/scripts.js') }}"></script>


</body>

</html>
