<?php
/*
Plugin Name:Custom Login logo 
Plugin URI: 
Description: Set your image for the login logo
Version: 0.1
Author: Juan Ramon & Christian
Author URI: http://twitter.com/juanradiaz
*/

function custom_login_logo() {
	echo '
	<style type="text/css">
	h1 a { background-image: url(' . get_bloginfo('template_directory') . '/_inc/images/logo_trans.png) !important ; }
	</style>' ;
}

add_action('login_head', 'custom_login_logo') ;

?>