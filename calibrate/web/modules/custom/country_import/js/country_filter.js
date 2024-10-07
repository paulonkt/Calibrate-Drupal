(function ($, Drupal) {
	'use strict';
	Drupal.behaviors.countryFilter = {
		attach: function (context, settings) {
			$('#edit-country', context).once('countryFilter').change(function () {
				$(this).closest('form').submit();
			});
		}
	};
})(jQuery, Drupal);