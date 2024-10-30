<?php
/*
Plugin Name: Lazy Load by SWL
Plugin URI: http://skylineweblab.com/lazy-load
Description: Lazy Load by SWL is a fast and lightweight delayed content loading jQuery based plugin for WordPress. It's designed to speed up page loading times and decrease traffic to your users by only loading the content in view.
Version: 1.0
Author: SkylineWebLab
Author URI: http://skylineweblab.com

Copyright 2018  SkylineWebLab  (email: info@skylineweblab.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


/**
 * Plugin directory define
 */
define('LLSWL_PLUGIN_URL', plugin_dir_url( __FILE__ ));

/**
 * Scripts and styles
 */

function llswl_scripts_and_styles() {


	wp_enqueue_script( 'llswl-img-preprocesing', LLSWL_PLUGIN_URL .  'assets/js/img-preprocessing.js', array(), '1.0', true );
		$strings_array = array(
		'preloader' => LLSWL_PLUGIN_URL . 'assets/img/preloader.svg',
	);
	wp_localize_script( 'llswl-img-preprocesing', 'llswlStrings', $strings_array );

	wp_enqueue_script( 'llswl-lazy-load', LLSWL_PLUGIN_URL .  'assets/js/jquery.lazy.js', array(), '1.0', true );

	wp_enqueue_script( 'llswl-init', LLSWL_PLUGIN_URL .  'assets/js/init.js', array('llswl-lazy-load'), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'llswl_scripts_and_styles' );