document.addEventListener("DOMContentLoaded", function(event) { 
	Language.construct();
});

var Language = new function () {
	console.log ('Language');
	this.construct = function () {
		console.log	('construct');
		this.setLanguage();
	}
	this.setLanguage = function() {
		console.log	('setLanguage');
		console.log(sessionStorage.language);
		if (sessionStorage.language) {
			console.log(sessionStorage.language);
			var oBody = document.getElementsByTagName('body')[0];
			oBody.className = sessionStorage.language;
		}
	}
	this.changeLanguage = function () {
		console.log ('changeLanguage');
		if (!sessionStorage.language || sessionStorage.language == 'english') {
			sessionStorage.language = 'italian';
		}
		else if (sessionStorage.language == 'italian') {
			sessionStorage.language = 'english';
		}
		this.setLanguage();
	};
};