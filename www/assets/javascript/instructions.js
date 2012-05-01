$(document).ready(function() {
	if( $('a.button').length ) {
		$('#instructions').hide();
		$('a.button').click(function(event) {
			if ( $(this).hasClass('try') ) {
				$('#instructions').slideToggle();
				$(this).html('Continue')
					.toggleClass('continue')
					.toggleClass('try')
					;		
				event.preventDefault();
			}
		});
	}
});
