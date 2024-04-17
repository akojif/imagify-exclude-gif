<?php

function no_webp_for_gif( $response, $process, $file, $thumb_size, $optimization_level, $webp, $is_disabled ) {
	if ( ! $webp || $is_disabled || is_wp_error( $response ) ) {
		return $response;
	}
      
	if ( 'image/gif' !== $file->get_mime_type() ) {
		return $response;
	}

	return new \WP_Error( 'no_webp_for_gif', __( 'Webp version of gif is disabled by filter.' ) );
}

?>