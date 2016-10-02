var app = (function($) {
	
	'use strict';

	// app settings

	var loadedModulesCnt = 0;
	var currentAnchor = {};
	var actionList = {
		'page' : _changePage
	}

	// public interface
	
	return {
		start: start,
		goToPage: goToPage
	}

	// public methods

	function start() {
		_bindHandlers();
		_ini();
	}

	function goToPage(newAddress, query, replaceQueryFlag) {

		var newAnchor = $.extend(currentAnchor, {
													page  : newAddress,
													query : query 
												});

		// $(window).trigger('hashchange');

	}

	// private methods

	function _ini() {
		$.get('settings/acl.json')
			.done(function(response) {
				for (var module in app.modules) {
					app.modules[module].init && app.modules[module].init();	
				} 
			})
			.fail(function() {
				throw new Error('Routes not load');
			})
	}

	function _bindHandlers() {
	
		$(window)
			.on('hashchange', _onHashChange)
			.on('moduleload', _onModuleLoad);
		
		window.onerror = _onError;	

		// listeners

		function _onModuleLoad(event) {

			loadedModulesCnt++;

			if (loadedModulesCnt == Object.keys(app.modules).length) {
				// go to page rendering
				$(window).trigger('hashchange');
				console.log('All modules loaded');
			}
		}

		function _onHashChange(event) {
			
			var newAnchor = $.uriAnchor.makeAnchorMap(),
				oldAnchor = currentAnchor;

			newAnchor.page = newAnchor.page || 'index';	

			if(_updateAnchor(newAnchor)) {
				var changes = _getChanges(newAnchor, oldAnchor);
				_applyChanges(changes);	
			}
			
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

	// actions

	function _changePage(page) {
		app.pages[page] && app.pages[page].open();
	}
	
	// util functions 

	function _getChanges(newObj, oldObj) {

		var changes = [];

		for(var key in newObj) {
			if(key.indexOf('_s_') != -1) continue;

			if(!oldObj[key] || newObj[key] != oldObj[key]) {
				changes.push({
								key: key, 
								value: newObj[key]
							});
			}	
		}

		return changes;
					
	}

	function _applyChanges(changes) {

		for(var change in changes) {
			actionList[changes[change].key] && actionList[changes[change].key](changes[change].value);
		}

	}

	function _updateAnchor(newAnchor) {

		try {
			$.uriAnchor.setAnchor(newAnchor);
			currentAnchor = newAnchor;
		} catch(e) {
			$.uriAnchor.setAnchor(currentAnchor);
			return false;
		}

		return true;
	}

})(jQuery);