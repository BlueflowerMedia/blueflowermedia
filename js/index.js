var path = window.location.pathname;
var page = path.split("/")
var pageName = page[page.length - 2];

// contact js
// var formSwitch = function(addForm, removeForm) {
//   alert("ajsdf");
//
//   var formBtn1 = $("#form-btn1");
//   var formBtn2 = $("#form-btn2");
//
//   formBtn1.onClick(function() {
//     alert("ajsdf");
//     $("#form1").addClass("active");
//     $("#form2").removeClass("active");
//   });
//
//   formBtn2.onClick(function() {
//     $("#form2").addClass("active");
//     $("#form1").removeClass("active");
//   });
// }
//
function formSwitch(addForm, removeForm) {
  $(this).toggle("active");
  $(addForm).addClass("active");
  $(removeForm).removeClass("active");
}

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
  }, 500);
}

// team members hover effect

function teamHover() {
  var pic2 = document.getElementById('pic2');
  var pic3 = document.getElementById('pic3');

  pic2.onmouseout = function() {
    this.src = "https://s3-us-west-2.amazonaws.com/s.cdpn.io/3393/mrch8596.jpg";
    pic3.src = "https://s3-us-west-2.amazonaws.com/s.cdpn.io/3393/robert-finkel_2.jpg";
  }
  pic2.onmouseover = function() {
    this.src = "https://media3.giphy.com/avatars/100soft/WahNEDdlGjRZ.gif";
    pic3.src = "https://media3.giphy.com/avatars/100soft/WahNEDdlGjRZ.gif";
  }
}


// // scrollReveal
// window.sr = ScrollReveal({
//   reset: false,
//   origin: 'top',
//   distance: '10%',
//   opacity: 0,
//   scale: 1,
//   delay: 200,
//   easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)',
//   duration: 1000,
// })
//
// sr.reveal($('.sr'));
// sr.reveal($('h1'));
// sr.reveal($('p'));
//
// // section-testomonials
// $(".owl-carousel").owlCarousel({
//   items: 3,
//   loop: true,
//   margin: 10,
//   autoplay: true,
//   autoplayTimeout: 2000,
//   autoplayHoverPause: true,
// });
//
// // navbar
// var navbar = function() {
//   var navbar = $("#site-navigation");
//   var scroll = $(window).scrollTop();
//   if (scroll > 0) {
//     navbar.addClass("scroll-color");
//   } else {
//     navbar.removeClass("scroll-color");
//   }
//   $(window).scroll(function() {
//     var scroll = $(window).scrollTop();
//     if (scroll > 0) {
//       navbar.addClass("scroll-color");
//     } else {
//       navbar.removeClass("scroll-color");
//     }
//   });
// };
//
//

// Particle JS in header in homepage
function runParticles() {
  particlesJS("particles", {
    "particles": {
      "number": {
        "value": 200,
        "density": {
          "enable": true,
          "value_area": 800
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

if (pageName == "blueflowedmedia") {
  runParticles();
} else if (pageName == "team") {
  teamImagePlayer();
  teamHover();
} else if (pageName == "contact") {
  formSwitch();
}

// google maps
var geo_latitude = 43.69245;
var geo_longitude = -79.28289;
google.maps.event.addDomListener(window, 'load', init);

function init() {
  var mapOptions = {
    zoom: 16,
    center: new google.maps.LatLng(geo_latitude, geo_longitude),
    styles: [{
      "featureType": "water",
      "stylers": [{
        "saturation": 43
      }, {
        "lightness": -11
      }, {
        "hue": "#0088ff"
      }]
    }, {
      "featureType": "road",
      "elementType": "geometry.fill",
      "stylers": [{
        "hue": "#ff0000"
      }, {
        "saturation": -100
      }, {
        "lightness": 99
      }]
    }, {
      "featureType": "road",
      "elementType": "geometry.stroke",
      "stylers": [{
        "color": "#808080"
      }, {
        "lightness": 54
      }]
    }, {
      "featureType": "landscape.man_made",
      "elementType": "geometry.fill",
      "stylers": [{
        "color": "#ece2d9"
      }]
    }, {
      "featureType": "poi.park",
      "elementType": "geometry.fill",
      "stylers": [{
        "color": "#ccdca1"
      }]
    }, {
      "featureType": "road",
      "elementType": "labels.text.fill",
      "stylers": [{
        "color": "#767676"
      }]
    }, {
      "featureType": "road",
      "elementType": "labels.text.stroke",
      "stylers": [{
        "color": "#ffffff"
      }]
    }, {
      "featureType": "poi",
      "stylers": [{
        "visibility": "off"
      }]
    }, {
      "featureType": "landscape.natural",
      "elementType": "geometry.fill",
      "stylers": [{
        "visibility": "on"
      }, {
        "color": "#b8cb93"
      }]
    }, {
      "featureType": "poi.park",
      "stylers": [{
        "visibility": "on"
      }]
    }, {
      "featureType": "poi.sports_complex",
      "stylers": [{
        "visibility": "on"
      }]
    }, {
      "featureType": "poi.medical",
      "stylers": [{
        "visibility": "on"
      }]
    }, {
      "featureType": "poi.business",
      "stylers": [{
        "visibility": "off"
      }]
    }]
  };
  var mapElement = document.getElementById('map');
  var map = new google.maps.Map(mapElement, mapOptions);
  var markerIcon = 'https://upload.wikimedia.org/wikipedia/commons/e/ed/Map_pin_icon.svg';
  var marker = new google.maps.Marker({
    position: new google.maps.LatLng(43.69245, -79.28289),
    map: map,
    icon: markerIcon,
    title: 'BlueFlower Media!'
  });

}