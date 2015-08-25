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

		var aSizes = getSizes(src);
		var physicalWidth = calculatePhysicalWidth(width);

		var new_src;

		if (physicalWidth > aSizes[0]) {								//original
			return src;
		} else if (physicalWidth > aSizes[1]) {						//large
			new_src = src.replace("_o.jpg", "_l.jpg");
		} else if (physicalWidth > aSizes[2]) {						//medium
			new_src = src.replace("_o.jpg", "_m.jpg");
		} else {										//small
			new_src = src.replace("_o.jpg", "_s.jpg");
		}
		
		return imageExists(new_src) ? new_src : src;

	}

	function getSizes(src) {
		var aSizes = [];
		// if (src.indexOf("thumb") > -1) {
			aSizes[0] = 600;
			aSizes[1] = 500;
			aSizes[2] = 350;
		// } else {
		// 	aSizes[0] = 1200;
		// 	aSizes[1] = 1000;
		// 	aSizes[2] = 700;
		// }
		console.log("aSizes: " + aSizes);
		return aSizes;
	}

	function calculatePhysicalWidth (width) {
		var multiplier = (window.devicePixelRatio >= 2) ? 2 : 1;
		console.log("multiplier: " + multiplier);
		return width * multiplier;
	}

	function imageExists(image_url){

	    var http = new XMLHttpRequest();

	    http.open('HEAD', image_url, false);
	    http.send();

	    console.log(http.status != 404);
	    return http.status != 404;

	}
}