var app = (function($) {
	
	'use strict';

	// app settings

	var debugMode = true;

	var loadedModulesCnt = 0;
	var currentAnchor = {};
	var modals = [];
	var actionList = {
		'page'    : _changePage,
		'modal'   : _openModal,
		'login'   : _login,
		'register': _register
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

		var newAnchor = $.uriAnchor.makeAnchorMap(); 
		newAnchor.page = newAddress;

		$(window).trigger('hashchange', [newAnchor]);

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

		$(document)	
			.on('click', '[data-trigger="openModal"]', _onDataTriggerClick)
			.on('click', '[data-action]', _onDataActionClick)			
			.on('closed', '.remodal', _onRemodalClose);
		
		window.onerror = _onError;	

		// listeners

		function _onRemodalClose(event) {
			var anchor = $.uriAnchor.makeAnchorMap();
			delete anchor.modal;
			_updateAnchor(anchor);
		}

		function _onDataActionClick(event) {
			actionList[$(this).attr('data-action')] && actionList[$(this).attr('data-action')]($(this));
		}

		function _onDataTriggerClick(event) {
			
			var newAnchor = $.uriAnchor.makeAnchorMap(); 
			newAnchor.modal = $(this).attr('data-target-modal');
		
			$(window).trigger('hashchange', [newAnchor]);
			event.preventDefault();

		}

		function _onModuleLoad(event) {

			loadedModulesCnt++;

			if (loadedModulesCnt == Object.keys(app.modules).length) {
				// go to page rendering
				$(window).trigger('hashchange');
				debugMode && console.info('All modules loaded');
			}
		}

		function _onHashChange(event, data) {

			var newAnchor = data || $.uriAnchor.makeAnchorMap(),
				oldAnchor = currentAnchor;

			newAnchor.page = newAnchor.page || 'index';	

			if (_updateAnchor(newAnchor)) {
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

			    if (debugMode) {
			    	alert(message);
			    } else {
			    	// TO-DO send on server
			    }
			}

			// app reload previous state
			return true;
		}

	}

	// actions

	function _changePage(page) {
		debugMode && console.info('Change page - ' + page);
		app.pages[page] && app.pages[page].open();
	}

	function _openModal(idModal) {
		if ($('[data-remodal-id="' + idModal + '"]').size() > 0) {
			debugMode && console.info('Open modal ' + idModal);
			
			if (modals.indexOf(idModal) == -1) {
				modals[idModal] = $('[data-remodal-id="' + idModal + '"]').remodal();
			}

			modals[idModal].open(); 
		} else {
			// to-do incorrect modal address
		}
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

	// not core functions

	function _login($handledEl) {
		alert('Авторизация');
	}

	function _register($handledEl) {
		alert('Регистрация');
	}

})(jQuery);