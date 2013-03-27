$(function(){
	$('#contactForm').on('submit', function(e) {
		e.preventDefault();
		var $form = $(this);
		var postUrl = $form.attr('action');
		var postData = $form.serialize();
		$.post(postUrl, postData, function(data) {
			if (data.s) {
				$('#contact-div').hide();
				$('#failure-message').hide();
				$('#success-message').show();
			}
			if (!data.s) {
				$('#failure-message').show();
			}
		}, 'json')

	})
});