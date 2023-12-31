WebFontConfig = {
	active: function(){
		//Notify window that the event has been fired
		$(window).trigger('fr:fonts-loaded');
		//Save a variable to know if fonts were loaded
		window.frFontsLoaded = true;
	},
	google: {
		families: [
			'Nunito:400,500,600,700,900'
		]
	}
};

(function(d) {
	var wf = d.createElement('script'), s = d.scripts[0];
	wf.src = 'https://cdnjs.cloudflare.com/ajax/libs/webfont/1.6.28/webfontloader.js';
	wf.async = true;
	s.parentNode.insertBefore(wf, s);	
})(document);