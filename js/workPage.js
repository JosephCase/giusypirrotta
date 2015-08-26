document.addEventListener("DOMContentLoaded", function(event) { 
	var oWorkPage = new WorkPage();
});

function WorkPage() {
	var contentDiv = document.getElementsByClassName("content")[0];

	function setContentWidth () {
		contentDiv.style.maxWidth = 1.5 * window.innerHeight + 'px'; //fix because vh doesn't work in safari
	}

	setContentWidth();
	window.addEventListener("resize", setContentWidth);
}