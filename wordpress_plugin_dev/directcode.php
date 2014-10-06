<?php
/**
 * @package Directcode
 * @version 0.2
 */
/*
Plugin Name: DirectCode - Developer info
Plugin URI: http://directcode.eu/
Description: Plugin developed by DirectCode
Author: Dominik Wlazlowski	
Version: 0.2
Author URI: http://dominik-w.pl/
*/

function directcode_get_content() {
	
	$content = "<div id='frame'>
	<div style='margin-bottom: 5px;'>DirectCode - Software Development</div>
	<img src='http://directcode.eu/samples/direct-code-logo-company-sml.png' />
	<br />
	<a href='http://directcode.eu/' target='_blank'>directcode.eu</a>
	</div>
	";
	
	return $content;
}

function hello_dc() {
	$chosen = directcode_get_content();
	echo "<p id='dc'>$chosen</p>";
}

// now we set that function up to execute when the admin_notices action is called
add_action( 'admin_notices', 'hello_dc' );

// CSS
function dc_css() {
	
	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
	#dc {
		float: $x;
		padding-$x: 15px;
		padding-top: 5px;		
		margin: 0;
		font-size: 11px;
	}
	
	#frame {
	    border: solid 1px #0094ed; 
		background-color: #fff;
		width: 222px;
		padding: 2px;
		margin: 2px;
		text-align: center;
	}
	</style>
	";
}

add_action( 'admin_head', 'dc_css' );


add_filter('the_content', 'my_function');
function my_function($input) {
	echo 'by DirectCode.eu';
}

?>
