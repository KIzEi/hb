(function ($) {
	Drupal.behaviors.initSlickSlider = {
		attach: function (context, settings) {
			
			$('.view-diaporama .view-content').slick();
		}
	};
}(jQuery));