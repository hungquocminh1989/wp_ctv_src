<?php

/**
* Action hook
* add_action( string $tag, callable $function_to_add, int $priority = 10, int $accepted_args = 1 )
* If add with old function name it will overide.
*/

//Style 1
add_action( 'action_hook_name',  function(){
	//Do something.
},99,1);

//Style 2
add_action('action_hook_name','function_to_add',99,1);
function function_to_add(){
	//Do something.
}

/**
* Filter hook
* add_filter( string $tag, callable $function_to_add, int $priority = 10, int $accepted_args = 1 )
*/

//Style 1
add_filter( 'filter_hook_name',  function(){
	//Do something.
},99,1);

//Style 2
add_filter('filter_hook_name','function_to_add',99,1);
function function_to_add($value){
	//Do something.
	return $value;
}

?>