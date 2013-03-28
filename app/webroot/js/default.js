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
		}, 'json');
	});
	
	var url = window.location.pathname;  
    var activePage = url.substring(url.lastIndexOf('/')+1);
	 $('.navbar .nav li a').each(function(){  
	    var currentPage = this.href.substring(this.href.lastIndexOf('/')+1);
	    if (activePage == currentPage) {
	    	$('.navbar .nav li a').closest('.nav').find('li:eq(0)').removeClass('active');
		    $(this).parent().addClass('active'); 
		 } else if (activePage == '') {
	    	$('.navbar .nav li a').closest('.nav').find('li').removeClass('active');
	    	$('.navbar .nav li a').closest('.nav').find('li:eq(0)').addClass('active');
		 }
	});
});

