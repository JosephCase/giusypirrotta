document.addEventListener("DOMContentLoaded", function(event) {

	var videoElements = document.getElementsByTagName('video');
	var videoObjects = []
	console.log(videoElements.length);
	for (i = 0; i < videoElements.length; i++) {
		videoObjects[i] = new Video(videoElements[i]);
	}

});

function Video(video) {

	var me = this;
	if (isPortrait()) {
		video.className = video.className += 'portrait';
	}

	// video.addEventListener("click", function() {
	// 	this.play();
	// });

	// video.addEventListener("click", clickHandler);

	function isPortrait() {
		return (window.innerWidth / window.innerHeight < 4/3 ? true : false);
	}

	function clickHandler() {
		console.log("clickHandler")
		if (isFullScreen()) {
			minimize();
		} else {
			playVideo();
		}
	}

	function playVideo() {

		console.log('playVideo');
		console.log(video);

		// video.removeEventListener('click', playVideo);

		if (video.requestFullscreen) {
			console.log('normal');
			video.requestFullscreen();
			
		} else if (video.msRequestFullscreen) {
			console.log('ms');
			video.setAttribute('controls', 'true');
			video.msRequestFullscreen();
			
		} else if (video.mozRequestFullScreen) {
			console.log('moz');
			video.setAttribute('controls', 'true');
			video.mozRequestFullScreen();
			
		} else if (video.webkitRequestFullScreen) {
			console.log('webkit');
			video.setAttribute('controls', 'true');
			video.webkitRequestFullScreen();
			
		} else {
			console.log('none worked');
		}
		// video.play();

		document.addEventListener("MSFullscreenChange", fullScreenChangeHandler, false);
		document.addEventListener("webkitfullscreenchange", fullScreenChangeHandler, false);
		document.addEventListener("mozfullscreenchange", fullScreenChangeHandler, false);   
	};

	function minimize() {
		console.log('MINIZE');

		if (document.exitFullscreen) {
			console.log('normal');
			document.exitFullscreen();
			
		} else if (document.msExitFullscreen) {
			console.log('ms');
			document.msExitFullscreen();
			
		} else if (document.mozCancelFullScreen) {
			console.log('moz');
			document.mozCancelFullScreen();
			
		} else if (video.webkitExitFullScreen) {
			console.log('webkit');
			video.webkitExitFullScreen();			
		}
	}

	function fullScreenChangeHandler() {
		console.log('fullScreenChangeHandler');
		if (!isFullScreen()) {
			console.log('minimized');
			// video.pause();
			if (!isAndroid){
				video.removeAttribute('controls');				
			}

			// video.addEventListener('click', playVideo);
		}		
	}

	function isFullScreen() {
		if (document.msFullscreenElement || document.webkitCurrentFullScreenElement || document.mozFullScreenElement) {
			return true;
		} else {
			return false;
		}
	}

};