(function ($) {
	"use strict";

	gsap.registerPlugin(ScrollTrigger, SplitText);
	gsap.config({
		nullTargetWarn: false,
		trialWarn: false
	});

	/*----  Functions  ----*/
	function getpercentage(x, y, elm) { 
		elm.find('.pbmit-fid-inner').html(y + '/' + x);
		var cal = Math.round((y * 100) / x);
		return cal;
	}

	function pbmit_title_animation() {
		ScrollTrigger.matchMedia({
			"(min-width: 1025px)": function() {
				var pbmit_var = jQuery('.pbmit-custom-heading, .pbmit-heading-subheading');
				if (!pbmit_var.length) {
					return;
				}
				const quotes = document.querySelectorAll(".pbmit-custom-heading .pbmit-title , .pbmit-heading-subheading .pbmit-title");
				quotes.forEach(quote => {
					var getclass = quote.closest('.pbmit-custom-heading ,.pbmit-heading-subheading').className;
					var animation = getclass.split('animation-');
					if (animation[1] == "style4") return
					//Reset if needed
					if (quote.animation) {
						quote.animation.progress(1).kill();
						quote.split.revert();
					}
					quote.split = new SplitText(quote, {
						type: "lines,words,chars",
						linesClass: "split-line"
					});
					gsap.set(quote, { perspective: 400 });
					if (animation[1] == "style1") {
						gsap.set(quote.split.chars, {
							opacity: 0,
							y: "90%",
							rotateX: "-40deg"
						});
					}
					if (animation[1] == "style2") {
						gsap.set(quote.split.chars, {
							opacity: 0,
							x: "50"
						});
					}
					if (animation[1] == "style3") {
						gsap.set(quote.split.chars, {
							opacity: 0,
						});
					}
					quote.animation = gsap.to(quote.split.chars, {
					scrollTrigger: {
						trigger: quote,
						start: "top 90%",
					},
					x: "0",
					y: "0",
					rotateX: "0",
					opacity: 1,
					duration: 1,
					ease: Back.easeOut,
					stagger: .02
					});
				});
			},
		});
	}	

	function pbmit_extend_section() {
		const pbmit_elm = gsap.utils.toArray('.pbmit-extend-animation');
		if (pbmit_elm.length == 0) return	
		ScrollTrigger.matchMedia({
			"(min-width: 1200px)": function() {
				pbmit_elm.forEach(section => {
					let tl = gsap.timeline({
						scrollTrigger: {
							trigger: section,
							start: "top 50%",
							end: "+=400px",
							scrub: 1
						},
						defaults: { ease: "none" }
					});
					tl.fromTo(section, { clipPath: 'inset(0% 5% 0% 5% round 6px)' }, { clipPath: 'inset(0% 0% 0% 0% round 6px)', duration: 1.5 })	
				});			 
			},
			"(max-width:1200px)": function() {
				ScrollTrigger.getAll().forEach(section => section.kill(true));
			}
		});
	}

	function pbmit_card_verticel_pinning() {
		var pbmit_var = jQuery('.pbmit-element-card-box-style-1');
		if (!pbmit_var.length) {
			return;
		}
		ScrollTrigger.matchMedia({
			"(min-width: 992px)": function() {
	
				let pbmitpanels = gsap.utils.toArray(".pbmit-element-card-box-style-1 .pbmit-card-box-wrapper");
				const spacer = 0;
			
				let pbmitheight = pbmitpanels[0].offsetHeight + 120;
				pbmitpanels.forEach((pbmitpanel, i) => {
				ScrollTrigger.create({
					trigger: pbmitpanel, 
					start: () => "top 140px", 
					endTrigger: '.pbmit-element-card-box-style-1', 
					end: `bottom top+=${pbmitheight + (pbmitpanels.length * spacer)}`,
					pin: true, 
					pinSpacing: false, 
				});
				});
			},
			"(max-width:992px)": function() {
				ScrollTrigger.getAll().forEach(pbmitpanels => pbmitpanels.kill(true));
			}
		});
	}

	function pbmit_tween_effect() {
		const pbmit_tween = gsap.utils.toArray('.pbmit-tween-effect');
		if (pbmit_tween.length == 0) return
		ScrollTrigger.matchMedia({
			"(min-width: 1025px)": function() {
				pbmit_tween.forEach((box, i) => {
					let tl = gsap.timeline({
						scrollTrigger: {
							trigger: box,
							start: "top 90%",
							end: "bottom 70%",
							scrub: 1
						},
						defaults: { ease: "none" }
					});
					let xpos_val = box.getAttribute('data-x-start');
					let xpose_val = box.getAttribute('data-x-end');
					let ypos_val = box.getAttribute('data-y-start');
					let ypose_val = box.getAttribute('data-y-end');
					let scale_x_val = box.getAttribute('data-scale-x-start');
					let scale_xe_val = box.getAttribute('data-scale-x-end');
					let skew_x_val = box.getAttribute('data-skew-x-start');
					let skew_xe_val = box.getAttribute('data-skew-x-end');
					let skew_y_val = box.getAttribute('data-skew-y-start');
					let skew_ey_val = box.getAttribute('data-skew-y-end');
					let rotation_x_val = box.getAttribute('data-rotate-x-start');
					let rotation_xe_val = box.getAttribute('data-rotate-x-end');
					gsap.set(box, { xPercent: xpos_val, yPercent: ypos_val, scale: scale_x_val, skewX: skew_x_val, skewY: skew_y_val, rotation: rotation_x_val });
					tl.to(box, { xPercent: xpose_val, yPercent: ypose_val, scale: scale_xe_val, skewX: skew_xe_val, skewY: skew_ey_val, rotation: rotation_xe_val })
				});
			},
			"(max-width:1024px)": function() {
				ScrollTrigger.getAll().forEach(section => section.kill(true));
			}
		});
	}

	var pbmit_sticky_header = function() {
		if (jQuery('.pbmit-header-sticky-yes').length > 0) {
			var header_html = jQuery('#masthead .pbmit-main-header-area').html();
			jQuery('.pbmit-sticky-header').append(header_html);
			jQuery('.pbmit-sticky-header .main-navigation ul, .pbmit-sticky-header .main-navigation ul li, .pbmit-sticky-header .main-navigation ul li a').removeAttr('id');
			jQuery('.pbmit-sticky-header h1').each(function() {
				var thisele = jQuery(this);
				var thisele_class = jQuery(this).attr('class');
				thisele.replaceWith('<span class="' + thisele_class + '">' + jQuery(thisele).html() + '</span>');
			});
			// For infostak header
			if (jQuery('.pbmit-main-header-area').hasClass('pbmit-infostack-header')) { // check if infostack header
				// for header style 2
				jQuery(".pbmit-sticky-header .pbmit-header-menu-area").insertAfter(".pbmit-sticky-header .site-branding");
				jQuery('.pbmit-sticky-header .pbmit-header-info, .pbmit-sticky-header .pbmit-mobile-search, .pbmit-sticky-header .nav-menu-toggle').remove();
			}
		}
		pbmit_flotingbar();
	}

	var pbmit_sticky_header_class = function() {
		// Add sticky class
		if (jQuery('#wpadminbar').length > 0) {
			jQuery('#masthead').addClass('pbmit-adminbar-exists');
		}
		var offset_px = 300;
		if (jQuery('.pbmit-main-header-area').length > 0) {
			offset_px = jQuery('.pbmit-main-header-area').height() + offset_px;
		}
		// apply on document ready
		if (jQuery(window).scrollTop() > offset_px) {
			jQuery('#masthead').addClass('pbmit-fixed-header');
			jQuery('.pbmit-sticky-header .mega-menu.max-mega-menu.mega-menu-horizontal').attr("id", "mega-menu-pbminfotech-top");
		} else {
			jQuery('#masthead').removeClass('pbmit-fixed-header');
		}
		jQuery(window).scroll(function() {
			if (jQuery(window).scrollTop() > offset_px) {
				jQuery('#masthead').addClass('pbmit-fixed-header');
				jQuery('.pbmit-sticky-header .mega-menu.max-mega-menu.mega-menu-horizontal').attr("id", "mega-menu-pbminfotech-top");
			} else {
				jQuery('#masthead').removeClass('pbmit-fixed-header');
			}
		});
	}

	var pbmit_flotingbar = function() {
		jQuery('.pbmit-nav-menu-toggle').on('click', function() {
			jQuery("body .floting-bar-wrap").toggleClass("active");
		})
		if (jQuery('.floting-bar-wrap .closepanel').length == 0) {
			jQuery('.floting-bar-wrap').append('<span class="closepanel"><svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg" width="26.163" height="26.163" viewBox="0 0 26.163 26.163"><rect width="36" height="1" transform="translate(0.707) rotate(45)"></rect><rect width="36" height="1" transform="translate(0 25.456) rotate(-45)"></rect></svg></span>');
			jQuery('.floting-bar-wrap .closepanel').on('click', function() {
				jQuery(".floting-bar-wrap").toggleClass("active");
			});
			return false;
		}
	}

	var pbmit_search_btn = function() {
		jQuery(function() {
			jQuery('.pbmit-header-search-btn').on("click", function(event) {
				event.preventDefault();
				jQuery(".pbmit-search-overlay").addClass("open");
				jQuery('.pbmit-search-overlay input[type="search"]').focus();
			});
			jQuery(".pbmit-icon-close").on("click keyup", function(event) {
				jQuery(".pbmit-search-overlay").removeClass("open");
			});
		});
	}

	var pbmit_active_hover = function() {
		var pbmit_var = jQuery('.pbmit-element-blog-style-4');
		if (!pbmit_var.length) {
			return;
		}
		pbmit_var.each(function() {
			var pbmit_Class = '.pbmit-blog-style-4';
			jQuery(this)
				.find(pbmit_Class).first()
				.addClass('pbmit-active');
			jQuery(this)
				.find(pbmit_Class)
				.on('mouseover', function() {
					jQuery(this).addClass('pbmit-active').siblings().removeClass('pbmit-active');
				});
		});
	}

	var pbmit_multi_icon_box_hover_effect = function() {
		jQuery(".pbmit-element-miconheading-style-12 .pbmit-miconheading-style-12:nth-child(2)").eq(0).addClass('pbmit-mihbox-hover-active');
		jQuery(".pbmit-element-miconheading-style-12 .pbmit-miconheading-style-12").mouseover(function() {
			var main_row = jQuery(this).closest('.pbmit-element-miconheading-style-12');
			jQuery('.pbmit-miconheading-style-12', main_row).removeClass('pbmit-mihbox-hover-active');
			jQuery(this).addClass('pbmit-mihbox-hover-active');
		}).mouseout(function() {
			var main_row = jQuery(this).closest('.pbmit-element-miconheading-style-12');
			jQuery('.pbmit-miconheading-style-12', main_row).removeClass('pbmit-mihbox-hover-active');
			jQuery(this).addClass('pbmit-mihbox-hover-active');
		});
	}

	var pbmit_vertical_scroll_fix_area = function() {
		if (typeof Swiper !== 'undefined') {
			var swiper = new Swiper(".pbmit-vertical-scroller-wrapper", {
				direction		: "vertical",
				createElements	: true,
				slideClass		: 'pbmit-ele',
				slidesPerView	: 1,
				loop			: true,
				autoplay		: { delay: 200 },
				speed			: 2000,
				spaceBetween  : 30,
				breakpoints: {		
					768: {
						spaceBetween  : 0,
						slidesPerView	: 2,
					},
					576: {
						slidesPerView	: 2,	
					},
				}
			});
		}
	}

	var pbmit_thia_sticky = function() {	
		jQuery('.pbmit-sticky-sidebar').theiaStickySidebar({
			additionalMarginTop: 100
		});
		jQuery('.pbmit-sticky-column').theiaStickySidebar({
			additionalMarginTop: 120
		});
	}

	var pbmit_sorting = function() {
		jQuery('.pbmit-sortable-yes:not(.pbmit-ajax-sortable-yes)').each(function() {
			var boxes = jQuery('.pbmit-element-posts-wrapper', this);
			var links = jQuery('.pbmit-sortable-list a', this);
			boxes.isotope({
				animationEngine: 'best-available',
				layoutMode: 'masonry',
				masonry: {
					horizontalOrder: true
				}
				
			});
			links.on('click', function(e) {
				var selector = jQuery(this).data('sortby');
				if (selector != '*') {
					var selector = '.' + selector;
				}
				boxes.isotope({
					animationEngineString : 'best-available',
					filter: selector,
					itemSelector: '.pbmit-ele',
					layoutMode: 'masonry',
					masonry: {
						horizontalOrder: true
					}
				});
				links.removeClass('pbmit-selected');
				jQuery(this).addClass('pbmit-selected');
				e.preventDefault();
			});
		});
	}
	
	// on Resize 
	jQuery(window).on('resize', function(){
		pbmit_title_animation();
	});	
	
	// on load 
	jQuery(window).on('load', function(){
		pbmit_title_animation();
		pbmit_extend_section();
		pbmit_card_verticel_pinning();
		pbmit_tween_effect();
		pbmit_sticky_header();
		pbmit_sticky_header_class();
		pbmit_search_btn();
		pbmit_active_hover();
		pbmit_multi_icon_box_hover_effect();
		pbmit_vertical_scroll_fix_area();
		setTimeout(function() { pbmit_thia_sticky(); }, 500);
		pbmit_sorting();
		
		gsap.delayedCall(1, () =>
			ScrollTrigger.getAll().forEach((t) => {
				t.refresh();
			})
		);	
	});	

})($);

