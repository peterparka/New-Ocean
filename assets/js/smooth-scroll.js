// smooth scroll to element
$('a[href^="/#"], a[href^="#"]').click(function(e) {

	console.log('scrolling');

    $('html, body').animate({ scrollTop: $(this.hash).offset().top}, 1000);

    //return false;

    e.preventDefault();
});

