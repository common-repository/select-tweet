<?php
/*
 * Plugin Name: Select Tweet
 * Plugin URI: https://abhijitnumber1.com
 * Description: Select any Text to Tweet It.
 * Author: Abhijit Das
 * Version: 1.0
 * License: GPLv2
 *Select Tweet is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Select Tweet is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Select Tweet. If not, see {License URI}.
 */

function select_tweat_load_scripts()
{
	$plugin_dir_url = plugin_dir_url( __FILE__ );
	//add style
	/*wp_enqueue_style('select_tweat_style',$plugin_dir_url.'select_tweat.css');*/
	wp_enqueue_script( 'select_tweat_js',$plugin_dir_url.'select_tweat.js', array(), '1.0.0', true );
}
add_action('wp_enqueue_scripts','select_tweat_load_scripts');

/*function select_tweat_load_content()
{
	include_once 'html.php';
}
add_action('wp_meta','select_tweat_load_content');
*/