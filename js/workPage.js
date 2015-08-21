document.addEventListener("DOMContentLoaded", function(event) { 
	var oWorkPage = new workPage();
});

function workPage() {

	

	var aImages = document.getElementsByTagName('img');
	
	document.getElementById("test-box").innerText = aImages[0].clientWidth + " x " +  window.devicePixelRatio + " = "  + aImages[0].clientWidth * window.devicePixelRatio;

	showImage(0);

	//Loop through images in order
	function showImage(i) {
		aImages[i].src = chooseSize(aImages[i].getAttribute('data-img'), aImages[i].clientWidth);
		aImages[i].addEventListener("load", function() {
			this.className = this.className + ' loaded';
			if (i < aImages.length - 1) {
				showImage(i+1);
			}
		}, false);		
	}

	function chooseSize(src, width) {

		if (width > 800) {
			return src;
		} else if (width > 500) {
			return src.replace("_o.jpg", "_l.jpg");
		} else if (width > 300) {
			return src.replace("_o.jpg", "_m.jpg");
		} else {
			return src.replace("_o.jpg", "_s.jpg");
		}

	}
}