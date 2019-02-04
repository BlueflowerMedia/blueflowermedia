jQuery( document ).ready(function() {
    lottie.loadAnimation({
	  container: document.getElementById('lottie-id'), // the dom element that will contain the animation
	  renderer: 'svg',
	  loop: true,
	  autoplay: true,
	  path: Lottie_local.js_direction // the path to the animation json
	});
});
