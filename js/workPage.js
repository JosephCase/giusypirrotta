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

		var new_src;

		if (width > 800) {								//original
			return src;
		} else if (width > 500) {						//large
			new_src = src.replace("_o.jpg", "_l.jpg");
			return imageExists(new_src) ? new_src : src;
		} else if (width > 300) {						//medium
			new_src = src.replace("_o.jpg", "_m.jpg");
			return imageExists(new_src) ? new_src : src;
		} else {										//small
			new_src = src.replace("_o.jpg", "_s.jpg");
			return imageExists(new_src) ? new_src : src;
		}

	}

	function imageExists(image_url){

	    var http = new XMLHttpRequest();

	    http.open('HEAD', image_url, false);
	    http.send();

	    console.log(http.status != 404);
	    return http.status != 404;

	}
}