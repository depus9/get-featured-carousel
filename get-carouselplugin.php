<?php
/**
 * Plugin Name:       Get Carousel plugin
 * Description:
 * Version:           1.0.0
 * Author:            Deepesh Mali
 * Author URI:        https://deepeshmali.com.np
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}
/**
 *  Enqueue all scripts needed for this demo
 * @return void
 */

function create_getfeaturedcarouse_shortcode($atts) {

	$atts = shortcode_atts(
		array(
		),
		$atts,
		'get-featured-carousel'
    );
    $args = '';
    $url = "http://localhost/tesp/wp-json/w-ready/w-carousel";
 $response = wp_remote_get( $url, $args );
 return $response['body'];


}
add_shortcode( 'get-featured-carousel', 'create_getfeaturedcarouse_shortcode' );