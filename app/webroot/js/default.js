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

	// $('#ReadMore1').on('click',function(e) {
	// 	e.preventDefault();
	// 	$('#project1').show();
	// 	$('#ReadMore1').hide();
	// })
	// $('#ReadMore2').on('click',function(e) {
	// 	e.preventDefault();
	// 	$('#project2').show();
	// 	$('#ReadMore2').hide();
	// })
	// $('#ReadMore3').on('click',function(e) {
	// 	e.preventDefault();
	// 	$('#project3').show();
	// 	$('#ReadMore3').hide();
	// })


	$('.home-row .span3 a').on('click', function(e){
		e.preventDefault();
		$(this).closest('.span3').find('p:eq(1)').show();
		$(this).hide();
	})

});


