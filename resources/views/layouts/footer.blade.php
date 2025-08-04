<!-- footer -->
<footer class="site-footer pbmit-bg-color-blackish">
    <div class="pbmit-footer-widget-area">
        <div class="container">
            <div class="row">
                <!-- Company Summary + Logo -->
                <div class="col-md-6 col-lg-3">
                    <aside class="widget">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('images/logoviector.png') }}" alt="Company Logo" style="max-width: 150px; margin-bottom: 15px;">
                        </a>
                        <p style="color: #ccc;">
                            We specialize in delivering innovative recruitment solutions tailored to your hiring needs. Our platform connects businesses with top-tier talent across industries, streamlining the entire recruitment process.
                        </p>
                    </aside>
                </div>

                <!-- Navigation Links -->
                <div class="col-md-6 col-lg-3">
                    <aside class="widget">
                        <h2 class="widget-title">Quick Links</h2>
                        <ul class="menu">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/about-us') }}">About Us</a></li>
                            <li><a href="{{ url('/services') }}">Services</a></li>
                            <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                        </ul>
                    </aside>
                </div>

                    <!-- Navigation Links -->
                <div class="col-md-6 col-lg-3">
                    <aside class="widget">
                        <h2 class="widget-title">Support</h2>
                        <ul class="menu">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/about-us') }}">About Us</a></li>
                            <li><a href="{{ url('/services') }}">Services</a></li>
                            <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                        </ul>
                    </aside>
                </div>

                <!-- Newsletter Subscription -->
                <div class="col-md-12 col-lg-3">
                    <div class="pbmit-footer-boxes-inner left">
                        <div class="pbmit-footer-title-wrap py-3">
                            <h3 class="pbmit-boxes-area-title">Subscribe Our Newsletter</h3>
                            <span class="pbmit-boxes-area-decs">Subscribe to receive news & updates in your inbox.</span>
                        </div>
                        <form>
                            <div class="pbmit-footer-newsletter">
                                <div class="pbmit-news-wrap">
                                    <input type="email" class="form-control" name="EMAIL" placeholder="Enter Email Address">
                                    <button class="pbmit-btn">
                                        <span class="pbmit-button-content-wrapper">
                                            <span class="pbmit-button-text">Subscribe</span>
                                            <span class="pbmit-button-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76"><title>black-arrow</title><path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path><path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path><path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path></svg>
                                            </span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="pbmit-footer-text-area">
        <div class="container">
            <div class="pbmit-footer-text-inner">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="pbmit-footer-copyright-text-area">
                            &copy; {{ date('Y') }} <a href="{{ url('/') }}">Your Company Name</a>. All rights reserved. Developed by <a href="https://vicsystemstech.com" target="_blank">VICSYSTEMS TECHNOLOGIES LTD</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer End -->

