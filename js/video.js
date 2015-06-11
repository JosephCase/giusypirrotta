// document.addEventListener("DOMContentLoaded", function(event) { 
// 	var Video = new video();
// 	console.log("VIDEO1");
// });

var Video = new function () {
	console.log("VIDEO2");
	this.playVideo = function(video){
		console.log(video);
		if (video.mozRequestFullScreen) {
			console.log('moz');
			video.mozRequestFullScreen();
		} else if (video.webkitRequestFullScreen) {
			console.log('webkit');
			video.webkitRequestFullScreen();
		}
		video.play();

		video.addEventListener("mozfullscreenchange",function(){
			var state = document.fullScreen || document.mozFullScreen || document.webkitIsFullScreen;
    		console.log(state);
		}, false);

		video.addEventListener("webkitfullscreenchange",function(){
			var state = document.fullScreen || document.mozFullScreen || document.webkitIsFullScreen;
    		console.log(state);
		}, false);
	}
};