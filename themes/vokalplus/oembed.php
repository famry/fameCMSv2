<?php
function get_youtube_oembed($url){
	$youtube 	= "http://www.youtube.com/oembed?url=". $url ."&format=json";
	$curl 		= curl_init($youtube);
	
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$return 	= curl_exec($curl);
	curl_close($curl);
	
	return $return;
}

if( isset( $_GET['url'] ) && isset( $_GET['type'] ) ){

	switch ( $_GET['type']) {
		case 'video':
			echo get_youtube_oembed( $_GET['url'] );
			break;
		
		default:
			echo get_youtube_oembed( $_GET['url'] );
			break;
	}
}