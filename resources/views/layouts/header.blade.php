		@section('header-style')

        <style>

        </style>
        @endsection
        <!-- Header Main Area -->
		<header class="site-header pbmit-header-style-1" id="masthead">
			<div class="pbmit-sticky-header pbmit-header-sticky-yes pbmit-bg-color-white pbmit-sticky-header-mobile-yes"></div>
			<div class="pbmit-header-overlay">
				<div class="pbmit-header-overlay-inner">
					<div class="pbmit-main-header-area">
						<div class="container-fluid">
							<div class="pbmit-header-content d-flex justify-content-between align-items-center">
								<div class="pbmit-logo-menuarea d-flex justify-content-between align-items-center">
									<div class="site-branding">
										<h1 class="site-title">
											<a href="/">
												<img class="logo-img" src="images/logoviector.png" alt="Lardot Recruitment">
												<img class="pbmit-sticky-logo" src="images/logoviector.png" alt="Larydot Recruitment">
											</a>
										</h1>
									</div>
									<div class="site-navigation">
										<nav class="main-menu navbar-expand-xl navbar-light">
                                            <div class="navbar-header">
                                                <!-- Toggle Button -->
                                                <button class="navbar-toggler" type="button">
                                                    <i class="pbmit-base-icon-menu-1"></i>
                                                </button>
                                            </div>
                                            <div class="pbmit-mobile-menu-bg"></div>
                                            <div class="collapse navbar-collapse clearfix show" id="pbmit-menu">
                                                <div class="pbmit-menu-wrap">
                                                    <span class="closepanel">
                                                        <svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg" width="20.163" height="20.163" viewBox="0 0 26.163 26.163">
                                                            <rect width="36" height="1" transform="translate(0.707) rotate(45)"></rect>
                                                            <rect width="36" height="1" transform="translate(0 25.456) rotate(-45)"></rect>
                                                        </svg>
                                                    </span>
                                                    <ul class="navigation clearfix">
                                                        <li>
                                                            <a href="{{ url('/') }}">Home</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/about-us') }}">About Us</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/services') }}">Services</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/job-vacancies') }}">Job Vacancies</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/contact-us') }}">Contact Us</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </nav>



									</div>
								</div>
								<div class="pbmit-right-box d-flex align-items-center">
                                    <!-- Company Phone Number -->
                                    <div class="pbmit-button-box">
                                        <div class="pbmit-header-button">
                                            <a href="tel:+447424598599">
                                                <span class="pbmit-header-button-text-1">+44 7424 598599</span>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- Optional Search Button -->
                                    <div class="pbmit-header-search-btn">
                                        <a href="#" title="Search">
                                            <i class="pbmit-base-icon-search-2"></i>
                                            <span class="pbmit-header-search-text">Search</span>
                                        </a>
                                    </div>

                                    <!-- Call to Action Button -->
                                    <div class="pbmit-button-box-second">
                                        <a href="{{ url('/contact-us') }}" class="pbmit-btn">
                                            <span class="pbmit-button-content-wrapper">
                                                <span class="pbmit-button-text">Book Consultation</span>
                                                <span class="pbmit-button-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
                                                        <title>black-arrow</title>
                                                        <path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                        <path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                        <path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="pbmit-slider-area pbmit-slider-one">
                <div class="swiper-slider" data-autoplay="true" data-loop="true" data-dots="false" data-arrows="true" data-columns="1" data-margin="0" data-effect="fade">
                    <div class="swiper-wrapper">

                        <!-- Slide 1: Job Seekers -->
                        <div class="swiper-slide">
                            <div class="pbmit-bg-overlay"></div>
                            <div class="pbmit-slider-item">
                                <div class="pbmit-slider-bg" style="background-image: url(images/banner-slider-img/slider01-slide-01.jpg);"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-4"></div>
                                        <div class="col-md-12 col-lg-8">
                                            <div class="pbmit-slider-content">
                                                <div class="pbmit-slider-title-wrap">
                                                    <h2 class="pbmit-slider-title transform-top transform-delay-1">Career</h2>
                                                </div>
                                                <h4 class="pbmit-slider-small-title transform-right transform-delay-2"><span>Starts With Confidence</span></h4>
                                                <div class="pbmit-slider-desc transform-right-1 transform-delay-3">
                                                    Join a recruitment agency that understands your potential.<br>
                                                    Larydot connects skilled professionals to rewarding roles across the UK.
                                                </div>
                                                <div class="pbmit-button d-flex align-items-center justify-content-lg-end justify-content-center mt-xl-5 mt-4">
                                                    <div class="transform-bottom transform-delay-5">
                                                        <a href="contact-us.html" class="pbmit-btn white">
                                                            <span class="pbmit-button-content-wrapper">
                                                                <span class="pbmit-button-text">Free Consultation</span>
                                                                <span class="pbmit-button-icon">
                                                                    <!-- SVG Icon -->
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="transform-right-1 transform-delay-4">
                                                        <a href="about-us.html" class="pbmit-btn pbmit-btn-style-text ms-3">
                                                            <span class="pbmit-button-content-wrapper">
                                                                <span class="pbmit-button-text">Discover More</span>
                                                                <span class="pbmit-button-icon">
                                                                    <!-- SVG Icon -->
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2: Employers -->
                        <div class="swiper-slide">
                            <div class="pbmit-slider-item">
                                <div class="pbmit-slider-bg" style="background-image: url(images/banner-slider-img/slider01-slide-02.jpg);"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-4"></div>
                                        <div class="col-md-12 col-lg-8">
                                            <div class="pbmit-slider-content">
                                                <div class="pbmit-slider-title-wrap">
                                                    <h2 class="pbmit-slider-title transform-top transform-delay-1">Hire</h2>
                                                </div>
                                                <h4 class="pbmit-slider-small-title transform-right transform-delay-2"><span>Build Your Ideal Team</span></h4>
                                                <div class="pbmit-slider-desc transform-right-1 transform-delay-3">
                                                    We specialize in placing qualified staff in healthcare, ICT, and construction.<br>
                                                    Let Larydot streamline your staffing challenges with ease and expertise.
                                                </div>
                                                <div class="pbmit-button d-flex align-items-center justify-content-lg-end justify-content-center mt-xl-5 mt-4">
                                                    <div class="transform-bottom transform-delay-5">
                                                        <a href="contact-us.html" class="pbmit-btn white">
                                                            <span class="pbmit-button-content-wrapper">
                                                                <span class="pbmit-button-text">Free Consultation</span>
                                                                <span class="pbmit-button-icon">
                                                                    <!-- SVG Icon -->
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="transform-right-1 transform-delay-4">
                                                        <a href="about-us.html" class="pbmit-btn pbmit-btn-style-text ms-3">
                                                            <span class="pbmit-button-content-wrapper">
                                                                <span class="pbmit-button-text">Discover More</span>
                                                                <span class="pbmit-button-icon">
                                                                    <!-- SVG Icon -->
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3: Why Larydot -->
                        <div class="swiper-slide">
                            <div class="pbmit-slider-item">
                                <div class="pbmit-slider-bg" style="background-image: url(images/banner-slider-img/slider01-slide-03.jpg);"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-4"></div>
                                        <div class="col-md-12 col-lg-8">
                                            <div class="pbmit-slider-content">
                                                <div class="pbmit-slider-title-wrap">
                                                    <h2 class="pbmit-slider-title transform-top transform-delay-1">Trusted</h2>
                                                </div>
                                                <h4 class="pbmit-slider-small-title transform-right transform-delay-2"><span>Across Healthcare & Tech</span></h4>
                                                <div class="pbmit-slider-desc transform-right-1 transform-delay-3">
                                                    With years of experience and a focus on excellence,<br>
                                                    Larydot Recruitment delivers professional staffing solutions with integrity.
                                                </div>
                                                <div class="pbmit-button d-flex align-items-center justify-content-lg-end justify-content-center mt-xl-5 mt-4">
                                                    <div class="transform-bottom transform-delay-5">
                                                        <a href="contact-us.html" class="pbmit-btn white">
                                                            <span class="pbmit-button-content-wrapper">
                                                                <span class="pbmit-button-text">Get In Touch</span>
                                                                <span class="pbmit-button-icon">
                                                                    <!-- SVG Icon -->
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="transform-right-1 transform-delay-4">
                                                        <a href="services.html" class="pbmit-btn pbmit-btn-style-text ms-3">
                                                            <span class="pbmit-button-content-wrapper">
                                                                <span class="pbmit-button-text">Our Services</span>
                                                                <span class="pbmit-button-icon">
                                                                    <!-- SVG Icon -->
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- .swiper-wrapper -->
                </div> <!-- .swiper-slider -->
            </div> <!-- .pbmit-slider-area -->

		</header>
		<!-- Header Main Area End Here -->
