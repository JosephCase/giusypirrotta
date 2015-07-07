document.addEventListener("DOMContentLoaded", function(event) { 
	var oWorkPage = new workPage();
});

function workPage() {
	var aImages = document.getElementsByTagName('img');
	for (var i = 0; i < aImages.length; i++) {
		// aImages[i].className = this.className + ' loaded';
		aImages[i].addEventListener("load", function() {
			this.className = this.className + ' loaded';
		}, false);

		aImages[i].src = aImages[i].src;
	};
	// $('images img').on('load', function() {
	// 	this.addClass("loaded");
	// })
}