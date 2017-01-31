$( document ).ready(function() {

	var $body = $('body')
	var $modal = $('.js-modal');
	var $modalVideo = $modal.find('.js-video');
	var $modalImage = $modal.find('.js-picture');
	$modalImage.hide();

	var modalScrollPos = 0;

 	$('.js-open-modal').on('click', function(event) {

		event.preventDefault();

		modalScrollPos = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;

        $('body').css({
            overflow: 'hidden',
            position: 'fixed',
            top : -modalScrollPos
        });

		var $this = $(this);
		var name = $this.siblings('.js-name').html();
		var position = $this.siblings('.js-position').html();
		var bio = $this.attr('bio');
		var videoId = $this.attr('video-id');
		var modalPicture = $this.attr('modal-picture');
		var email = $this.attr('email');

		$modal.find('.js-name').html(name);
		$modal.find('.js-position').html(position);

		if( videoId ) {

			$modalVideo.attr('src', 'https://www.youtube.com/embed/' + videoId);
			$modalVideo.show();

		} else {
			$modalVideo.hide();
		}

		if( modalPicture ) {

			$modalImage.attr('src', modalPicture);

			$modalImage.on('load', function() {

				$modalImage.show();
			});

		} else {

			$modalImage.hide();
		}

		$modal.find('.js-email').attr('href', 'mailto:' + email );
		$modal.find('.js-bio').html(bio);
		$modal.fadeIn('fast');
	});

	$('.js-close-modal').on('click', function() {

		$('body').css({
            overflow: '',
            position: '',
            top: ''
        })

        $(window).scrollTop(modalScrollPos);

		$modal.fadeOut('fast');
		$modalVideo.hide();
		$modalVideo.attr('src', '');
		$modalImage.hide();
		$modalImage.attr('src', '');
	});
});
