// parameters 

var Page = function(parameters) {

	'use strict';

	if (!parameters) {
		throw new Error('Missing necessary arguments');
	}

	var self = this;
	var $container = $('.content-box');
	
	self.open = function() {
		
		if (parameters.template) {
			$.get(parameters.template)
				.done(function(response) {
					
					if ($container.find(parameters.basicSelector).size() == 0) {
						$container.append($('<div\>', {
							class: parameters.basicSelector.slice(1),
							html : response,
							style: 'display: none'
						}));
					} 

					parameters.bindHandlers && parameters.bindHandlers($container);
					self.open = _showContainer;
					self.open();
					
				})
				.fail(function() {
					throw new Error('Error template loading');
				});
		} else {
			parameters.bindHandlers && parameters.bindHandlers($container);
			self.open = _showContainer;
			self.open();
		}

	}

	// util private functions

	function _showContainer() {
		$container.children().fadeOut(0)
		$container.find(parameters.basicSelector).fadeIn(100);
		$('.overlay').fadeOut(25);
	}

};