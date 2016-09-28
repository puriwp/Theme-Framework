(function($){
	fwEvents.on('fw:options:init', function (data) {
		data.$elements.find('.fw-option.fw-option-type-gradient:not(.initialized)').each(function(){
<<<<<<< HEAD
			// onChange primary, set secondary with primary color
			$(this).on('fw:color:picker:changed', function (event, data) {
				if (data.$element.closest('.primary-color').length === 1) {
					data.$element.closest('.fw-option-type-gradient')
						.find('.secondary-color input.fw-option-type-color-picker.secondary.initialized')
						.val(data.ui.color.toString())
						.trigger('change');
=======
			var $option = $(this);

			// update secondary color when primary color has changed
			$option.on('fw:color:picker:changed', '.fw-option-type-color-picker.primary', function (event, data) {
				var $secondary = $option.find('.fw-option-type-color-picker.secondary:first');

				if (!$secondary.hasClass('iris-initialized')) {
					$secondary
						.trigger('focus') // color-picker is lazy initialized on 'focus'
						.iris('hide');
>>>>>>> 281ed039b5bc2261d7212fcb208592ae8749cc97
				}

				$secondary.val(data.ui.color.toString()).trigger('change');
			});
		}).addClass('initialized');
	});
})(jQuery);
