document.addEventListener("DOMContentLoaded", function(event) { 
	var oImages = new Images();
});

function Images() {

	var aImages = document.getElementsByTagName('img');
	
	
	if(aImages.length != 0) {
		showImage(0); // show the first image
	}

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

		// if (physicalWidth > aSizes[0]) {								//original
		// 	return src;
		// } else 

		if (physicalWidth <= aSizes[2]) {						//large
			new_src = src.replace(".jpg", "_x" + aSizes[2] + ".jpg");
		} else if (physicalWidth <= aSizes[1]) {						//medium
			new_src = src.replace(".jpg", "_x" + aSizes[1] + ".jpg");
		} else {										//small
			new_src = src.replace(".jpg", "_x" + aSizes[0] + ".jpg");
		}
		
		return new_src;

	}

	function getSizes(src) {
		var aSizes = [];
		aSizes[0] = 1000;
		aSizes[1] = 700;
		aSizes[2] = 500;
		return aSizes;
	}

	function calculatePhysicalWidth (width) {
		var multiplier = (window.devicePixelRatio >= 2) ? 2 : 1;
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