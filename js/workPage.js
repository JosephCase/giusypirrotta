document.addEventListener("DOMContentLoaded", function(event) { 
	var oWorkPage = new workPage();
});

function workPage() {
	var aImages = document.getElementsByTagName('img');
	
	showImage(0);

	//Loop through images in order
	function showImage(i) {
		console.log(aImages[i].complete);
		if (aImages[i].complete == true) {
			aImages[i].className = aImages[i].className + ' loaded';
			if (i < aImages.length) {
				showImage(i+1);
			}
		} else {
			aImages[i].addEventListener("load", function() {
				this.className = this.className + ' loaded';
				if (i < aImages.length) {
					showImage(i+1);
				}
			}, false);			
		}
	}
}