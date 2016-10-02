// parameters 

var Page = function(parameters) {

	'use strict';

	if(!parameters) {
		throw new Error('Missing necessary arguments');
	}

	var self = this;
	var $container = $('.content-box');
	
	self.open = function() {
		
		// $('.overlay').fadeIn(0);
		// parameters.reloadData && parameters.reloadData();

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

					$container.children().hide(0)
					$container.find(parameters.basicSelector).fadeIn(40);
					$('.overlay').fadeOut(25);
				})
				.fail(function() {
					throw new Error('Error template loading');
				});
		}


	}

};