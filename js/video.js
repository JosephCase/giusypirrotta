document.addEventListener("DOMContentLoaded", function(event) {

	var videoElements = document.getElementsByTagName('video');
	var videoObjects = []
	console.log(videoElements.length);
	for (i = 0; i < videoElements.length; i++) {
		videoObjects[i] = new video(videoElements[i]);
	}

});

function video(video) {

	console.log('new video');

	var me = this;

	console.log(video);

	video.addEventListener("click", playVideo);

	function playVideo() {

		console.log("playVideo");
		console.log(video);

		video.removeEventListener("click", me.playVideo);

		console.log("play video");
		if (video.requestFullscreen) {
			console.log('normal');
			video.requestFullscreen();
			video.play();
		} else if (video.msRequestFullscreen) {
			console.log('ms');
			video.msRequestFullscreen();
			video.setAttribute("controls", "true");
			video.play();
		} else if (video.mozRequestFullScreen) {
			console.log('moz');
			video.mozRequestFullScreen();
		} else if (video.webkitRequestFullScreen) {
			console.log('webkit');
			video.webkitRequestFullScreen();
			video.play();
		} else {
			console.log('none worked');
		}

		video.addEventListener("mozfullscreenchange",function(){
			var fullScreen = document.fullScreen || document.mozFullScreen || document.webkitIsFullScreen;
    		if (fullScreen) {
    			video.addEventListener("click", me.playVideo);
    		}
		}, false);

		video.addEventListener("webkitfullscreenchange",function(){
			var state = document.fullScreen || document.mozFullScreen || document.webkitIsFullScreen;
    		if (fullScreen) {
    			video.addEventListener("click", me.playVideo);
    		}
		}, false);
	};

	//add this later
	// loop through videos and create a video object for each
	// this.checkFullScreen = function(e) {

	// }

};