jQuery(document).ready(function ($) {
	$('#hamburger').click(function(event) {
		$('#topMeny').toggleClass('visabale');
		$('#hamburger').toggleClass('close');
	});
});
