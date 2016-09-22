;(function(exports, $) {

	'use strict';
	
	// module settings
	var _settings = {		
		URL             : 'http://vk/',
		API_URL			: '//vk.com/js/api/openapi.js',
		PERMISSION_CODE : 31,
		API_ID          : 5624602 
	};

	// open module api
	exports.auth = auth;
	exports.init = init;

	return exports;

	function init() {
		$.getScript(_settings.API_URL)
			.done(function() {
				VK.init({
					apiId: _settings.API_ID
				});
				$(window).trigger('moduleload');
			})
	}

	function auth() {
		VK.Auth.login(_authCallback, _settings.PERMISSION_CODE);
	}

	function _authCallback(response) {
		if (response.session) { 
			alert('Пользователь авторизовался');
		} else {
			alert('Пользователь отменил вход');
		}
	}

})(app.modules.vk = {}, jQuery)



	