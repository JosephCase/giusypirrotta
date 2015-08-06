document.addEventListener("DOMContentLoaded", function(event) { 
	var oWorkPage = new workPage();
});

function workPage() {

	

	var aImages = document.getElementsByTagName('img');
	
	document.getElementById("test-box").innerText = aImages[0].clientWidth + " x " +  window.devicePixelRatio + " = "  + aImages[0].clientWidth * window.devicePixelRatio;

	showImage(0);

	//Loop through images in order
	function showImage(i) {
		console.log(aImages[i].getAttribute('data-img'));
		aImages[i].src = aImages[i].getAttribute('data-img');
		aImages[i].addEventListener("load", function() {
			this.className = this.className + ' loaded';
			if (i < aImages.length - 1) {
				showImage(i+1);
			}
		}, false);		
	}
}