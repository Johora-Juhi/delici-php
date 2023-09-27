// Info Sidebar Toggle
if (document.querySelectorAll('.main-header .info-toggler .info-bar-opener').length) {
	// Show Form
	document.querySelectorAll('.main-header .info-toggler .info-bar-opener').forEach(function(button) {
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
	// 	if($('.main-header').length){
	// 		var windowpos = $(window).scrollTop();
	// 		var siteHeader = $('.main-header');
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