var path = window.location.pathname;
var page = path.split("/")
var pageName = page[page.length - 2];
// device detection
var isMobile = false;
if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) ||
	/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) {
	isMobile = true;
}

function runRellax() {
	var rellax = new Rellax('.fbox');
}


// navbar
function navbar() {
	var navbar = $("#site-navigation");
	var scroll = $(window).scrollTop();
	if (scroll > 0) {
		navbar.addClass("scroll-color");
	} else {
		navbar.removeClass("scroll-color");
	}
	$(window).scroll(function() {
		var scroll = $(window).scrollTop();
		if (scroll > 0) {
			navbar.addClass("scroll-color");
		} else {
			navbar.removeClass("scroll-color");
		}
	});
};


// navbar mobile
function navbarMobile() {
	$("#hamburger-bfm").click(function() {
		$(this).toggleClass("is-active");
		$("#nav-mobile").toggleClass("open");
	});
};

// scrollReveal
window.sr = ScrollReveal({
	reset: false,
	origin: 'top',
	distance: '10%',
	opacity: 0,
	scale: 1,
	delay: 200,
	easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)',
	duration: 1000,
})

window.ss = ScrollReveal({
	reset: false,
	origin: 'top',
	distance: '10%',
	opacity: 0,
	scale: 1,
	delay: 400,
	easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)',
	duration: 1000,
})


// client logo slider
function runCarouselClientLogo() {
	$(".client-logo-slider").owlCarousel({
		loop: true,
		margin: 100,
		autoplay: true,
		autoplayTimeout: 2000,
		autoplayHoverPause: true,
		nav: false,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1,
			},
			760: {
				items: 1,
			},
			1024: {
				items: 1,
			}
		}
	})

}
// portfolio slider
function runCarouselPortfolio() {
	$(".portfolio-slider").owlCarousel({
		items: 1,
		loop: true,
		autoplay: true,
		autoplayTimeout: 4000,
		autoplayHoverPause: true,
		animateIn: 'fadeIn',
		animateOut: 'fadeOut',
	});
}


// // contact js
// function formSwitch() {
// 	var formBtn1 = $("#form-btn1");
// 	var formBtn2 = $("#form-btn2");
//
// 	formBtn1.click(function() {
// 		$("#form1").addClass("active");
// 		$("#form2").removeClass("active");
// 		$(this).removeClass("form2");
// 	});
//
// 	formBtn2.click(function() {
// 		$("#form2").addClass("active");
// 		$("#form1").removeClass("active");
// 		formBtn1.addClass("form2");
// 	});
// }
//


// team page image slider
function teamImagePlayer() {
	setInterval(function() {
		var next = $(".slide .active").removeClass("active").next(".image");
		if (!next.length) {
			next = $(".slide .image:first");
		}
		var rangeTop = (Math.floor(Math.random() * 15) + 0).toString() + "%";
		var rangeLeft = (Math.floor(Math.random() * 10) + 10).toString() + "%";
		next.css("top", rangeTop);
		next.css("left", rangeLeft);

		next.addClass("active");
	}, 900);
}

// team members hover effect

// function teamHover() {
//   var pic2 = document.getElementById('pic2');
//   var pic3 = document.getElementById('pic3');
//
//   pic2.onmouseout = function() {
//     this.src = "https://s3-us-west-2.amazonaws.com/s.cdpn.io/3393/mrch8596.jpg";
//     pic3.src = "https://s3-us-west-2.amazonaws.com/s.cdpn.io/3393/robert-finkel_2.jpg";
//   }
//   pic2.onmouseover = function() {
//     this.src = "https://media3.giphy.com/avatars/100soft/WahNEDdlGjRZ.gif";
//     pic3.src = "https://media3.giphy.com/avatars/100soft/WahNEDdlGjRZ.gif";
//   }
// }



