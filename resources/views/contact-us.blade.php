@extends('layouts.base')
@section('content')
    <!-- Title Bar -->
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner container">
                            <h1 class="pbmit-tbar-title"> Contact Us</h1>
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <span>
                                <a title="" href="#" class="home"><span>Larydot Recruitment</span></a>
                            </span>
                            <span class="sep">
                                <i class="pbmit-base-icon-angle-right"></i>
                            </span>
                            <span><span class="post-root post post-post current-item"> Contact Us</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Title Bar End-->

    <!-- Contact Us Content -->
    <div class="page-content contact-us">



        <!-- Contact Form -->
        <section class="pbmit-bg-color-light">
            <div class="container">
                <div class="contact-form-box pbmit-bg-color-light">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-xl-6">

                            <div class="">
                                <div class="pbmit-ihbox-style-14-wrap">
                                    <div class="pbmit-ihbox-style-14">
                                        <div class="pbmit-ihbox-box">
                                            <div class="pbmit-ihbox-icon">
                                                <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                                    <img src="images/contact-page-img-01.jpg" class="img-fluid"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="pbmit-ihbox-contents">
                                                <h2 class="pbmit-element-title">UK</h2>
                                                <div class="pbmit-heading-desc">
                                                    5 Harbour House, Coldharbour Lane<br>
                                                    Rainham, Essex RM13 9YB<br>
                                                    United Kingdom
                                                </div>
                                                <div class="pbmit-element-subtitle">
                                                    <ul>
                                                        <li><span>Email :</span> <a
                                                                href="mailto:info@larydotrecruitment.uk">info@larydotrecruitment.uk</a>
                                                        </li>
                                                        <li><span>Phone :</span> +44 7424 598599</li>
                                                    </ul>
                                                </div>
                                                <div class="pbmit-ihbox-btn">
                                                    <a href="/contact-us/" class="pbmit-btn">Get in Touch</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="contact-form-heading-area">
									<div class="pbmit-heading-subheading animation-style2">
										<h4 class="pbmit-title">Let’s <span class="pbmit-global-color">Collaborate</span> <br> with Us!</h4>
										<div class="pbmit-heading-desc">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad</div>
									</div>
								</div> --}}
                        </div>
                        <div class="col-md-12 col-xl-6">
                            <form class="contact-form" method="post" id="contact-form"
                                action="https://xhyre-demo.pbminfotech.com/html-demo/send-dummy.php">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Your Name *" name="name"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" placeholder="Your Email *" name="email"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Subject" name="subject"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="tel" class="form-control" placeholder="Your Phone *" name="phone"
                                            required>
                                    </div>
                                    <div class="col-md-12">
                                        <textarea name="message" cols="40" rows="10" class="form-control" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox">
                                                Save my name, email, and website in this browser for the next time I
                                                comment.
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="pbmit-button-wrapper">
                                    <button class="pbmit-btn">
                                        <span class="pbmit-button-content-wrapper">
                                            <span class="pbmit-button-text">Submit Now</span>
                                            <span class="pbmit-button-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76"
                                                    viewBox="0 0 22.76 22.76">
                                                    <title>black-arrow</title>
                                                    <path
                                                        d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1"
                                                        transform="translate(-0.29 -0.29)" fill="none" stroke="#000"
                                                        stroke-width="2"></path>
                                                    <path d="M22.34,1a14.67,14.67,0,0,0,0,20.75"
                                                        transform="translate(-0.29 -0.29)" fill="none" stroke="#000"
                                                        stroke-width="2"></path>
                                                    <path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)"
                                                        fill="none" stroke="#000" stroke-width="2"></path>
                                                </svg>
                                            </span>
                                        </span>
                                        <span class="form-btn-loader d-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 100">
                                                <circle fill="#fff" stroke="#fff" stroke-width="15" r="15"
                                                    cx="40" cy="50">
                                                    <animate attributeName="opacity" calcMode="spline" dur="2"
                                                        values="1;0;1;" keySplines=".5 0 .5 1;.5 0 .5 1"
                                                        repeatCount="indefinite" begin="-.4"></animate>
                                                </circle>
                                                <circle fill="#fff" stroke="#fff" stroke-width="15" r="15"
                                                    cx="100" cy="50">
                                                    <animate attributeName="opacity" calcMode="spline" dur="2"
                                                        values="1;0;1;" keySplines=".5 0 .5 1;.5 0 .5 1"
                                                        repeatCount="indefinite" begin="-.2"></animate>
                                                </circle>
                                                <circle fill="#fff" stroke="#fff" stroke-width="15" r="15"
                                                    cx="160" cy="50">
                                                    <animate attributeName="opacity" calcMode="spline" dur="2"
                                                        values="1;0;1;" keySplines=".5 0 .5 1;.5 0 .5 1"
                                                        repeatCount="indefinite" begin="0"></animate>
                                                </circle>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                                <div class="col-md-12 col-lg-12 message-status mt-3"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Form End -->

        <!-- Client Start -->
        <section class="section-xxl d-none">
            <div class="container">
                <div class="d-flex justify-content-center">
                    <div class="pbminfotech-ele-fid-style-4">
                        <div class="pbmit-fid-content">
                            <h4 class="pbmit-fid-inner">
                                <span class="pbmit-fid-before"></span>
                                <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits"
                                    data-from="0" data-to="250" data-interval="5" data-before="" data-before-style=""
                                    data-after="" data-after-style="">250</span>
                                <span class="pbmit-fid"><span>+</span></span>
                            </h4>
                            <div class="pbmit-fid-sub">
                                Join the companies that trust Create<br> to lead their AI transformation.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slider pt-5 mt-3" data-autoplay="true" data-loop="true" data-dots="false"
                    data-arrows="false" data-columns="6" data-margin="30" data-effect="slide">
                    <div class="swiper-wrapper">
                        <!-- Slide1 -->
                        <article class="pbmit-client-style-1 swiper-slide">
                            <div class="pbmit-border-wrapper">
                                <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <h4 class="pbmit-hide">Client 06</h4>
                                    <div class="pbmit-client-hover-img">
                                        <img src="images/client/client-global-01.png" alt>
                                    </div>
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="images/client/client-blackish-01.png" class="img-fluid"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Slide2 -->
                        <article class="pbmit-client-style-1 swiper-slide">
                            <div class="pbmit-border-wrapper">
                                <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <h4 class="pbmit-hide">Client 06</h4>
                                    <div class="pbmit-client-hover-img">
                                        <img src="images/client/client-global-02.png" alt>
                                    </div>
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="images/client/client-blackish-02.png" class="img-fluid"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Slide3 -->
                        <article class="pbmit-client-style-1 swiper-slide">
                            <div class="pbmit-border-wrapper">
                                <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <h4 class="pbmit-hide">Client 06</h4>
                                    <div class="pbmit-client-hover-img">
                                        <img src="images/client/client-global-03.png" alt>
                                    </div>
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="images/client/client-blackish-03.png" class="img-fluid"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Slide4 -->
                        <article class="pbmit-client-style-1 swiper-slide">
                            <div class="pbmit-border-wrapper">
                                <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <h4 class="pbmit-hide">Client 06</h4>
                                    <div class="pbmit-client-hover-img">
                                        <img src="images/client/client-global-04.png" alt>
                                    </div>
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="images/client/client-blackish-04.png" class="img-fluid"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Slide5 -->
                        <article class="pbmit-client-style-1 swiper-slide">
                            <div class="pbmit-border-wrapper">
                                <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <h4 class="pbmit-hide">Client 06</h4>
                                    <div class="pbmit-client-hover-img">
                                        <img src="images/client/client-global-05.png" alt>
                                    </div>
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="images/client/client-blackish-05.png" class="img-fluid"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Slide6 -->
                        <article class="pbmit-client-style-1 swiper-slide">
                            <div class="pbmit-border-wrapper">
                                <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <h4 class="pbmit-hide">Client 06</h4>
                                    <div class="pbmit-client-hover-img">
                                        <img src="images/client/client-global-06.png" alt>
                                    </div>
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="images/client/client-blackish-06.png" class="img-fluid"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- Client End -->

        <!-- Client Start -->
        <section class="section-lgb">
            <div class="container">
                <div class="iframe-area">
                    <iframe
                        src="https://maps.google.com/maps?q=5%20Harbour%20House%2C%20Coldharbour%20Lane%2C%20Rainham%2C%20Essex%20RM13%209YB%2C%20United%20Kingdom&t=m&z=14&output=embed&iwhloc=near"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        title="Larydot Recruitment, Rainham, Essex" aria-label="Larydot Recruitment, Rainham, Essex">
                    </iframe>

                </div>
            </div>
        </section>
        <!-- Client End -->
    </div>
    <!-- Contact Us Content End -->
@endsection
