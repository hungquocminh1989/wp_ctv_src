<?php
/*
|--------------------------------------------------------------------------
| SHORTCODE
|-------------------------------------------------------------------------- 
*/
defined( 'ABSPATH' ) || exit;

add_shortcode('shortcode_name_test','repoCreateShortcode');

function repoCreateShortcode($args, $content){
	echo 'Shortcode test.';
	echo '<br>';
	echo $content;
}

