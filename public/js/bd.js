$('#reserverClick').click(function(){
	$('#reserverClick').fadeOut('fast', function(){
		$('#form').animate({left: '+420'});
	});
});

// trajet aeroport
$('#validation').click(function () {
	$('.confirmation').css('display', 'flex');
});

$('#annulation').click(function () {
	$('.confirmation').hide('slow');
});

// long trajet
	$(window).ready(function () {
		$('confirmationMad').hide();
	})
	$('#validationMad').click(function () {
		// $('.confirmationMad').css('display', 'flex');
		$('.confirmationMad').show('slow');
	});

	$('#annulationMad').click(function () {
		$('.confirmationMad').hide('slow');
});
