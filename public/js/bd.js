$('#reserverClick').click(function(){
	$('#reserverClick').fadeOut('fast', function(){
		$('#form').animate({left: '+420'});
	});
});

//Accueil transport
$(window).load(function () {
	$('.boutonsAc').hide();
})
$('#validationAc').click(function() {
	$('.boutonsAc').show('slow');
	$(this).hide('slow');
});

$('#annulationAc').click(function () {
	$('.boutonsAc').hide('slow');
	$('#validationAc').show('slow');
});

// trajet aeroport
$(window).load(function () {
	$('.boutons').hide();
})
$('#validation').click(function() {
	$('.boutons').show('slow');
	$(this).hide('slow');
});

$('#annulation').click(function () {
	$('.boutons').hide('slow');
	$('#validation').show('slow');
});

//mise à disposition
$(window).load(function () {
	$('.boutonsMad').hide();
})
$('#validationMad').click(function() {
	$('.boutonsMad').show('slow');
	$(this).hide('slow');
});

$('#annulationMad').click(function () {
	$('.boutonsMad').hide('slow');
	$('#validationMad').show('slow');
});

// long trajet
$(window).load(function () {
	$('.boutonsLT').hide();
})
$('#validationLT').click(function() {
	$('.boutonsLT').show('slow');
	$(this).hide('slow');
});

$('#annulationLT').click(function () {
	$('.boutonsLT').hide('slow');
	$('#validationLT').show('slow');
});