// Particle JS in header in homepage
function runParticles() {
	particlesJS("particles", {
		"particles": {
			"number": {
				"value": 150,
				"density": {
					"enable": true,
					"value_area": 1000
				}
			},
			"color": {
				"value": "#1d72f7"
			},
			"shape": {
				"type": "circle",
				"stroke": {
					"width": 0,
					"color": "#000000"
				},
				"polygon": {
					"nb_sides": 5
				},
				"image": {
					"src": "img/github.svg",
					"width": 100,
					"height": 100
				}
			},
			"opacity": {
				"value": 0.21646062821684559,
				"random": true,
				"anim": {
					"enable": true,
					"speed": 6.4154099771806266,
					"opacity_min": 1,
					"sync": true
				}
			},
			"size": {
				"value": 3,
				"random": true,
				"anim": {
					"enable": false,
					"speed": 40,
					"size_min": 0.1,
					"sync": false
				}
			},
			"line_linked": {
				"enable": true,
				"distance": 112.2388442605866,
				"color": "#1d72f7",
				"opacity": 0.6173136434332263,
				"width": 1
			},
			"move": {
				"enable": true,
				"speed": 1,
				"direction": "none",
				"random": false,
				"straight": false,
				"out_mode": "out",
				"bounce": false,
				"attract": {
					"enable": false,
					"rotateX": 600,
					"rotateY": 1200
				}
			}
		},
		"interactivity": {
			"detect_on": "canvas",
			"events": {
				"onhover": {
					"enable": false,
					"mode": "repulse"
				},
				"onclick": {
					"enable": false,
					"mode": "push"
				},
				"resize": true
			},
			"modes": {
				"grab": {
					"distance": 400,
					"line_linked": {
						"opacity": 1
					}
				},
				"bubble": {
					"distance": 400,
					"size": 40,
					"duration": 2,
					"opacity": 8,
					"speed": 3
				},
				"repulse": {
					"distance": 200,
					"duration": 0.4
				},
				"push": {
					"particles_nb": 4
				},
				"remove": {
					"particles_nb": 2
				}
			}
		},
		"retina_detect": true
	});
}

function postHeight() {
	if (isMobile == true) {
		$(".post").height($(".post-info").outerHeight() + 220);
	} else {
		$(".post").height($(".post-info").outerHeight() + 420);
	}
}

function progressVerticalLine() {
	// Getting vertical line and values
	var lineElement = $(".vertical-line");
	var verticalTop = lineElement.offset().top;
	var verticalLineHeight = parseInt($(".vertical-line").css("height"), 10);

	// Getting progress line and values
	var progressLineElement = $(".progress-vertical-line");

	// at what point in the scroll does the animation start = 3/5
	var screenBuffer = $(window).height() / 5 * 3;

	// Getting the circles
	var circle1 = $("#circle1");
	var circle2 = $("#circle2");
	var circle3 = $("#circle3");

	$(window).scroll(function(){

		var scrollHeight = $(window).scrollTop();
		var progressHeight = scrollHeight - verticalTop + screenBuffer;

		if (progressHeight < 0 ) {
			progressLineElement.css("height", 0);
		}
		else if ((progressHeight > 0) && (progressHeight < verticalLineHeight)) {
			progressLineElement.css("height", progressHeight);
		}
		else if (progressHeight > verticalLineHeight) {
			progressLineElement.css("height", verticalLineHeight);
		}

		if (progressHeight < 0) {
			circle1.removeClass("full-circle");
		}
		if (progressHeight > 0) {
			circle1.addClass("full-circle");
		}
		if (progressHeight < verticalLineHeight/2) {
			circle2.removeClass("full-circle");
		}
		if (progressHeight > verticalLineHeight/2) {
			circle2.addClass("full-circle");
		}
		if (progressHeight < verticalLineHeight) {
			circle3.removeClass("full-circle");
		}
		if (progressHeight > verticalLineHeight) {
			circle3.addClass("full-circle");
		}
	})
}

// global functions
navbar();
navbarMobile();
if (isMobile == false) {
	sr.reveal($('.sr'));

}
if (isMobile == false) {
	ss.reveal($('.ss'));

}
sr.reveal($('h1'));
ss.reveal($('.ss'));

// Page specific functions
if (pageName == "blueflowermedia") {
	progressVerticalLine();
	// runParticles();
	// runCarouselClientLogo();
	runRellax();
} else if (pageName == "team") {
	teamImagePlayer();
} else if (pageName == "Contact") {
	formSwitch();
} else if (pageName == "blog") {
	postHeight();
} else if (pageName == "portfolio") {
	runCarouselPortfolio();
}



// section new process cssanimations

jQuery(document).ready(function($){
	var $timeline_block = $('.cd-timeline-block');

	//hide timeline blocks which are outside the viewport
	$timeline_block.each(function(){
		if($(this).offset().top > $(window).scrollTop()+$(window).height()*0.75) {
			$(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
		}
	});

	//on scolling, show/animate timeline blocks when enter the viewport
	$(window).on('scroll', function(){
		$timeline_block.each(function(){
			if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
				$(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
			}
		});
	});
});
