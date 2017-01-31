
var $videos = $('.js-video');

var $backgroundVideo = $('.js-video-background');
var $fullScreenVideo = $('.js-video-overlay');

var $videoHideCover = $('.video-hide-cover');

var $videoModalCloseBtn = $('.js-close-video');

$fullScreenVideo.hide();

var $videoBtn = $('.js-open-video');

$videoBtn.hide();

var youtubeInitiated = false;

function initiateYoutube() {

	if( ! youtubeInitiated ) {

		var tag = document.createElement('script');
		tag.src = 'https://www.youtube.com/player_api'; // was player_api // iframe_api
		var firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

		youtubeInitiated = true;
	}
}

initiateYoutube();

function onYouTubePlayerAPIReady() {

	if( $videos.length ) {

		var players = [];

		var playerDefaults = {
			autoplay: 1,
			autohide: 1,
			modestbranding: 0,
			loop: 1,
			rel: 0,
			showinfo: 0,
			controls: 1,
			disablekb: 1,
			enablejsapi: 0,
			iv_load_policy: 3
			//origin: 'new-ocean.sfclients.com'
		};

		var windowInnerWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

		// var playerDefaults = { loop: 1, autoplay: 0, autohide: 1, modestbranding: 1, rel: 0, showinfo: 0, controls: 0, disablekb: 1, enablejsapi: 0, iv_load_policy: 3 }


		// var vid = [

		// 	// {'videoId': '9ge5PzHSS0Y', 'startSeconds': 465, 'endSeconds': 657, 'suggestedQuality': 'hd720'}, // Can loop through videos
		// 	// {'videoId': 'OWsCt7B-KWs', 'startSeconds': 0, 'endSeconds': 240, 'suggestedQuality': 'hd720'},
		// 	// {'videoId': 'qMR-mPlyduE', 'startSeconds': 19, 'endSeconds': 241, 'suggestedQuality': 'hd720'}
		// ],
		// randomvid = Math.floor(Math.random() * (vid.length - 1 + 1));

		$videoBtn.fadeIn('slow');

		if( windowInnerWidth > 959 ) {

			var vids = []
			var bgVidCode;

			$backgroundVideo.each( function() {

				console.log( 'this' );
				console.log( this );
				console.log( 'this id' );
				console.log( this.id );

				var bgVidCode = $(this).attr('video-id');

				var vid = [
					{'videoId': bgVidCode, 'startSeconds': 0, 'endSeconds': 690, 'suggestedQuality': 'hd720'}
					// {'videoId': '9ge5PzHSS0Y', 'startSeconds': 465, 'endSeconds': 657, 'suggestedQuality': 'hd720'}, // Can loop through videos
					// {'videoId': 'OWsCt7B-KWs', 'startSeconds': 0, 'endSeconds': 240, 'suggestedQuality': 'hd720'},
					// {'videoId': 'qMR-mPlyduE', 'startSeconds': 19, 'endSeconds': 241, 'suggestedQuality': 'hd720'}
				],
				randomvid = Math.floor(Math.random() * (vid.length - 1 + 1));

				if( typeof this.id !== 'undefined' ) {

					console.log( 'not undefined' );

					playerDefaults.playlist = bgVidCode;

					console.log( playerDefaults );

					var player = new YT.Player(this.id, {

						events: {

							onReady: function(event) {

								for( var i = 0; i < players.length; i++ ) {

									players[i].loadVideoById(vid[randomvid]);
									players[i].mute();
									players[i].setLoop(true); // doesnt work!
								}

							},
							onStateChange: function(e) {

								if (e.data === 1) {

									$('#tv').addClass('active');

								} else if (e.data === 0) {

									for (var i = 0; i < players.length; i++) {

										players[i].seekTo(vid[randomvid].startSeconds);
									}
								}
							}
						},
						playerVars: playerDefaults
					});

					vidRescale( player );

					players.push( player );

				} else {

					console.log('its undefined');
				}
			});



			function vidRescale( player ) {

				// @todo - fix size for mobile max-height
				var w = $(window).width()+200,
				  h = $(window).height()+200;

				// console.log('resize player');
				// console.log( player );

				if (w/h > 16/9){

					player.setSize(w, w/16*9);

					//$('.tv .screen').css({'left': '0px'}); // doesn't centre
					// todo, add left -

				} else {

					player.setSize(h/9*16, h);

					//$('.tv .screen').css({'left': -($('.tv .screen').outerWidth()-w)/2});
				}
			}

			//vidRescale();

			$(window).on('load resize', function(){

				for (var i = players.length - 1; i >= 0; i--) {

					vidRescale( players[i] );
				}
			});
		}

		var fullScreenPlayers = []; // not yet used

		// Init mobile videos
		var fsPlayers = [];

		$videoBtn.each( function() {

			var code = $(this).attr('video-id');

			console.log( code );

			if( code ) {

				var videoSelector = '.js-video-' + code;

				console.log( 'videoSelector' );
				console.log( videoSelector );

				var $fsVideo = $fullScreenVideo.find( videoSelector );

				console.log( '$fsVideo' );
				console.log( $fsVideo );

				var $container = $fsVideo.parent();

				var fsVideoId = $fsVideo[0].id;

				var makePlayer = true;

				for (var i = fsPlayers.length - 1; i >= 0; i--) {

					if( fsPlayers[i].ytvideo_id === fsVideoId ) {

						makePlayer = false;
					}
				}

				if( makePlayer ) {

					fsPlayers.push({
						ytvideo_id: code,
						player: new YT.Player(fsVideoId, {
							events: {
								onReady: function(event, el) {

									console.log('on ready');
									console.log(event);

									playerDefaults.playlist = code;

									// loadVideoById plays the video, we want cueVideoById
									event.target.cueVideoById({'videoId': code, 'startSeconds': 0, 'endSeconds': 690, 'suggestedQuality': 'hd720'});

									$videoHideCover.addClass('show-video');

									// fsPlayers[0].player.mute();
									// fsPlayers[0].player.setLoop(true);

								},
								onStateChange: function(e, el) {

									console.log('state changed');
									console.log(e);

									$videoHideCover.addClass('show-video');

									if (e.data === 1) {

									} else if (e.data === 0) {

									}
								}
							},
							playerVars: {
								autoplay: 0,
								autohide: 1,
								modestbranding: 0,
								loop: 1,
								rel: 0,
								showinfo: 0,
								controls: 1,
								disablekb: 1,
								enablejsapi: 1,
								iv_load_policy: 3
							}
						})
					});
				}
			}
		});

		// Open other video
		$videoBtn.on('click', function(e) {

			e.preventDefault();

			$videoModalCloseBtn.off();

			$videoHideCover.removeClass('show-video');

			var code = $(this).attr('video-id');

			for (var i = fsPlayers.length - 1; i >= 0; i--) {

				if( fsPlayers[i].ytvideo_id === code ) {

					console.log('matched and playing the video')

					if (typeof fsPlayers[i].player.playVideo === "function") { // function removed once not playing
						fsPlayers[i].player.playVideo();
						$videoHideCover.addClass('show-video');
					}
				}
			}

			var fullScreenVideoplayerInitiated = false;
			var videoSelector = '.js-video-' + code;
			var $fsVideo = $fullScreenVideo.find( videoSelector );
			var $container = $fsVideo.parent();

			$container.fadeIn('fast');

			$container.find('.js-close-video').on('click', function(e) {

				e.preventDefault();

				console.log('close clicked');

				$fullScreenVideo.fadeOut('fast');

				for (var i = fsPlayers.length - 1; i >= 0; i--) {

					if (typeof fsPlayers[i].player.stopVideo === "function") { // function removed once not playing

					    fsPlayers[i].player.stopVideo();
					}
				}

				$videoHideCover.removeClass('show-video');
			});
		});
	}
}




