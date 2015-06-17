document.addEventListener("DOMContentLoaded", function(event) {

	var videoElements = document.getElementsByTagName('video');
	var videoObjects = []
	console.log(videoElements.length);
	for (i = 0; i < videoElements.length; i++) {
		videoObjects[i] = new video(videoElements[i]);
	}

});

function video(video) {

	var me = this;

	video.addEventListener("click", playVideo);

	function playVideo() {

		console.log('playVideo');
		console.log(video);

		video.removeEventListener('click', playVideo);

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

		document.addEventListener("MSFullscreenChange", onMinimize, false);
		document.addEventListener("webkitfullscreenchange", onMinimize, false);
		document.addEventListener("mozfullscreenchange", onMinimize, false);   
	};

	function onMinimize() {
		console.log('onMinimize');
		if (!document.msFullscreenElement && !document.webkitCurrentFullScreenElement && !document.mozFullScreenElement) {
			console.log('minimized');
			// video.pause();
			video.removeAttribute('controls');
			video.addEventListener('click', playVideo);
		}		
	}
};