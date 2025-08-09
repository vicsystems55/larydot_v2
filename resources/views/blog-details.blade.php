@extends('layouts.base')
@section('content')

	<!-- Title Bar -->
	<div class="pbmit-title-bar-wrapper">
		<div class="container">
			<div class="pbmit-title-bar-content">
				<div class="pbmit-title-bar-content-inner">
					<div class="pbmit-tbar">
						<div class="pbmit-tbar-inner container">
							<h1 class="pbmit-tbar-title"> {{ $post->title }}</h1>
						</div>
					</div>
					<div class="pbmit-breadcrumb">
						{{-- <div class="pbmit-breadcrumb-inner">
							<span>
								<a title="" href="#" class="home"><span>Xhyre</span></a>
							</span>
							<span class="sep">
								<i class="pbmit-base-icon-angle-right"></i>
							</span>
							<span>
								<a title="" href="#" class="home"><span>Business</span></a>
							</span>
							<span class="sep">
								<i class="pbmit-base-icon-angle-right"></i>
							</span>
							<span><span class="post-root post post-post current-item"> Demystified Strategies for Effective Campaigns</span></span>
						</div> --}}
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- Title Bar End-->

	<!-- Page Content -->
	<div class="page-content">

		<!-- Blog Single Details -->
		<section class="site-content blog-details">
			<div class="container">
				<div class="row g-0">
					<div class="col-md-9 blog-left-col">
						<div class="row">
							<div class="col-md-12">
								<article>
									<div class="post blog-classic">
										<div class="pbmit-img-wrapper">
											<div class="pbmit-featured-img-wrapper">
												<div class="pbmit-featured-wrapper">
													<img src="images/blog/blog-02.jpg" class="img-fluid" alt="">
												</div>
											</div>
										</div>
										<div class="pbmit-blog-classic-inner">
											<div class="pbmit-blog-meta pbmit-blog-meta-top">
												<span class="pbmit-meta pbmit-meta-author">
													<i class="pbmit-base-icon-user-1"></i>by
													<a class="pbmit-author-link" href="#">{{$post->author}}</a>
												</span>
												<span class="pbmit-meta pbmit-meta-date">
													<i class="pbmit-base-icon-calendar-silhouette"></i>
													<a href="#" rel="bookmark">
														<span class="entry-date">{{$post->date}}</span>
													</a>
												</span>
												<span class="pbmit-meta pbmit-meta-cat">
													<i class="pbmit-base-icon-tag"></i>
													<a href="#" rel="category tag">Business</a>
												</span>
												{{-- <span class="pbmit-meta pbmit-meta-comments">
													<i class="pbmit-base-icon-comment-2"></i>3 Comments
												</span> --}}
											</div>
											<div class="pbmit-entry-content">

                                                {!! $post->content !!}

											</div>
											<div class="pbmit-blog-meta-bottom d-none">
												<div class="pbmit-blog-meta-bottom-left">
													<span class="pbmit-meta-tags">
														<a href="blog-classic.html" rel="tag">Business</a>
														<a href="blog-classic.html" rel="tag">Consulting</a>
														<a href="blog-classic.html" rel="tag">Corporate</a>
													</span>
												</div>
											</div>
										</div>
									</div>
									<nav class="navigation post-navigation d-none" aria-label="Posts">
										<div class="nav-links">
											<div class="nav-previous">
												<a href="#" rel="prev">
													<span class="pbmit-post-nav-icon">
														<i class=" pbmit-base-icon-angle-left"></i>
														<span class="pbmit-post-nav-head">Previous Post</span>
													</span>
													<span class="pbmit-post-nav-wrapper">
														<span class="pbmit-post-nav nav-title">Retaining good employees & motivated</span>
													</span>
												</a>
											</div>
											<div class="nav-next">
												<a href="#" rel="next">
													<span class="pbmit-post-nav-icon">
														<span class="pbmit-post-nav-head">Next Post</span>
														<i class="pbmit-base-icon-angle-right"></i>
													</span>
													<span class="pbmit-post-nav-wrapper">
														<span class="pbmit-post-nav nav-title">Why should business payroll outsourcing?</span>
													</span>
												</a>
											</div>
										</div>
									</nav>
								</article>
								<div class="comments-area d-none">
									<h2 class="comments-title">3 Replies to “Demystified Strategies for Effective Campaigns”</h2>
									<ul class="comment-list">
										<li class="comment depth-1">
											<div class="pbmit-comment">
												<div class="pbmit-comment-avatar-wrap">
													<div class="pbmit-comment-avatar">
														<img alt="" src="images/avtar/img-01.jpg" class="img-fluid">
													</div>
													<div class="pbmit-comment-meta">
														<span class="pbmit-comment-author">
															by
															<span class="pbmit-comment-author-inner">
																<a href="https://pbminfotech.com/" class="url" rel="ugc external nofollow">Heather Smith</a>
															</span>
														</span>
														<span class="pbmit-comment-date">
															<a href="#">5 months ago</a>
														</span>
													</div>
													<div class="reply">
														<a rel="nofollow" class="comment-reply-link" href="#">Reply</a>
													</div>
												</div>
												<div class="pbmit-comment-content">
													<p>Sed at nulla vel elit molestie rutrum non nec orci. Mauris varius, odio rutrum iaculis sagittis, erat urna luctus nisl, at tempor turpis mi at diam. Vestibulum ullamcorper neque eu sapien congue, a ultrices risus faucibus. Ut et felis non ipsum maximus laoreet. Curabitur iaculis bibendum.</p>
												</div>
											</div>
											<ul class="children">
												<li>
													<div class="pbmit-comment">
												<div class="pbmit-comment-avatar-wrap">
													<div class="pbmit-comment-avatar">
														<img alt="" src="images/avtar/img-02.jpg" class="img-fluid">
													</div>
													<div class="pbmit-comment-meta">
														<span class="pbmit-comment-author">
															by
															<span class="pbmit-comment-author-inner">
																<a href="https://pbminfotech.com/" class="url" rel="ugc external nofollow">Leona Spencer</a>
															</span>
														</span>
														<span class="pbmit-comment-date">
															<a href="#">5 months ago</a>
														</span>
													</div>
													<div class="reply">
														<a rel="nofollow" class="comment-reply-link" href="#">Reply</a>
													</div>
												</div>
												<div class="pbmit-comment-content">
													<p>Mauris varius, odio rutrum iaculis sagittis, erat urna luctus nisl, at tempor turpis mi at diam. Vestibulum ullamcorper neque eu sapien congue, a ultrices risus faucibus. Ut et felis non ipsum maximus laoreet. Curabitur iaculis bibendum.</p>
												</div>
											</div>
												</li>
											</ul>
										</li>
										<li>
											<div class="pbmit-comment">
												<div class="pbmit-comment-avatar-wrap">
													<div class="pbmit-comment-avatar">
														<img alt="" src="images/avtar/img-01.jpg" class="img-fluid">
													</div>
													<div class="pbmit-comment-meta">
														<span class="pbmit-comment-author">
															by
															<span class="pbmit-comment-author-inner">
																<a href="https://pbminfotech.com/" class="url" rel="ugc external nofollow">Heather Smith</a>
															</span>
														</span>
														<span class="pbmit-comment-date">
															<a href="#">5 months ago</a>
														</span>
													</div>
													<div class="reply">
														<a rel="nofollow" class="comment-reply-link" href="#">Reply</a>
													</div>
												</div>
												<div class="pbmit-comment-content">
													<p>Sed at nulla vel elit molestie rutrum non nec orci. Mauris varius, odio rutrum iaculis sagittis, erat urna luctus nisl, at tempor turpis mi at diam. Vestibulum ullamcorper neque eu sapien congue, a ultrices risus faucibus. Ut et felis non ipsum maximus laoreet. Curabitur iaculis bibendum.</p>
												</div>
											</div>
										</li>
									</ul>
									<div class="comment-respond pbmit-bg-color-light">
										<h3 class="mb-4 comment-reply-title">Leave a Reply </h3>
										<div class="comment-form">
											<p class="comment-notes">Your email address will not be published. Required fields are marked *</p>
											<form class="contact-form" method="post" id="contact-form" action="https://xhyre-demo.pbminfotech.com/html-demo/send-dummy.php">
												<div class="row">
													<div class="col-sm-12">
														<label for="comment">Comment *</label>
														<textarea required="" class="form-control" id="comment" name="comment" cols="45" rows="8"></textarea>
													</div>
													<div class="col-sm-12">
														<label for="author">Name *</label>
														<input id="author" type="text" class="form-control" name="name" required>
													</div>
													<div class="col-sm-12">
														<label for="email">Email *</label>
														<input id="email" class="form-control" name="email" type="email" value="" required>
													</div>
													<div class="col-sm-12">
														<label for="url">Website</label>
														<input id="url" class="form-control" name="url" type="url" value="" required>
													</div>
													<div class="col-sm-12">
														<div class="form-check">
															<input class="form-check-input" type="checkbox">
															<label class="form-check-label">
																Save my name, email, and website in this browser for the next time I comment.
															</label>
														</div>
													</div>
													<div class="col-sm-12">
														<button type="submit" class="submit pbmit-btn">
															<span>Post Comment</span>
															<span class="form-btn-loader d-none">
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 100"><circle fill="#fff" stroke="#fff" stroke-width="15" r="15" cx="40" cy="50"><animate attributeName="opacity" calcMode="spline" dur="2" values="1;0;1;" keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="-.4"></animate></circle><circle fill="#fff" stroke="#fff" stroke-width="15" r="15" cx="100" cy="50"><animate attributeName="opacity" calcMode="spline" dur="2" values="1;0;1;" keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="-.2"></animate></circle><circle fill="#fff" stroke="#fff" stroke-width="15" r="15" cx="160" cy="50"><animate attributeName="opacity" calcMode="spline" dur="2" values="1;0;1;" keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="0"></animate></circle></svg>
															</span>
														</button>
														<div class="col-md-12 col-lg-12 message-status mt-3"></div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 blog-right-col">
						<aside class="pbmit-sidebar">
							<aside class="widget d-none">
								<div class="single-blog-authorbox">
									<div class="authorbox-img">
										<img class="img-fluid" src="images/sidebar-author-img.jpg" alt="">
									</div>
									<h3 class="pbmit-authorbox-title">Harry Lantan</h3>
									<span class="pbmit-authorbox-subtitle">Herrington Editor Post Blog</span>
									<p class="pbmit-authorbox-desc">Cras ac porttitor est, non tempor justo. Aliquam at gravida ante vitae suscipit nisi.</p>
									<ul class="pbmit-social-links">
										<li class="pbmit-social-li pbmit-social-facebook">
											<a title="Facebook" href="#" target="_blank">
												<span><i class="pbmit-base-icon-facebook-f"></i></span>
											</a>
										</li>
										<li class="pbmit-social-li pbmit-social-twitter">
											<a title="Twitter" href="#" target="_blank">
												<span><i class="pbmit-base-icon-twitter-2"></i></span>
											</a>
										</li>
										<li class="pbmit-social-li pbmit-social-linkedin">
											<a title="LinkedIn" href="#" target="_blank">
												<span><i class="pbmit-base-icon-linkedin-in"></i></span>
											</a>
										</li>
										<li class="pbmit-social-li pbmit-social-instagram">
											<a title="Instagram" href="#" target="_blank">
												<span><i class="pbmit-base-icon-instagram"></i></span>
											</a>
										</li>
									</ul>
								</div>
							</aside>
							<aside class="widget widget-search">
								<form class="search-form">
									<div class="position-relative">
										<input type="search" class="search-field form-control" placeholder="Search Type keyword.." value="" required>
										<button type="submit" class="search-submit"></button>
									</div>
								</form>
							</aside>
							<aside class="widget widget-categories d-none">
								<h2 class="widget-title">Categories</h2>
								<ul>
									<li>
										<a href="blog-classic.html">Adviser</a>
										<span class="pbmit-brackets"> 3 </span>
									</li>
									<li>
										<a href="blog-classic.html">Business</a>
										<span class="pbmit-brackets"> 2 </span>
									</li>
									<li>
										<a href="blog-classic.html">Consultation</a>
										<span class="pbmit-brackets"> 3 </span>
									</li>
									<li>
										<a href="blog-classic.html">Entrepreneurs</a>
										<span class="pbmit-brackets"> 1 </span>
									</li>
									<li>
										<a href="blog-classic.html">Franchising</a>
										<span class="pbmit-brackets"> 4 </span>
									</li>
									<li>
										<a href="blog-classic.html">Leadership</a>
										<span class="pbmit-brackets"> 2 </span>
									</li>
								</ul>
							</aside>
							<aside class="widget widget-recent-post d-none">
								<h2 class="widget-title">Recent Post</h2>
								<ul class="recent-post-list">
									<li class="recent-post-list-li">
										<a class="recent-post-thum" href="blog-single-detail.html">
											<img src="images/recent-post/blog-img-01.jpg" class="img-fluid" alt="">
										</a>
										<div class="pbmit-rpw-content">
											<span class="pbmit-rpw-title">
												<a href="blog-single-detail.html">Why should business payroll outsourcing?</a>
											</span>
											<span class="pbmit-rpw-date">
												<a href="blog-single-detail.html">19 Nov 24</a>
											</span>
										</div>
									</li>
									<li class="recent-post-list-li">
										<a class="recent-post-thum" href="blog-single-detail.html">
											<img src="images/recent-post/blog-img-02.jpg" class="img-fluid" alt="">
										</a>
										<div class="pbmit-rpw-content">
											<span class="pbmit-rpw-title">
												<a href="blog-single-detail.html">Demystified Strategies for Effective Campaigns</a>
											</span>
											<span class="pbmit-rpw-date">
												<a href="blog-single-detail.html">19 Nov 24</a>
											</span>
										</div>
									</li>
									<li class="recent-post-list-li">
										<a class="recent-post-thum" href="blog-single-detail.html">
											<img src="images/recent-post/blog-img-03.jpg" class="img-fluid" alt="">
										</a>
										<div class="pbmit-rpw-content">
											<span class="pbmit-rpw-title">
												<a href="blog-single-detail.html">Retaining good employees & motivated</a>
											</span>
											<span class="pbmit-rpw-date">
												<a href="blog-single-detail.html">19 Nov 24</a>
											</span>
										</div>
									</li>
								</ul>
							</aside>
							<aside class="widget d-none">
								<div class="pbmit-widget-ads">
									<img src="images/bg/ads-bg-img.webp" class="img-fluid w-100 ads-bg-img" alt="">
									<div class="pbmit-service-ads-wrap">
										<div class="pbmit-service-ads">
											<div class="pbmit-ads-icon">
												<i class="pbmit-base-icon-phone-1"></i>
											</div>
											<span>Have any Questions? Call us Today !</span>
											<h3 class="pbmit-ads-call">
												<a href="tel:+0(123)456-789">+0(123)456-789</a>
											</h3>
										</div>
									</div>
								</div>
							</aside>
							<aside class="widget widget-tag-cloud d-none">
								<h3 class="widget-title">Tag Cloud</h3>
								<div class="tagcloud">
									<a href="blog-classic.html" class="tag-cloud-link">Analysis</a>
									<a href="blog-classic.html" class="tag-cloud-link">Business</a>
									<a href="blog-classic.html" class="tag-cloud-link">Consulting</a>
									<a href="blog-classic.html" class="tag-cloud-link">Corporate</a>
									<a href="blog-classic.html" class="tag-cloud-link">Marketing</a>
									<a href="blog-classic.html" class="tag-cloud-link">Solutions</a>
									<a href="blog-classic.html" class="tag-cloud-link">Statistics</a>
									<a href="blog-classic.html" class="tag-cloud-link">Stocks</a>
									<a href="blog-classic.html" class="tag-cloud-link">Trading</a>
								</div>
							</aside>
						</aside>
					</div>
				</div>
			</div>
		</section>
		<!-- Blog Single Details End -->

	</div>
	<!-- Page Content End -->


@endsection
