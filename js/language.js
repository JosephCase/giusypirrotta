var Language = new function () {
	console.log ('Language');
	this.changeLanguage = function () {
		console.log ('changeLanguage');
		var oBody = document.getElementsByTagName('body')[0];
		if (oBody.className == 'english') {
			oBody.className = 'italian';
		}
		else if (oBody.className == 'italian') {
			oBody.className = 'english';
		}
	};
};