// var tag = document.createElement('script');
// 		tag.src = 'https://www.youtube.com/player_api';iframe_api
// var firstScriptTag = document.getElementsByTagName('script')[0];
// 		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
// var tv,
// 		playerDefaults = {autoplay: 0, autohide: 1, modestbranding: 0, rel: 0, showinfo: 0, controls: 0, disablekb: 1, enablejsapi: 0, iv_load_policy: 3};
// var vid = [
// 			{'videoId': '2b5QNj-BVhs', 'startSeconds': 515, 'endSeconds': 690, 'suggestedQuality': 'hd720'},
// 			{'videoId': '9ge5PzHSS0Y', 'startSeconds': 465, 'endSeconds': 657, 'suggestedQuality': 'hd720'},
// 			{'videoId': 'OWsCt7B-KWs', 'startSeconds': 0, 'endSeconds': 240
//        , 'suggestedQuality': 'hd720'},
// 			{'videoId': 'qMR-mPlyduE', 'startSeconds': 19, 'endSeconds': 241, 'suggestedQuality': 'hd720'}
// 		],
// 		randomVid = Math.floor(Math.random() * vid.length),
//     currVid = randomVid;

// $('.hi em:last-of-type').html(vid.length);

// function onYouTubePlayerAPIReady(){
//   tv = new YT.Player('tv', {events: {'onReady': onPlayerReady, 'onStateChange': onPlayerStateChange}, playerVars: playerDefaults});
// }

// function onPlayerReady(){
//   tv.loadVideoById(vid[currVid]);
//   tv.mute();
// }

// function onPlayerStateChange(e) {
//   if (e.data === 1){
//     $('#tv').addClass('active');
//     $('.hi em:nth-of-type(2)').html(currVid + 1);
//   } else if (e.data === 2){
//     $('#tv').removeClass('active');
//     if(currVid === vid.length - 1){
//       currVid = 0;
//     } else {
//       currVid++;
//     }
//     tv.loadVideoById(vid[currVid]);
//     tv.seekTo(vid[currVid].startSeconds);
//   }
// }

// function vidRescale(){

//   var w = $(window).width()+200,
//     h = $(window).height()+200;

//   if (w/h > 16/9){
//     tv.setSize(w, w/16*9);
//     $('.tv .screen').css({'left': '0px'});
//   } else {
//     tv.setSize(h/9*16, h);
//     $('.tv .screen').css({'left': -($('.tv .screen').outerWidth()-w)/2});
//   }
// }

// $(window).on('load resize', function(){
//   vidRescale();
// });

// $('.hi span:first-of-type').on('click', function(){
//   $('#tv').toggleClass('mute');
//   $('.hi em:first-of-type').toggleClass('hidden');
//   if($('#tv').hasClass('mute')){
//     tv.mute();
//   } else {
//     tv.unMute();
//   }
// });

// $('.hi span:last-of-type').on('click', function(){
//   $('.hi em:nth-of-type(2)').html('~');
//   tv.pauseVideo();
// });
