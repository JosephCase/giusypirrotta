document.addEventListener("DOMContentLoaded", function(event) { 
	Language.construct();
});

var Language = new function () {
	this.construct = function () {
		this.setLanguage();
	}
	this.setLanguage = function() {
		if (sessionStorage.language) {
			var oBody = document.getElementsByTagName('body')[0];
			oBody.className = sessionStorage.language;
		}
	}
	this.changeLanguage = function () {
		if (!sessionStorage.language || sessionStorage.language == 'eng') {
			sessionStorage.language = 'ita';
		}
		else if (sessionStorage.language == 'ita') {
			sessionStorage.language = 'eng';
		}
		this.setLanguage();
	};
};