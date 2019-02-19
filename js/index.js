jQuery(function($){







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
function testimonialSlider() {
	$(".testimonial-slider").owlCarousel({
		loop: true,
		autoplay: true,
		autoplayTimeout: 3500,
		smartSpeed: 500,
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

		// line animations
		if (progressHeight < 0 ) {
			progressLineElement.css("height", 0);
		}
		else if ((progressHeight > 0) && (progressHeight < verticalLineHeight)) {
			progressLineElement.css("height", progressHeight);
		}
		else if (progressHeight > verticalLineHeight) {
			progressLineElement.css("height", verticalLineHeight);
		}

		// circle animations
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

		// animating icons
		if (progressHeight < 0 ){
			$("#process-pic-1").removeClass("bigger");
		}
		else if (progressHeight > 0 && progressHeight < verticalLineHeight*0.35){
			$("#process-pic-1").addClass("bigger");
			$("#process-pic-2").removeClass("bigger");
		}
		else if (progressHeight > verticalLineHeight*0.35 && progressHeight < verticalLineHeight*0.80){
			$("#process-pic-1").removeClass("bigger");
			$("#process-pic-2").addClass("bigger");
			$("#process-pic-3").removeClass("bigger");
		}
		else if (progressHeight > verticalLineHeight*0.80 && progressHeight < verticalLineHeight){
			$("#process-pic-2").removeClass("bigger");
			$("#process-pic-3").addClass("bigger");
		}
		else if (progressHeight > verticalLineHeight*1.4){
			$("#process-pic-3").removeClass("bigger");
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
if (pageName == "blueflowermedia" || pageName == "scarborough"|| pageName == "") {
	progressVerticalLine();
	testimonialSlider();
	// runParticles();
	// runCarouselClientLogo();
	// runRellax();

} else if (pageName == "team") {
	teamImagePlayer();
} else if (pageName == "Contact") {
	formSwitch();
} else if (pageName == "blog") {
	postHeight();
} else if (pageName == "portfolio") {
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


// javascript code for the home page banner scetion writing /erasing

function write (obj, sentence, i, cb) {
  if (i != sentence.length) {
    setTimeout(function () {
      i++
      console.log('in timeout', i)
      obj.innerHTML = sentence.substr(0, i+1) +' <em aria-hidden="true"></em>';
      write(obj, sentence, i, cb)
    }, 50)
  } else {
    console.log(i)
    cb()
  }
}
 function erase (obj, cb,i) {
 var sentence = obj.innerText
    if (sentence.length != 0) {
     setTimeout(function () {
     sentence = sentence.substr(0,sentence.length-1)
     console.log('in timeout', i)
     obj.innerText = sentence
     erase(obj, cb)
      }, 18/(i*(i/10000000)))
      } else {
      obj.innerText = " "
      cb()
   }
  }
  var typeline = document.querySelector("#typeline")

   function writeerase(obj, sentence, time, cb) {
    write(obj, sentence, 0, function () {
     setTimeout(function () {
     erase(obj, cb) }, time) })
     }

var sentences = [
  "digital growth ",
  "beautiful branding ",
  "results-oriented web design ",
  "focused digital marketing  "
]

var counter = 0
function loop () {
  var sentence = sentences[counter % sentences.length]
  writeerase(typeline, sentence, 1500, loop)
  counter++
}

loop()


// accordion in the digital packages section

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}


// slideshow in our -work section india journal

var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2100); // Change image every 2 seconds
}

// slideshow for reginos pizza

var myIndex1 = 0;
carousel1();
function carousel1(){
	var j;
	var y = document.getElementsByClassName("mySlides1");
	for (j = 0; j < y.length; j++) {
		 y[j].style.display = "none";
	}
	myIndex1++;
	if (myIndex1 > y.length) {myIndex1 = 1}
	y[myIndex1-1].style.display = "block";
	setTimeout(carousel1, 2000); // Change image every 2 seconds
}

// slideshow for Luxmark
var myIndex2 = 0;
carousel2();

function carousel2() {
    var k;
    var z = document.getElementsByClassName("mySlides2");
    for (k = 0; k < z.length; k++) {
       z[k].style.display = "none";
    }
    myIndex2++;
    if (myIndex2 > z.length) {myIndex2 = 1}
    z[myIndex2-1].style.display = "block";
    setTimeout(carousel2, 2200); // Change image every 2 seconds
}


// slideshow for Tdot canna
var myIndex3 = 0;
carousel3();

function carousel3() {
    var i1;
    var x1 = document.getElementsByClassName("mySlides3");
    for (i1 = 0; i1 < x1.length; i1++) {
       x1[i1].style.display = "none";
    }
    myIndex3++;
    if (myIndex3 > x1.length) {myIndex3 = 1}
    x1[myIndex3-1].style.display = "block";
    setTimeout(carousel3, 1900); // Change image every 2 seconds
}

// slideshow for playcation
var myIndex4 = 0;
carousel4();

function carousel4() {
    var i2;
    var x2 = document.getElementsByClassName("mySlides4");
    for (i2 = 0; i2 < x2.length; i2++) {
       x2[i2].style.display = "none";
    }
    myIndex4++;
    if (myIndex4 > x2.length) {myIndex4 = 1}
    x2[myIndex4-1].style.display = "block";
    setTimeout(carousel4, 1950); // Change image every 2 seconds
}


// slideshow for tech beluga
var myIndex5 = 0;
carousel5();

function carousel5() {
    var i3;
    var x3 = document.getElementsByClassName("mySlides5");
    for (i3 = 0; i3 < x3.length; i3++) {
       x3[i3].style.display = "none";
    }
    myIndex5++;
    if (myIndex5 > x3.length) {myIndex5 = 1}
    x3[myIndex5-1].style.display = "block";
    setTimeout(carousel5, 2000); // Change image every 2 seconds
}

//slideshow for oak park deli
var myIndex6 = 0;
carousel6();

function carousel6() {
    var i6;
    var x6 = document.getElementsByClassName("mySlides6");
    for (i6 = 0; i6 < x6.length; i6++) {
       x6[i6].style.display = "none";
    }
    myIndex6++;
    if (myIndex6 > x6.length) {myIndex6 = 1}
    x6[myIndex6-1].style.display = "block";
    setTimeout(carousel6, 1350); // Change image every 2 seconds
}


// slideshow for florishing Sprouts
var myIndex7 = 0;
carousel7();

function carousel7() {
    var i7;
    var x7 = document.getElementsByClassName("mySlides7");
    for (i7 = 0; i7 < x7.length; i7++) {
       x7[i7].style.display = "none";
    }
    myIndex7++;
    if (myIndex7 > x7.length) {myIndex7 = 1}
    x7[myIndex7-1].style.display = "block";
    setTimeout(carousel7, 1500); // Change image every 2 seconds
}
// slideshow for supercleaners
var myIndex8 = 0;
carousel8();

function carousel8() {
    var i8;
    var x8 = document.getElementsByClassName("mySlides8");
    for (i8 = 0; i8 < x8.length; i8++) {
       x8[i8].style.display = "none";
    }
    myIndex8++;
    if (myIndex8 > x8.length) {myIndex8 = 1}
    x8[myIndex8-1].style.display = "block";
    setTimeout(carousel8, 1400); // Change image every 2 seconds
}


})(jQuery);
