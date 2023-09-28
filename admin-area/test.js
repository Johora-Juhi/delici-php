// Hide Header on Scroll Down
if (document.querySelectorAll('.header-container').length) {
	// Hide Header on Scroll Down
	var didScroll = false;
	var lastScrollTop = 0;
	var delta = 5;
	var navbar = document.querySelector('.header-container');
	var navbarHeight = navbar.offsetHeight;
  
	window.addEventListener('scroll', function(event) {
	  didScroll = true;
	});
  
	setInterval(function() {
	  if (didScroll) {
		hasScrolled();
		didScroll = false;
	  }
	}, 250);
  
	function hasScrolled() {
	  var st = window.scrollY;
  
	  // Make sure they scroll more than delta
	  if (Math.abs(lastScrollTop - st) <= delta) return;
  
	  // If they scrolled down and are past the navbar, add class .nav-up.
	  // This is necessary so you never see what is "behind" the navbar.
	  if (st > lastScrollTop && st > navbarHeight) {
		// Scroll Down
		navbar.classList.remove('header-down');
		navbar.classList.add('header-up');
	  } else {
		// Scroll Up
		if (st + window.innerHeight < document.body.offsetHeight) {
		  navbar.classList.remove('header-up');
		  navbar.classList.add('header-down');
		}
	  }
  
	  lastScrollTop = st;
	}
  }
  
// Info Sidebar Toggle
if (document.querySelectorAll('.header-container .info-toggler .info-bar-opener').length) {
	// Show Form
	document.querySelectorAll('.header-container .info-toggler .info-bar-opener').forEach(function(button) {
	  button.addEventListener('click', function(e) {
		e.preventDefault();
		document.body.classList.add('side-content-visible');
	  });
	});
  
	// Hide Form
	const closeElements = document.querySelectorAll('.info-bar .cross-icon, .info-back-drop, .close-menu');
	closeElements.forEach(function(element) {
	  element.addEventListener('click', function(e) {
		e.preventDefault();
		document.body.classList.remove('side-content-visible');
	  });
	});
  
	document.addEventListener('keydown', function(e) {
	  if (e.keyCode === 27) {
		document.body.classList.remove('side-content-visible');
	  }
	});
  }
  
//Update Header Style and Scroll to Top
	// function headerStyle() {
	// 	if($('.header-container').length){
	// 		var windowpos = $(window).scrollTop();
	// 		var siteHeader = $('.header-container');
	// 		var scrollLink = $('.scroll-to-top');
	// 		if (windowpos >= 1) {
	// 			siteHeader.addClass('fixed-header');
	// 			scrollLink.fadeIn(300);
	// 		} else {
	// 			siteHeader.removeClass('fixed-header');
	// 			scrollLink.fadeOut(300);
	// 		}
	// 	}
	// }
	// headerStyle();