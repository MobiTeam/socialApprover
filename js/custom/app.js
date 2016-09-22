var app = (function($) {
	
	'use strict';

	var loadedModulesCnt = 0;

	// public interface
	
	return {
		start: start,
		goToPage: goToPage
	}

	// public methods

	function start() {
		
		_ini();
		_bindActions();



		// $.uriAnchor.makeAnchorMap().page || 'index'
		
	}

	function goToPage(newAddress, query, replaceQueryFlag) {
		// $.uriAnchor.makeAnchor();
	}

	// private methods

	function _ini() {
		for (var module in app.modules) {
			app.modules[module].init && app.modules[module].init();	
		} 
	}

	function _bindActions() {
	
		$(window)
			.on('hashchange', _onHashChange)
			.on('moduleload', _onModuleLoad);
		
		window.onerror = _onError;	

		// listeners

		function _onModuleLoad(event) {

			loadedModulesCnt++;

			if (loadedModulesCnt == Object.keys(app.modules).length) {
				alert('All modules loaded');
			}
		}

		function _onHashChange(event) {

			// if correct
			// switch page
			// else 
			// return false

		}	

		function _onError(msg, url, lineNo, columnNo, error) {
			
			var string = msg.toLowerCase();
			var substring = "script error";
			
			if (string.indexOf(substring) > -1) {
			    alert('Script Error: See Browser Console for Detail');
			} else {
			    var message = [
			        'Message: ' + msg,
			        'URL: ' + url,
			        'Line: ' + lineNo,
			        'Column: ' + columnNo,
			        'Error object: ' + JSON.stringify(error)
			    ].join(' - ');

			    alert(message);
			}

			// app reload previous state
			return true;
		}

	}

	// util functions 

	function _changePage() {

	}

})(jQuery);