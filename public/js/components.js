(function ($) {

'use strict';

/*!==========================================================================
 * ==========================================================================
 * ==========================================================================
 *
 * Arrigo – Minimal Portfolio Contemporary HTML5 Template
 *
 * [Table of Contents]
 *
 * 1. Animations
 * 2. Burger
 * 3. Button
 * 4. Circle
 * 5. Figure Feature
 * 6. Figure Portfolio
 * 7. Figure Post
 * 8. Figure Service
 * 9. Form
 * 10. Gmap
 * 11. Grid
 * 12. Header
 * 13. Menu
 * 14. Preloader
 * 15. Section Features
 * 16. Section CTA
 * 17. Section Fullscreen
 * 18. Section Header
 * 19. Section Info
 * 20. Section Intro
 * 21. Section Masthead
 * 22. Section Logos
 * 23. Section Steps
 * 24. Slider
 * 25. Slider Fullscreen
 * 26. Slider Fullscreen4
 * 27. Slider Services
 * 28. Slider Portfolio Item
 * 29. Split Text
 * 30. Slider Testimonials
 * 31. Social
 *
 * ==========================================================================
 * ==========================================================================
 * ==========================================================================
 */

'use strict';

$(document).ready(function () {
	document.fonts.ready.then(() => {
		var
			sectionFullscreen4 = new SectionFullscreen4(),
			sectionFullscreen1 = new SectionFullscreen1(),
			figurePortfolio = new FigurePortfolio(),
			sectionHeader = new SectionHeader(),
			sectionIntro = new SectionIntro(),
			sliderServices = new SliderServices(),
			sectionInfo = new SectionInfo(),
			sectionCTA = new SectionCTA(),
			figurePost = new FigurePost(),
			sliderTestimonials = new SliderTestimonials(),
			sectionLogos = new SectionLogos(),
			sectionFeatures = new SectionFeatures(),
			sectionSteps = new SectionSteps(),
			sectionMasthead = new SectionMasthead();

		objectFitImages();

		new SliderPortfolioItem();
		new SliderFullscreen1();
		new SliderFullscreen4();
		new FigureFeature();
		new FigureService();
		new GMap();
		new Form();
		new Burger();
		new Social();
		new Button();
		new Menu();

		new Preloader(function () {
			new Grid();

			sectionFullscreen4.animate();
			sectionFullscreen1.animate();
			sectionHeader.animate();
			sectionIntro.animate();
			figurePortfolio.animate();
			sliderServices.animate();
			sectionInfo.animate();
			sectionCTA.animate();
			figurePost.animate();
			sliderTestimonials.animate();
			sectionLogos.animate();
			sectionFeatures.animate();
			sectionSteps.animate();
			sectionMasthead.animate();
		});
	});
});

/*!========================================================================
	1. Animations
	======================================================================!*/
function createOSScene($el, tl) {
	ScrollTrigger.create({
		trigger: $el.get(0),
		start: () => `top bottom-=${window.innerHeight * 0.15}vh`,
		animation: tl,
		invalidateOnRefresh: true,
		once: true
	});
}

function animateCurtainImg($curtain, $img) {
	const tl = gsap.timeline({
		defaults: {
			ease: 'expo.inOut',
		}
	});

	return tl.to($curtain, {
		x: '0%',
		duration: 0.3
	}).to($curtain, {
		y: '0%',
		duration: 0.4
	}).set($img, {
		autoAlpha: 1
	}).to($img, {
		scale: 1,
		duration: 1,
		ease: 'power4.out'
	}).to($curtain, {
		y: '102%',
		duration: 0.3
	}, '-=1');
}

function animateCurtainContent($curtain, $content) {
	const tl = gsap.timeline({
		defaults: {
			ease: 'expo.inOut'
		}
	});

	return tl.to($curtain, {
		x: '0%',
		duration: 0.3
	}).to($curtain, {
		y: '0%',
		duration: 0.4``
	}).set($content, {
		autoAlpha: 1
	}).to($curtain, {
		y: '102%',
		duration: 0.3
	});
}

function setCurtainImg($curtain, $img) {
	gsap.set($img, {
		scale: 1.1,
		autoAlpha: 0,
	});

	gsap.set($curtain, {
		y: '-99%',
		x: '-100%'
	});
}

function setCurtainContent($curtain, $content) {
	gsap.set($content, {
		autoAlpha: 0,
	});

	gsap.set($curtain, {
		y: '-99%',
		x: '-100%'
	});
}

/*!========================================================================
	2. Burger
	======================================================================!*/
const Burger = function () {
	const
		OPEN_CLASS = 'burger_opened',
		header = new Header();

	$(document).on('click', '.js-burger', function (e) {
		e.preventDefault();

		if (!e.detail || e.detail == 1) {
			const $burger = $(this);

			if ($burger.hasClass(OPEN_CLASS)) {
				$burger.removeClass(OPEN_CLASS);
				header.closeOverlayMenu();
			} else {
				$burger.addClass(OPEN_CLASS);
				header.openOverlayMenu();
			}
		}
	});
}

/*!========================================================================
	3. Button
	======================================================================!*/
const Button = function () {
	$('.button-square').each(function () {
		const
			$el = $(this),
			$rect = $el.find('.rect');

		if ($rect.length) {
			gsap.set($rect, {
				drawSVG: 0,
				stroke: '#b68c70',
			});

			$el.on('mouseenter touchstart', function () {
				gsap.to($rect, {
					drawSVG: true,
					duration: 0.6,
					ease: 'power4.inOut'
				});
			}).on('mouseleave touchend', function () {
				gsap.to($rect, {
					drawSVG: false,
					duration: 0.6,
					ease: 'power4.inOut'
				});
			});
		}
	});
}

/*!========================================================================
	4. Circle
	======================================================================!*/
const Circle = function () {
	this.animate = function ($el) {
		const $circle = $el.find('.circle');

		if (!$circle.length) {
			return;
		}

		gsap.set($circle, {
			drawSVG: 0,
			stroke: '#b68c70',
		});

		$el.on('mouseenter touchstart', () => {
			gsap.to($circle, {
				drawSVG: true,
				duration: 0.6,
				ease: 'power4.inOut'
			});
		}).on('mouseleave touchend', () => {
			gsap.to($circle, {
				drawSVG: false,
				duration: 0.6,
				ease: 'power4.inOut'
			});
		});
	}
}

/*!========================================================================
	5. Figure Feature
	======================================================================!*/
const FigureFeature = function () {
	const $elements = $('.figure-feature');

	if (!$elements.length) {
		return;
	}

	const circle = new Circle();

	$elements.each(function () {
		circle.animate($(this));
	});
}

/*!========================================================================
	6. Figure Portfolio
	======================================================================!*/
const FigurePortfolio = function () {
	const $target = $('.figure-portfolio[data-os-animation]'),
		$img = $target.find('.overflow__content'),
		$curtain = $target.find('.overflow__curtain'),
		$heading = $target.find('.figure-portfolio__header h2'),
		$headline = $target.find('.figure-portfolio__headline'),
		$info = $target.find('.figure-portfolio__info'),
		splitHeading = splitLines($heading),
		splitInfo = splitLines($info);

	prepare();

	function prepare() {
		if (!$target.length) {
			return;
		}

		setLines(splitHeading.words);
		setLines(splitInfo.words);

		gsap.set($headline, {
			scaleX: 0,
			transformOrigin: 'left center'
		});

		setCurtainImg($curtain, $img);
	}

	this.animate = function () {
		if (!$target.length) {
			return;
		}

		$target.each(function () {
			const $el = $(this),
				tl = gsap.timeline(),
				$elLink = $el.find('.figure-portfolio__link'),
				$elImg = $el.find($img),
				$elCurtain = $el.find($curtain),
				$elHeading = $el.find($heading),
				$elHeadline = $el.find($headline),
				elSplitInfo = $el.find(splitInfo.words),
				elSplitHeading = $el.find(splitHeading.words);

			tl
				.add(animateCurtainImg($elCurtain, $elImg))
				.to($elHeadline, {
					scaleX: 1,
					duration: 0.6,
					ease: 'power4.out'
				}, '-=1')
				.add(animateLines(elSplitInfo), '-=0.8')
				.add(animateLines(elSplitHeading), '-=0.8');

			createOSScene($el, tl);

			$elLink
				.on('mouseenter touchstart', function () {
					gsap.to($elImg, {
						scale: 1.1,
						duration: 0.3,
						ease: 'power3.InOut',
					});

					gsap.to($elHeadline, {
						scaleX: 0.8,
						duration: 0.3,
						ease: 'power3.InOut',
						transformOrigin: 'right center'
					});

					gsap.to($elHeading, {
						x: 10,
						duration: 0.3,
						ease: 'power3.InOut',
					});
				})
				.on('mouseleave touchend', function () {
					gsap.to($elImg, {
						scale: 1,
						duration: 0.3,
						ease: 'power2.InOut',
					});

					gsap.to($elHeadline, {
						scaleX: 1,
						duration: 0.3,
						ease: 'power2.InOut',
						transformOrigin: 'right center'
					});

					gsap.to($elHeading, {
						x: 0,
						duration: 0.3,
						ease: 'power2.InOut',
					});
				});
		});
	}
}

/*!========================================================================
	7. Figure Post
	======================================================================!*/
const FigurePost = function () {
	const $target = $('.figure-post[data-os-animation]'),
		$heading = $target.find('.figure-post__content h3'),
		$text = $target.find('.figure-post__content p'),
		splitHeading = splitLines($heading),
		splitDescr = splitLines($text);

	prepare();

	function prepare() {
		if (!$target.length) {
			return;
		}

		setLines(splitHeading.words);

		if (splitDescr) {
			setLines(splitDescr.lines);
		}
	}

	this.animate = function () {
		if (!$target.length) {
			return;
		}

		$target.each(function () {
			const
				$el = $(this),
				tl = gsap.timeline(),
				$elHeading = $el.find($heading),
				elSplitDescr = $elHeading.find(splitDescr.lines),
				elSplitHeading = $elHeading.find(splitHeading.words);

			tl
				.add(animateLines(elSplitHeading));
			if (splitDescr) {
				tl.add(animateLines(elSplitDescr, 1, 0.1));
			}

			createOSScene($el, tl);
		});
	}
}

/*!========================================================================
	8. Figure Service
	======================================================================!*/
const FigureService = function () {
	const $target = $('.figure-service');

	if (!$target.length) {
		return;
	}

	const
		circle = new Circle(),
		$icons = $target.find('.figure-service__icon'),
		$headlines = $target.find('.figure-service__headline'),
		$numbers = $target.find('.figure-service__number'),
		$texts = $target.find('.figure-service__header p'),
		splitDescr = new SplitText($texts, {
			type: 'lines',
			linesClass: 'split-line',
		});

	setLines(splitDescr.lines);

	$target.each(function () {
		const
			$el = $(this),
			$elIcon = $el.find($icons),
			$elHeadline = $el.find($headlines),
			$elNumber = $el.find($numbers),
			tl = gsap.timeline(),
			elDescr = $el.find(splitDescr.lines);

		circle.animate($el);

		$el
			.on('mouseenter touchstart', function () {
				tl
					.clear()
					.to($elHeadline, {
						scaleX: 2,
						duration: 0.6,
						ease: 'power4.out'
					})
					.to($elNumber, {
						y: -50,
						duration: 0.3,
						autoAlpha: 0
					}, '-=0.6')
					.to($elIcon, {
						y: -50,
						duration: 0.6,
						ease: 'power4.out'
					}, '-=0.6')
					.add(animateLines(elDescr, 0.6, 0.1), '-=0.6');
			})
			.on('mouseleave touchend', function () {
				tl
					.clear()
					.to($elHeadline, {
						scaleX: 1,
						duration: 0.3
					})
					.to($elNumber, {
						y: 0,
						duration: 0.3,
						autoAlpha: 1
					}, '-=0.3')
					.to($elIcon, {
						y: 0,
						duration: 0.3,
					}, '-=0.3')
					.to(elDescr, {
						y: '100%',
						duration: 0.3,
						autoAlpha: 0
					}, '-=0.3');
			});
	});
}

/*!========================================================================
	9. Form
	======================================================================!*/
const Form = function () {
	floatLabels();
	ajaxForm();

	function floatLabels() {
		const
			INPUT_CLASS = '.input-float__input',
			INPUT_NOT_EMPTY = 'input-float__input_not-empty',
			INPUT_FOCUSED = 'input-float__input_focused';

		if (!$(INPUT_CLASS).length) {
			return;
		}

		$(INPUT_CLASS).each(function () {
			const $currentField = $(this);

			if ($currentField.val()) {
				$currentField.addClass(INPUT_NOT_EMPTY);
			} else {
				$currentField.removeClass([INPUT_FOCUSED, INPUT_NOT_EMPTY]);
			}
		});

		$(document).on('focusin', INPUT_CLASS, function () {
			const $currentField = $(this);

			$currentField.addClass(INPUT_FOCUSED).removeClass(INPUT_NOT_EMPTY);
		}).on('focusout', INPUT_CLASS, function () {
			const $currentField = $(this);

			// delay needed due to issues with datepicker
			if ($currentField.val()) {
				$currentField.removeClass(INPUT_FOCUSED).addClass(INPUT_NOT_EMPTY);
			} else {
				$currentField.removeClass(INPUT_FOCUSED);
			}
		});
	}

	function ajaxForm() {
		const $form = $('.js-ajax-form');

		if (!$form.length) {
			return;
		}

		$form.validate({
			errorElement: 'span',
			errorPlacement: function (error, element) {
				error.appendTo(element.parent()).addClass('form__error');
			},
			submitHandler: function (form) {
				ajaxSubmit(form);
			}
		});

		function ajaxSubmit(form) {
			$.ajax({
				type: $form.attr('method'),
				url: $form.attr('action'),
				data: $form.serialize()
			}).done(function () {
				alert($form.attr('data-message-success'));
				$form.trigger('reset');
				floatLabels();
			}).fail(function () {
				alert($form.attr('data-message-error'));
			});
		}
	}
}

/*!========================================================================
	10. Gmap
	======================================================================!*/
const GMap = function () {
	const $mapContainer = $('#js-gmap');

	if ($mapContainer.length) {
		const
			LAT = parseFloat($mapContainer.attr('data-gmap-lat')),
			LON = parseFloat($mapContainer.attr('data-gmap-lon')),
			ZOOM = parseInt($mapContainer.attr('data-gmap-zoom')),
			MARKER = $mapContainer.attr('data-gmap-marker'),
			TITLE = $mapContainer.attr('data-gmap-title');

		const map = new google.maps.Map(document.getElementById($mapContainer[0].id), {
			center: {
				lat: LAT,
				lng: LON
			},
			zoom: ZOOM,
			styles: [{
				"featureType": "water",
				"elementType": "geometry",
				"stylers": [{
					"color": "#e9e9e9"
				}, {
					"lightness": 17
				}]
			}, {
				"featureType": "landscape",
				"elementType": "geometry",
				"stylers": [{
					"color": "#f5f5f5"
				}, {
					"lightness": 20
				}]
			}, {
				"featureType": "road.highway",
				"elementType": "geometry.fill",
				"stylers": [{
					"color": "#ffffff"
				}, {
					"lightness": 17
				}]
			}, {
				"featureType": "road.highway",
				"elementType": "geometry.stroke",
				"stylers": [{
					"color": "#ffffff"
				}, {
					"lightness": 29
				}, {
					"weight": 0.2
				}]
			}, {
				"featureType": "road.arterial",
				"elementType": "geometry",
				"stylers": [{
					"color": "#ffffff"
				}, {
					"lightness": 18
				}]
			}, {
				"featureType": "road.local",
				"elementType": "geometry",
				"stylers": [{
					"color": "#ffffff"
				}, {
					"lightness": 16
				}]
			}, {
				"featureType": "poi",
				"elementType": "geometry",
				"stylers": [{
					"color": "#f5f5f5"
				}, {
					"lightness": 21
				}]
			}, {
				"featureType": "poi.park",
				"elementType": "geometry",
				"stylers": [{
					"color": "#dedede"
				}, {
					"lightness": 21
				}]
			}, {
				"elementType": "labels.text.stroke",
				"stylers": [{
					"visibility": "on"
				}, {
					"color": "#ffffff"
				}, {
					"lightness": 16
				}]
			}, {
				"elementType": "labels.text.fill",
				"stylers": [{
					"saturation": 36
				}, {
					"color": "#333333"
				}, {
					"lightness": 40
				}]
			}, {
				"elementType": "labels.icon",
				"stylers": [{
					"visibility": "off"
				}]
			}, {
				"featureType": "transit",
				"elementType": "geometry",
				"stylers": [{
					"color": "#f2f2f2"
				}, {
					"lightness": 19
				}]
			}, {
				"featureType": "administrative",
				"elementType": "geometry.fill",
				"stylers": [{
					"color": "#fefefe"
				}, {
					"lightness": 20
				}]
			}, {
				"featureType": "administrative",
				"elementType": "geometry.stroke",
				"stylers": [{
					"color": "#fefefe"
				}, {
					"lightness": 17
				}, {
					"weight": 1.2
				}]
			}]
		});

		const marker = new google.maps.Marker({
			position: new google.maps.LatLng(LAT, LON),
			map: map,
			// title: TITLE,
			icon: MARKER
		});

		marker.addListener('click', function () {
			const infowindow = new google.maps.InfoWindow({
				content: TITLE
			});
			infowindow.open(map, marker);
		});
	}
}

/*!========================================================================
	11. Grid
	======================================================================!*/
const Grid = function () {
	const $grid = $('.js-grid');

	if (!$grid.length) {
		return;
	}

	$grid.masonry({
		itemSelector: '.js-grid__item',
		columnWidth: '.js-grid__sizer',
		horizontalOrder: true
	});
}

/*!========================================================================
	12. Header
	======================================================================!*/
const Header = function () {
	const
		$overlay = $('.header__wrapper-overlay-menu'),
		$menuLinks = $('.overlay-menu > li > a .overlay-menu__item-wrapper'),
		$submenu = $('.overlay-sub-menu'),
		$submenuButton = $('.js-submenu-back'),
		$submenuLinks = $submenu.find('> li > a .overlay-menu__item-wrapper');

	stickHeader();

	if (!$overlay.length) {
		return;
	}

	setOverlayMenu();

	function setOverlayMenu() {
		gsap.set($overlay, {
			y: '100%'
		});

		if ($menuLinks.length) {
			gsap.set($menuLinks, {
				y: '100%'
			});
		}

		if ($submenuLinks.length) {
			gsap.set($submenuLinks, {
				y: '100%'
			});
		}

		if ($submenu.length) {
			gsap.set($submenu, {
				autoAlpha: 0,
				y: 10
			});
		}

		if ($submenuButton.length) {
			gsap.set($submenuButton, {
				autoAlpha: 0,
				y: 10
			});
		}
	}

	this.closeOverlayMenu = function () {
		const tl = gsap.timeline();

		tl.timeScale(2);

		if ($menuLinks.length) {
			tl
				.to($menuLinks, {
					y: '-100%',
					duration: 0.6,
					ease: 'power4.in'
				}, 'start');
		}

		if ($submenuLinks.length) {
			tl
				.to($submenuLinks, {
					y: '-100%',
					duration: 0.6,
					ease: 'power4.in'
				}, 'start');
		}

		tl.to($submenuButton, {
			y: -10,
			duration: 0.6,
			autoAlpha: 0
		})
			.to($overlay, {
				y: '-100%',
				duration: 1,
				ease: 'expo.inOut'
			})
			.add(function () {
				setOverlayMenu();
			});
	};

	this.openOverlayMenu = function () {
		const tl = gsap.timeline();

		tl
			.to($overlay, {
				y: '0%',
				duration: 1,
				ease: 'expo.inOut'
			})
			.to($menuLinks, {
				y: '0%',
				stagger: 0.05,
				duration: 0.6,
				ease: 'power4.out',
			}, '-=0.3');
	};

	function stickHeader() {
		const $header = $('.js-header-sticky');

		if ($header.length) {
			ScrollTrigger.create({
				start: () => `top+=1px top`,
				end: () => `bottom top`, // page "end" will never be reached
				scrub: true,
				pinSpacing: false,
				onToggle: (isActive) => {
					$header.toggleClass('header_sticky', isActive);
				},
			});
		}
	}
}

/*!========================================================================
	13. Menu
	======================================================================!*/
const Menu = function () {
	const $menu = $('.js-overlay-menu');

	if (!$menu.length) {
		return;
	}

	const $links = $menu.find('.menu-item-has-children > a'),
		$submenus = $menu.find('.overlay-sub-menu'),
		$submenuButton = $('.js-submenu-back'),
		OPEN_CLASS = 'opened',
		tl = gsap.timeline();

	function openSubmenu($submenu, $currentMenu) {
		const
			$currentLinks = $currentMenu.find('> li > a .overlay-menu__item-wrapper'),
			$submenuLinks = $submenu.find('> li > a .overlay-menu__item-wrapper');

		tl
			.pause()
			.clear()
			.play()
			.set($submenu, {
				autoAlpha: 1,
				zIndex: 100
			})
			.to($currentLinks, {
				y: '-100%',
				duration: 0.6,
				ease: 'power4.in'
			}, '-=0.3')
			.to($submenuLinks, {
				y: '0%',
				stagger: 0.05,
				duration: 0.6,
				ease: 'power4.out'
			});

		$submenus.removeClass(OPEN_CLASS);
		$submenu.not($menu).addClass(OPEN_CLASS);

		if ($submenus.hasClass(OPEN_CLASS)) {
			tl.to($submenuButton, {
				autoAlpha: 1,
				duration: 0.3,
				y: 0
			}, '-=0.6');
		} else {
			tl.to($submenuButton, {
				autoAlpha: 0,
				duration: 0.3,
				y: 10
			}, '-=0.6');
		}
	}

	function closeSubmenu($submenu, $currentMenu) {
		const
			$currentLinks = $currentMenu.find('> li > a .overlay-menu__item-wrapper'),
			$submenuLinks = $submenu.find('> li > a .overlay-menu__item-wrapper');

		tl
			.pause()
			.clear()
			.play()
			.set($submenu, {
				zIndex: -1
			})
			.to($submenuLinks, {
				y: '100%',
				duration: 0.6,
				ease: 'power4.in'
			}, '-=0.3')
			.to($currentLinks, {
				y: '0%',
				duration: 0.6,
				stagger: 0.05,
				ease: 'power4.out'
			})
			.set($submenu, {
				autoAlpha: 0,
				y: 10
			});

		$submenus.removeClass(OPEN_CLASS);
		$currentMenu.not($menu).addClass(OPEN_CLASS);

		if ($submenus.hasClass(OPEN_CLASS)) {
			gsap.to($submenuButton, {
				autoAlpha: 1,
				duration: 0.3,
				y: 0
			}, '-=0.6');
		} else {
			gsap.to($submenuButton, {
				autoAlpha: 0,
				duration: 0.3,
				y: 10
			}, '-=0.6');
		}
	}

	$links.on('click', function (e) {
		e.preventDefault();

		if (!e.detail || e.detail == 1) {
			const
				$el = $(this),
				$currentMenu = $el.parents('ul'),
				$submenu = $el.next('.overlay-sub-menu');

			openSubmenu($submenu, $currentMenu);
		}
	});

	$submenuButton.on('click', function (e) {
		e.preventDefault();

		if (!e.detail || e.detail == 1) {
			const
				$openedMenu = $submenus.filter('.' + OPEN_CLASS),
				$prevMenu = $openedMenu.parent('li').parent('ul');

			closeSubmenu($openedMenu, $prevMenu);
		}
	});
}

/*!========================================================================
	14. Preloader
	======================================================================!*/
const Preloader = function (callback) {
	const
		$preloader = $('.preloader'),
		$curtain = $preloader.find('.preloader__curtain'),
		$logo = $preloader.find('.preloader__logo'),
		$rect = $logo.find('.rect'),
		tl = gsap.timeline();

	$('body').imagesLoaded().always({
		background: true
	}, function () {
		if (!$preloader.length) {
			callback();
			return;
		}

		finish();
	});

	if (!$preloader.length) {
		return;
	}

	load();

	function finish() {
		tl
			.clear()
			.to($rect, {
				drawSVG: true,
				duration: 2,
				ease: 'expo.inOut'
			})
			.to($logo, {
				autoAlpha: 0,
				duration: 0.3
			}, '-=0.3')
			.to($curtain, {
				y: '-100%',
				stagger: 0.05,
				duration: 1,
				ease: 'expo.inOut'
			}, '-=0.3')
			.set($preloader, {
				autoAlpha: 0
			})
			.add(function () {
				callback();
			}, '-=0.4');

	}

	function load() {
		tl.fromTo($rect, {
			drawSVG: 0,
			stroke: '#b68c70',
		}, {
			duration: 15,
			ease: {
				'_p': 0.7,
				'_p1': 0.15,
				'_p2': 0.7,
				'_p3': 0.85,
				'_calcEnd': false
			},
			drawSVG: true
		});
	}

	this.curtainsUp = function () {
		tl
			.to($curtain, {
				duration: 1,
				stagger: 0.05,
				y: '-100%',
				ease: 'expo.inOut'
			})
			.set($preloader, {
				autoAlpha: 0
			});
	}

	this.curtainsDown = function () {
		tl
			.set($preloader, {
				autoAlpha: 1
			})
			.to($curtain, {
				duration: 1,
				stagger: 0.05,
				y: '0%',
				ease: 'expo.inOut'
			})
			.set($rect, {
				drawSVG: 0
			})
			.to($logo, {
				duration: 0.6,
				autoAlpha: 1
			});
	}
}

/*!========================================================================
	15. Section Features
	======================================================================!*/
const SectionFeatures = function () {
	const $target = $('.section-features[data-os-animation]'),
		$heading = $('.figure-feature__header h3'),
		$text = $('.figure-feature__header p'),
		$icon = $('.figure-feature__icon'),
		splitDescr = splitLines($text),
		splitHeading = splitLines($heading),
		tl = gsap.timeline();

	prepare();

	function prepare() {
		if (!$target.length) {
			return;
		}

		setLines(splitHeading.words);
		setLines(splitDescr.lines);

		gsap.set($icon, {
			autoAlpha: 0,
			y: 30
		});
	}

	this.animate = function () {
		if (!$target.length) {
			return;
		}

		tl.to($icon, {
			autoAlpha: 1,
			duration: 0.6,
			stagger: 0.05,
			y: 0,
			ease: 'power4.out'
		})
		tl.add(animateLines(splitHeading.words), '-=0.6')
		tl.add(animateLines(splitDescr.lines), '-=0.6')

		createOSScene($target, tl);
	}
}

/*!========================================================================
	16. Section CTA
	======================================================================!*/
const SectionCTA = function () {
	const $target = $('.section-cta[data-os-animation]'),
		$header = $target.find('.section-cta__header'),
		$headline = $target.find('.section-cta__headline'),
		$heading = $header.find('h2, h4'),
		$button = $target.find('.section-cta__wrapper-button'),
		splitHeading = splitLines($heading);

	prepare();

	function prepare() {
		if (!$target.length) {
			return;
		}

		setLines(splitHeading.lines);

		gsap.set($button, {
			autoAlpha: 0,
			y: 30
		});

		gsap.set($headline, {
			scaleX: 0,
			transformOrigin: 'left center'
		});
	}

	this.animate = function () {
		if (!$target.length) {
			return;
		}

		$target.each(function () {
			const $el = $(this),
				elLines = $el.find(splitHeading.lines),
				$elHeader = $el.find($header),
				tl = gsap.timeline();

			tl
				.add(animateLines(elLines, 1, 0.1))
				.to($button, {
					duration: 0.6,
					autoAlpha: 1,
					y: 0
				}, '<0.2')
				.to($headline, {
					duration: 0.6,
					scaleX: 1,
					ease: 'expo.inOut'
				}, '<');

			createOSScene($elHeader, tl);
		});
	}
}

/*!========================================================================
	17. Section Fullscreen
	======================================================================!*/
const SectionFullscreen4 = function () {
	const $target = $('.section-fullscreen_4[data-os-animation]'),
		tl = gsap.timeline(),
		$headline = $target.find('.slider-fullscreen4__slide-headline'),
		$heading = $target.find('.slider-fullscreen4__slide-header h2'),
		splitHeading = splitLines($heading);

	prepare();

	function prepare() {
		if (!$target.length) {
			return;
		}

		setLines(splitHeading.words);

		gsap.set($headline, {
			scaleX: 0,
			transformOrigin: 'center center',
		});
	}

	this.animate = function () {
		if (!$target.length) {
			return;
		}

		tl
			.to($headline, {
				duration: 0.6,
				stagger: 0.05,
				scaleX: 1,
				ease: 'expo.inOut'
			})
			.add(animateLines(splitHeading.words), '-=0.6');
	}
}

/* ======================================================================== */
/* sectionFullscreen1 */
/* ======================================================================== */
const SectionFullscreen1 = function () {
	const
		tl = gsap.timeline(),
		$target = $('.section-fullscreen_1[data-os-animation]'),
		$bg = $target.find('.section-fullscreen__inner-bg'),
		$headline = $target.find('.slider-fullscreen__slide-headline'),
		$heading = $target.find('.slider-fullscreen__slide-header h2'),
		$description = $target.find('.slider-fullscreen__slide-header p'),
		$button = $target.find('.slider-fullscreen__slide-wrapper-button'),
		$img = $target.find('.overflow__content'),
		$curtain = $target.find('.overflow__curtain'),
		splitHeading = splitLines($heading),
		splitDescription = splitLines($description);

	prepare();

	function prepare() {
		if (!$target.length) {
			return;
		}

		setLines(splitHeading.words);
		setLines(splitDescription.lines);

		if ($headline.length) {
			gsap.set($headline, {
				scaleX: 0,
				transformOrigin: 'left center',
			});
		}

		if ($bg.length) {
			gsap.set($bg, {
				scaleY: 0,
				transformOrigin: 'bottom center'
			});
		}

		if ($img.length) {
			gsap.set($img, {
				scale: 1.1,
				autoAlpha: 0,
			});
		}

		if ($button.length) {
			gsap.set($button, {
				y: 10,
				autoAlpha: 0
			});
		}

		if ($curtain.length) {
			gsap.set($curtain, {
				y: '100%',
			});
		}
	}

	this.animate = function () {
		if (!$target.length) {
			return;
		}

		if ($bg.length) {
			tl
				.to($bg, {
					duration: 0.6,
					stagger: 0.05,
					scaleY: 1,
					ease: 'expo.inOut'
				});
		}

		if ($curtain.length) {
			tl.to($curtain, {
				duration: 0.3,
				y: '0%',
				ease: 'expo.inOut'
			}, '-=0.6');
		}

		if ($img.length) {
			tl.set($img, {
				autoAlpha: 1
			});

			tl.to($img, {
				scale: 1,
				duration: 0.6,
				ease: 'power4.out'
			});
		}

		if ($curtain.length) {
			tl
				.to($curtain, {
					y: '-102%',
					duration: 0.3,
					ease: 'expo.inOut'
				}, '-=0.6');
		}

		if ($headline.length) {
			tl.to($headline, {
				scaleX: 1,
				duration: 0.6,
				ease: 'expo.inOut'
			}, '-=1');
		}

		tl.add(animateLines(splitHeading.words), '-=0.6');

		if ($button.length) {
			tl.to($button, {
				duration: 0.6,
				autoAlpha: 1,
				y: 0
			}, '-=0.6');
		}

		tl.add(animateLines(splitDescription.lines, 1, 0.1), '-=0.6');
	}
}

/*!========================================================================
	18. Section Header
	======================================================================!*/
const SectionHeader = function () {
	const $target = $('.section-header[data-os-animation]'),
		$square = $target.find('.section-header__square'),
		$label = $target.find('.section-header__label span'),
		$heading = $target.find('h2'),
		splitHeading = splitLines($heading),
		splitLabel = splitLines($label);

	prepare();

	function prepare() {
		if (!$target.length) {
			return;
		}

		setLines([splitHeading.lines, splitLabel.lines]);

		gsap.set($square, {
			transformOrigin: 'left center',
			scaleX: 0
		});
	}

	this.animate = function () {
		if (!$target.length) {
			return;
		}

		$target.each(function () {
			const
				$el = $(this),
				tl = gsap.timeline(),
				$elSquare = $el.find($square),
				elSplitHeading = $el.find(splitHeading.lines),
				elSplitLabel = $el.find(splitLabel.lines);

			tl
				.to($elSquare, {
					scaleX: 1,
					duration: 0.6,
					ease: 'power4.out'
				})
				.add(animateLines(elSplitLabel, 1, 0.1), '<')
				.add(animateLines(elSplitHeading, 1, 0.1), '<0.2');

			createOSScene($el, tl);
		});
	}
}

/*!========================================================================
	19. Section Info
	======================================================================!*/
const SectionInfo = function () {
	const
		$target = $('.section-info[data-os-animation]'),
		$heading = $target.find('.section-info__quote h2'),
		splitHeading = splitLines($heading);

	prepare();

	function prepare() {
		if (!$target.length) {
			return;
		}

		setLines(splitHeading.lines);
	}

	this.animate = function () {
		if (!$target.length) {
			return;
		}

		$target.each(function () {
			const
				$el = $(this),
				elLines = $el.find(splitHeading.lines),
				tl = gsap.timeline();

			tl.add(animateLines(elLines, 1, 0.1));

			createOSScene($el, tl);
		});
	}
}

/*!========================================================================
	20. Section Intro
	======================================================================!*/
const SectionIntro = function () {
	const
		tl = gsap.timeline(),
		$target = $('.section-intro[data-os-animation]'),
		$heading = $target.find('h1'),
		$highlight = $heading.find('.highlight__bg'),
		splitHeading = splitLines($heading);

	prepare();

	function prepare() {
		if (!$target.length) {
			return;
		}

		setLines(splitHeading.words);

		gsap.set($target, {
			scaleY: 0,
			transformOrigin: 'bottom center'
		});

		gsap.set($highlight, {
			x: '-100%',
			y: '98%'
		})
	}

	this.animate = function () {
		if (!$target.length) {
			return;
		}

		tl
			.to($target, {
				scaleY: 1,
				duration: 1,
				ease: 'expo.inOut'
			})
			.add(animateLines(splitHeading.words), '-=0.4')
			.to($highlight, {
				x: '0%',
				duration: 0.6,
				ease: 'expo.inOut'
			}, '-=0.4')
			.to($highlight, {
				y: '0%',
				duration: 0.6,
				ease: 'expo.inOut'
			});
	}
}

/*!========================================================================
	21. Section Masthead
	======================================================================!*/
const SectionMasthead = function () {
	const
		$target = $('.section-masthead[data-os-animation]'),
		$heading = $target.find('h1'),
		$meta = $target.find('.post-meta li'),
		$headline = $target.find('.section-masthead__line'),
		splitMeta = splitLines($meta),
		splitHeading = splitLines($heading);

	prepare();

	function prepare() {
		if (!$target.length) {
			return;
		}

		setLines(splitHeading.words);
		setLines(splitMeta.lines);

		gsap.set($headline, {
			scaleY: 0,
			transformOrigin: 'top center'
		});
	}

	this.animate = function () {
		if (!$target.length) {
			return;
		}

		$target.each(function () {
			const
				$el = $(this),
				elMeta = $el.find(splitMeta.lines),
				elHeading = $el.find(splitHeading.words),
				$elHeadline = $el.find($headline),
				tl = gsap.timeline();

			tl
				.add(animateLines(elHeading))
				.add(animateLines(elMeta), '-=0.3')
				.to($elHeadline, {
					scaleY: 1,
					duration: 0.6,
					ease: 'expo.inOut',
				}, '-=0.6');

			createOSScene($el, tl);
		});
	}
}

/*!========================================================================
	22. Section Logos
	======================================================================!*/
const SectionLogos = function () {
	const $target = $('.section-logos[data-os-animation] .section-logos__wrapper-items'),
		tl = gsap.timeline(),
		$logos = $target.find('.section-logos__item');

	prepare();

	function prepare() {
		if (!$target.length) {
			return;
		}

		gsap.set($logos, {
			y: 30,
			autoAlpha: 0
		});
	}

	this.animate = function () {
		if (!$target.length) {
			return;
		}

		tl
			.to($logos, {
				duration: 1,
				autoAlpha: 1,
				y: 0,
				ease: 'power4.out'
			}, 0.1);

		createOSScene($target, tl);
	}
}

/*!========================================================================
	23. Section Steps
	======================================================================!*/
const SectionSteps = function () {
	const $target = $('.section-steps[data-os-animation] .section-steps__step'),
		$heading = $target.find('.section-steps__content h2'),
		$text = $target.find('.section-steps__content p'),
		$headline = $target.find('.section-steps__headline'),
		$number = $target.find('.section-steps__number'),
		splitDescr = splitLines($text),
		splitHeading = splitLines($heading);

	prepare();

	function prepare() {
		if (!$target.length) {
			return;
		}

		setLines(splitHeading.words);
		setLines(splitDescr.lines);

		gsap.set($headline, {
			scaleX: 0,
			transformOrigin: 'left center'
		});

		gsap.set($number, {
			autoAlpha: 0,
			y: 30
		});
	}

	this.animate = function () {
		if (!$target.length) {
			return;
		}

		$target.each(function () {
			const
				$el = $(this),
				$elNumber = $el.find($number),
				$elHeadline = $el.find($headline),
				elDescr = $el.find(splitDescr.lines),
				elHeading = $el.find(splitHeading.words),
				tl = gsap.timeline();

			tl
				.to($elNumber, {
					autoAlpha: 1,
					y: 0,
					duration: 0.6,
					ease: 'power4.out'
				})
				.add(animateLines(elHeading), '-=0.4')
				.add(animateLines(elDescr, 1, 0.1), '-=0.4')
				.to($elHeadline, {
					scale: 1,
					duration: 0.6,
					ease: 'power4.out'
				}, '-=0.8');

			createOSScene($el, tl);
		});
	}
}

/*!========================================================================
	24. Slider
	======================================================================!*/
function renderSliderCounter(sliderMain, sliderCounter, slideClass, elTotal, sliderSecondary) {
	if (!sliderMain.slides.length) {
		return;
	}

	const
		numOfSlides = sliderMain.slides.length,
		startSlides = sliderMain.params.slidesPerView;

	const counter = new Swiper(sliderCounter, {
		direction: 'vertical',
		simulateTouch: false,
	});

	for (let index = startSlides; index <= numOfSlides; index++) {
		counter.appendSlide('<div class="swiper-slide"><div class="' + slideClass + '">0' + index + '</div></div>');
	}

	$(elTotal).html('0' + numOfSlides);

	sliderMain.controller.control = counter;
	counter.controller.control = sliderMain;

	if (sliderSecondary) {
		sliderSecondary.controller.control = counter;
		counter.controller.control = sliderSecondary;
	}
}

/*!========================================================================
	25. Slider Fullscreen
	======================================================================!*/
const SliderFullscreen1 = function () {
	createSlider();

	function createSlider() {
		if (!$('.js-slider-fullscreen').length) {
			return;
		}

		const
			overlapFactor = 0.5,
			sliderImg = new Swiper('.js-slider-fullscreen__slider-img', {
				autoplay: {
					delay: 5000,
				},
				allowTouchMove: false,
				direction: 'vertical',
				speed: 1000,
				pagination: {
					el: '.js-slider-fullscreen__dots',
					type: 'bullets',
					bulletElement: 'div',
					clickable: true,
					bulletClass: 'slider__dot',
					bulletActiveClass: 'slider__dot_active'
				},
				navigation: {
					prevEl: '.js-slider-fullscreen-arrow-left',
					nextEl: '.js-slider-fullscreen-arrow-right',
				},
				mousewheel: {
					eventsTarged: '.page-wrapper',
					eventsTarget: '.page-wrapper',
					sensitivity: 1
				},
				keyboard: {
					enabled: true
				},
				watchSlidesProgress: true,
				on: {
					progress: function () {
						const swiper = this;

						for (let i = 0; i < swiper.slides.length; i++) {
							const
								slideProgress = swiper.slides[i].progress,
								innerOffset = swiper.width * overlapFactor,
								innerTranslate = slideProgress * innerOffset;

							gsap.set(swiper.slides[i].querySelector('img'), {
								y: innerTranslate,
								transition: swiper.params.speed + 'ms'
							});
						}
					},
					touchStart: function () {
						const swiper = this;

						for (let i = 0; i < swiper.slides.length; i++) {
							gsap.set(swiper.slides[i].querySelector('img'), {
								transition: ''
							});
						}
					},
				}
			});

		const sliderContent = new Swiper('.js-slider-fullscreen__slider-content', {
			speed: 1000,
			effect: 'fade',
			fadeEffect: {
				crossFade: true
			},
			allowTouchMove: false,
			breakpoints: {
				991: {
					autoHeight: true
				}
			}
		});

		renderSliderCounter(
			sliderImg,
			'.js-slider-fullscreen__counter-current',
			'',
			'.js-slider-fullscreen__counter-total',
			sliderContent
		);
	}
}

/*!========================================================================
	26. Slider Fullscreen4
	======================================================================!*/
const SliderFullscreen4 = function () {
	createSlider();

	function createSlider() {
		if (!$('.js-slider-fullscreen4').length) {
			return;
		}

		const slider = new Swiper('.js-slider-fullscreen4', {
			slidesPerView: 4,
			speed: 1000,
			autoplay: {
				delay: 5000
			},
			pagination: {
				el: '.js-slider-fullscreen4-progress',
				type: 'progressbar',
				progressbarFillClass: 'slider__progressbar-fill',
				renderProgressbar: function (progressbarFillClass) {
					return '<div class="slider__progressbar"><div class="' + progressbarFillClass + '"></div></div>'
				}
			},
			navigation: {
				prevEl: '.js-slider-fullscreen4-arrow-left',
				nextEl: '.js-slider-fullscreen4-arrow-right',
			},
			mousewheel: {
				eventsTarged: '.page-wrapper',
				eventsTarget: '.page-wrapper',
				sensitivity: 1
			},
			keyboard: {
				enabled: true
			},
			breakpoints: {
				1400: {
					slidesPerView: 4
				},
				991: {
					slidesPerView: 3
				},
				576: {
					slidesPerView: 2
				},
				0: {
					slidesPerView: 1
				}
			}
		});

		renderSliderCounter(
			slider,
			'.js-slider-fullscreen4-counter-current',
			'',
			'.js-slider-fullscreen4-counter-total'
		);
	}
}

/*!========================================================================
	27. Slider Services
	======================================================================!*/
const SliderServices = function () {
	const
		tl = gsap.timeline(),
		$target = $('.slider-services[data-os-animation]'),
		$headline = $target.find('.figure-service__headline'),
		$heading = $target.find('.figure-service__header h3'),
		$counters = $target.find('.figure-service__number'),
		$icons = $target.find('.figure-service__icon'),
		splitHeading = splitLines($heading);

	prepare();
	createSlider();

	function prepare() {
		if (!$target.length) {
			return;
		}

		setLines(splitHeading.words);

		gsap.set($headline, {
			scaleX: 0,
			transformOrigin: 'center center',
		});

		gsap.set($counters, {
			y: 30,
			autoAlpha: 0
		});

		gsap.set($icons, {
			y: 30,
			autoAlpha: 0
		});
	}

	this.animate = function () {
		if (!$target.length) {
			return;
		}

		tl
			.to($headline, {
				scaleX: 1,
				duration: 0.6,
				stagger: 0.05,
				ease: 'expo.inOut'
			})
			.add(animateLines(splitHeading.words), '-=0.6')
			.to($counters, {
				y: 0,
				duration: 0.6,
				stagger: 0.1,
				autoAlpha: 1
			}, '-=0.6')
			.to($icons, {
				y: 0,
				duration: 0.6,
				stagger: 0.1,
				autoAlpha: 1
			}, '-=0.6');

		createOSScene($target, tl);
	}

	function createSlider() {
		if (!$('.js-slider-services').length) {
			return;
		}

		const slider = new Swiper('.js-slider-services', {
			slidesPerView: 4,
			speed: 800,
			autoplay: {
				delay: 5000
			},
			pagination: {
				el: '.js-slider-services-progress',
				type: 'progressbar',
				progressbarFillClass: 'slider__progressbar-fill',
				renderProgressbar: function (progressbarFillClass) {
					return '<div class="slider__progressbar"><div class="' + progressbarFillClass + '"></div></div>'
				}
			},
			navigation: {
				prevEl: '.js-slider-services__arrow-left',
				nextEl: '.js-slider-services__arrow-right',
			},
			breakpoints: {
				1400: {
					slidesPerView: 4
				},
				991: {
					slidesPerView: 3
				},
				576: {
					slidesPerView: 2
				},
				0: {
					slidesPerView: 1
				}
			}
		});

		renderSliderCounter(
			slider,
			'.js-slider-services-counter-current',
			'',
			'.js-slider-services-counter-total'
		);
	}
}

/*!========================================================================
	28. Slider Portfolio Item
	======================================================================!*/
const SliderPortfolioItem = function () {
	if (!$('.js-slider-portfolio-item').length) {
		return;
	}

	const slider = new Swiper('.js-slider-portfolio-item', {
		autoplay: {
			delay: 6000
		},
		autoHeight: true,
		speed: 800,
		pagination: {
			el: '.js-slider-portfolio-item-progress',
			type: 'progressbar',
			progressbarFillClass: 'slider__progressbar-fill',
			renderProgressbar: function (progressbarFillClass) {
				return '<div class="slider__progressbar"><div class="' + progressbarFillClass + '"></div></div>'
			}
		},
		navigation: {
			prevEl: '.js-slider-portfolio-item__arrow-left',
			nextEl: '.js-slider-portfolio-item__arrow-right',
		},
	});

	renderSliderCounter(
		slider,
		'.js-slider-portfolio-item-counter-current',
		'',
		'.js-slider-portfolio-item-counter-total'
	);
}

/*!========================================================================
	29. Split Text
	======================================================================!*/
function splitLines($el) {
	if (!($el).length) {
		return false;
	}

	return new SplitText($el, {
		type: 'words, lines',
		linesClass: 'split-line',
		wordsClass: 'split-word'
	});
};


function setLines(el) {
	if (!$(el).length) {
		return false;
	}

	return gsap.set(el, {
		y: '150%',
		autoAlpha: 0
	});
}

function animateLines(el, customDuration, customStagger) {
	if (!$(el).length) {
		return false;
	}

	const
		duration = customDuration ? customDuration : 0.6,
		stagger = customStagger ? customStagger : 0.03;

	return gsap.to(el, {
		y: '0%',
		duration,
		stagger,
		autoAlpha: 1,
		ease: 'power4.out'
	});
}

function hideLines(el, customDuration, customStagger) {
	if (!$(el).length) {
		return false;
	}

	const
		duration = customDuration ? customDuration : 0.6,
		stagger = customStagger ? customStagger : 0.03;

	return gsap.to(el, {
		y: '150%',
		duration,
		stagger,
		autoAlpha: 0,
		ease: 'power4.in'
	});
}

/*!========================================================================
	30. Slider Testimonials
	======================================================================!*/
const SliderTestimonials = function () {
	const
		tl = gsap.timeline(),
		$target = $('.slider-testimonials[data-os-animation]'),
		$text = $target.find('.slider-testimonials__text'),
		splitTestimonial = splitLines($text);

	prepare();
	createSlider();

	function prepare() {
		if (!$target.length) {
			return;
		}

		setLines(splitTestimonial.lines);
	}

	this.animate = function () {
		if (!$target.length) {
			return;
		}

		tl.add(animateLines(splitTestimonial.lines, 1, 0.1));

		createOSScene($target, tl);
	}

	function createSlider() {
		if (!$('.js-slider-testimonials').length) {
			return;
		}

		const slider = new Swiper('.js-slider-testimonials', {
			autoHeight: true,
			speed: 800,
			autoplay: {
				delay: 5000
			},
			navigation: {
				prevEl: '.js-slider-testimonials__arrow-prev',
				nextEl: '.js-slider-testimonials__arrow-next'
			},
			pagination: {
				el: '.js-slider-testimonials__dots',
				type: 'bullets',
				bulletElement: 'div',
				clickable: true,
				bulletClass: 'slider__dot',
				bulletActiveClass: 'slider__dot_active'
			},
		});

		renderSliderCounter(
			slider,
			'.js-slider-testimonials-counter-current',
			'slider-testimonials__counter-current',
			'.js-slider-testimonials-counter-total'
		);
	}
}

/*!========================================================================
	31. Social
	======================================================================!*/
const Social = function () {
	const $elements = $('.social__item a');

	if (!$elements.length) {
		return;
	}

	const circle = new Circle();

	$elements.each(function () {
		circle.animate($(this));
	});
}


})(jQuery);
