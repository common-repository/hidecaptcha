<?php
/**
 * Plugin Name: ScolaCaptcha
 * Plugin URI: https://www.scolavisa.eu/scolacaptcha
 * Description: Hides google captcha V3 from all pages except from pages that use Contactform7
 * Version: 1.0.13
 * Author: Scolavisa
 * Author URI: http://www.scolavisa.eu
 * License: GPL
 */
 
// add scripts and styles to the WP pages
add_action('wp_enqueue_scripts',function() {
	wp_enqueue_style('scola_captcha_css', plugins_url( '/css/style.css', __FILE__ ));
	wp_enqueue_script( 'scola_captcha_js', plugins_url( '/javascript/script.js', __FILE__ ), array('jquery'));
});
