document.addEventListener("DOMContentLoaded", function(event) { 
	var oWorkPage = new workPage();
});

function workPage() {
	var aImages = document.getElementsByClassName('images')[0].getElementsByTagName('img');
	for (var i = 0; i < aImages.length; i++) {
		aImages[i].addEventListener("load", function() {
			console.log(this);
			this.className = this.className + ' loaded';
		});
	};
	// $('images img').on('load', function() {
	// 	this.addClass("loaded");
	// })
}