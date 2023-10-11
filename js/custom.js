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
  
function headerStyle() {
    var siteHeader = document.querySelector('.header-container');
    var scrollLink = document.querySelector('.scroll-to-top');
  
    if (siteHeader) {
      window.addEventListener('scroll', function() {
        var windowpos = window.pageYOffset;
  
        if (windowpos >= 1) {
          siteHeader.classList.add('fixed-header');
          if (scrollLink) {
            scrollLink.style.display = 'block';
          }
        } else {
          siteHeader.classList.remove('fixed-header');
          if (scrollLink) {
            scrollLink.style.display = 'none';
          }
        }
      });
    }
  }
  
  headerStyle();
  
  
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
	// headerStyle();// modal js 
const modalTriggers = document.querySelectorAll('.popup-trigger')
const modalCloseTrigger = document.querySelector('.popup-modal__close')

modalTriggers.forEach(trigger => {
  trigger.addEventListener('click', () => {
    const { popupTrigger } = trigger.dataset
    console.log(popupTrigger);
    const popupModal = document.querySelector(`[data-popup-modal="${popupTrigger}"]`)

    popupModal.classList.add('is--visible')

    const file = document.getElementById(`file${popupTrigger}`);
    console.log(file);
    const fileLabel = document.getElementById(`fileLabel${popupTrigger}`);
    console.log(fileLabel);
    file.addEventListener('change', () => {
      if (file.files.length > 0) {
        const fileName = file.files[0].name;
        fileLabel.textContent = fileName; // Try using textContent
      } else {
        fileLabel.textContent = 'Select Image';
      }
    });
    popupModal.querySelector('.popup-modal__close').addEventListener('click', () => {
      popupModal.classList.remove('is--visible')
    })

    // hides the modal when the user clicks outside the modal
    window.addEventListener('click', function (event) {
      // check if the event happened on the modal-background
      if (event.target === popupModal) {
        // hides the modal
        popupModal.classList.remove('is--visible')

      }
    });
  })
})

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
  
function headerStyle() {
    var siteHeader = document.querySelector('.header-container');
    var scrollLink = document.querySelector('.scroll-to-top');
  
    if (siteHeader) {
      window.addEventListener('scroll', function() {
        var windowpos = window.pageYOffset;
  
        if (windowpos >= 1) {
          siteHeader.classList.add('fixed-header');
          if (scrollLink) {
            scrollLink.style.display = 'block';
          }
        } else {
          siteHeader.classList.remove('fixed-header');
          if (scrollLink) {
            scrollLink.style.display = 'none';
          }
        }
      });
    }
  }
  
  headerStyle();
  
  
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
// add menu image inpute 
const file = document.getElementById('file');
const fileLabel = document.getElementById('fileLabel');


file.addEventListener('change', () => {
  if (file.files.length > 0) {
    fileLabel.innerHTML = file.files[0].name;
  } else {
    fileLabel.innerHTML = 'Select Image';
  }
});

//Fact Counter + Text Count
	if($('.count-box').length){
		$('.count-box').appear(function(){

			var $t = $(this),
				n = $t.find(".count-text").attr("data-stop"),
				r = parseInt($t.find(".count-text").attr("data-speed"), 10);

			if (!$t.hasClass("counted")) {
				$t.addClass("counted");
				$({
					countNum: $t.find(".count-text").text()
				}).animate({
					countNum: n
				}, {
					duration: r,
					easing: "linear",
					step: function() {
						$t.find(".count-text").text(Math.floor(this.countNum));
					},
					complete: function() {
						$t.find(".count-text").text(this.countNum);
					}
				});
			}

		},{accY: 0});
	}