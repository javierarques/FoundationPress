<?php
/***
 * Template tags
 */

/**
 * Imprime el la imagen destacada usando el thumbGen
 *
 * @param int $width
 * @param int $height
 * @param string $before
 * @param string $after
 * @param unknown_type $link
 * 
 */
if (function_exists('thumbGen')):
    
function the_thumb ( $width, $height, $before = '', $after = '', $link = false, $valign = 'center') {

	$thumbnail_id= get_post_thumbnail_id();
	if ( ! $thumbnail_id )
		return false;
		
	$img = wp_get_attachment_image_src($thumbnail_id, 'large');
	
	if ( $link ) {
		$before = $before . '<a href="' . get_permalink( get_the_ID()) . '" title="' . esc_attr( get_the_title( )) . '">';
		$after = '</a>' . $after;
	}
	
	echo $before . '<img src=' . thumbGen( $img[0], $width, $height, 'return=1&valign='.$valign) . '" height="' . $height . '" width="' . $width . '" alt="' . esc_attr( get_the_title( )) . '" title="' . esc_attr( get_the_title( )) . '" />' . $after;

}
endif;
