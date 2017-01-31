<?php

	function getYoutubeIdFromUrl( $url ) {

		$matches = [];

		if( $url )
		{
			if( strpos($url, 'youtu') !== false ) {

				$pattern = '/youtu(be\.com|\.be)\/(embed\/|v\/|watch\?v=)?(?<code>[a-zA-Z0-9_-]+)/i';

				if( preg_match($pattern, $url, $matches) !== false )
				{
					if(isset($matches['code'])):

						return $matches['code'];

					endif;
				}
			}
		}

		return false;
	}

	function getVimeoIdFromUrl( $url ) {

		$matches = [];

		if( $url )
		{
			if( strpos($url, 'youtu') !== false ) {

				$pattern = '/youtu(be\.com|\.be)\/(embed\/|v\/|watch\?v=)?(?<code>[a-zA-Z0-9_]+)/i';

				if( preg_match($pattern, $url, $matches) !== false )
				{
					if(isset($matches['code'])):

						return $matches['code'];

					endif;
				}
			}
		}

		return false;
	}
