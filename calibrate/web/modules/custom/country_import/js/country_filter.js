(function ($, Drupal, once) {
	'use strict';
	Drupal.behaviors.countryFilter = {
		attach: function (context, settings) {
			once('countryFilter', '#edit-country', context).forEach(function (element) {
				$(element).change(function () {
					$(this).closest('form').submit();
				});
			});
		}
	};
})(jQuery, Drupal, once);
