// parameters 
// - beforeTemplateLoad
// - afterTemplateLoad 
// - beforePageOpening
// - afterPageOpening
// - 


var Page = function(parameters) {

	'use strict';

	if(!parameters) {
		throw new Error('Missing necessary arguments');
	}

	this.open = function() {
		alert('Страница открыта');
	}

};