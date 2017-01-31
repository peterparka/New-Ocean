$nav = $('.js-nav');

$hamburger = $('.hamburger');

$navItems = $nav.find('.nav-items');

$hamburger.on('click', function() {

   $(this).toggleClass('is-active');

   $nav.toggleClass('is-active');
});

$navItems.on('click', function() {

	$nav.removeClass('is-active');
	$hamburger.removeClass('is-active');
});
