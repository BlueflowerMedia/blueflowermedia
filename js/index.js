// team page image slider


function play() {
  $("body").innerHTML = "asfddsafs";
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
play();

// team members hover effect

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

// scrollReveal
window.sr = ScrollReveal({
  reset: false,
  origin: 'top',
  distance: '10%',
  opacity: 0,
  scale: 1,
  delay: 100,
  easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)',
  duration: 1000,
})

sr.reveal('.sr');