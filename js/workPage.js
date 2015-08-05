document.addEventListener("DOMContentLoaded", function(event) { 
	var oWorkPage = new workPage();
});

function workPage() {
	document.getElementById("test-box").innerText = window.devicePixelRatio;
	var aImages = document.getElementsByTagName('img');
	
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