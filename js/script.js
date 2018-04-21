//event pada saat link di klik
$('.page-scroll').on('click', function(e) {

	 var tujuan = $(this).attr('href');

	 var elemenTujuan = $(tujuan);

	 console.log($('html , body').animate({
	  scrollTop: elemenTujuan.offset().top - 50
	 }, 1250, 'easeInOutQuart'));

	 e.preventDefault();

});


//about

$(window).on('load', function(){
	$('.pKiri').addClass('pMuncul');
	$('.pKanan').addClass('pMuncul');
});

//parallax
$(window).scroll(function() {
	var wScroll = $(this).scrollTop();

	//Jumbotron

	$('.jumbotron img').css({
		'transform' : 'translate(0px, '+ wScroll/4.5 + '%)'
	});

	$('.jumbotron h1').css({
		'transform' : 'translate(0px, '+ wScroll/1.9 + '%)'
	});

	$('.jumbotron p').css({
		'transform' : 'translate(0px, '+ wScroll/1.3 + '%)'
	});

	//Portfolio
	if (wScroll > $('.portfolio').offset().top - 250) {

		$('.portfolio .thumbnail').each(function(i) {
			setTimeout(function(){
				$('.portfolio .thumbnail').eq(i).addClass('muncul');
			}, 300 * (i+1));
		});

		

	}


});