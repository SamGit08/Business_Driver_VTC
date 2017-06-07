$('#reserverClick').click(function(){
	$('#reserverClick').fadeOut('fast', function(){
		$('#form').animate({left: '+420'});
	});
});

$('#validation').click(function () {
	$('.confirmation').css('display', 'flex');
});

$('#annulation').click(function () {
	$('.confirmation').hide();
});
