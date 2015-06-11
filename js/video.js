// document.addEventListener("DOMContentLoaded", function(event) { 
// 	var Video = new video();
// 	console.log("VIDEO1");
// });

var Video = new function () {
	console.log("VIDEO2");
	this.playVideo = function(video){
		console.log("play video");
		if (video.requestFullscreen) {
			console.log('normal');
			video.requestFullscreen();
		} else if (video.msRequestFullscreen) {
			console.log('ms');
			video.msRequestFullscreen();
			video.setAttribute("controls", "true");
		} else if (video.mozRequestFullScreen) {
			console.log('moz');
			video.mozRequestFullScreen();
		} else if (video.webkitRequestFullScreen) {
			console.log('webkit');
			video.webkitRequestFullScreen();
		} else {
			console.log('none worked');
		}
		video.play();

		video.addEventListener("mozfullscreenchange",function(){
			var state = document.fullScreen || document.mozFullScreen || document.webkitIsFullScreen;
    		console.log(document.fullScreen);
    		console.log(document.mozFullScreen);
    		console.log(document.webkitIsFullScreen);
		}, false);

		video.addEventListener("webkitfullscreenchange",function(){
			var state = document.fullScreen || document.mozFullScreen || document.webkitIsFullScreen;
    		console.log(document.fullScreen);
    		console.log(document.mozFullScreen);
    		console.log(document.webkitIsFullScreen);
		}, false);
	}
};