$('#reserverClick').click(function(){
	$('#reserverClick').fadeOut('fast', function(){
		$('#form').animate({left: '+420'});
	});
});

//  $(document).ready(function(){
//       $('.parallax').parallax();
//
// // fonctionnalité trajet aeroport
// });

$('#validation').click(function () {
	$('.confirmation').css('display', 'flex');
});

$('#annulation').click(function () {
	$('.confirmation').hide();
});
