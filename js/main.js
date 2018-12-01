jQuery(document).ready(function ($) {
	$(window).click(function() {
		$('#topMeny').removeClass('visabale');
		$('#hamburger').removeClass('close');
	})
	$('#hamburger').click(function(event) {
		event.stopPropagation();
		$('#topMeny').toggleClass('visabale');
		$('#hamburger').toggleClass('close');
	});
});
