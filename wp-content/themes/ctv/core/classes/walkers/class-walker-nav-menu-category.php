<?php
defined( 'ABSPATH' ) || exit;

class Walker_Nav_Menu_Category extends Walker_Nav_Menu {

	public function end_lvl( &$output, $depth = 0, $args = array() ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = str_repeat( $t, $depth );
		
		//Add
		if($depth == 0){
			$custome_li = '
			<li class="offer">
	                	<div class="col-1">
	                  	<p class="p-style2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	                  </div>
	                  <div class="col-2">
	                  	<img src="'.THEME_URI.'/resources/assets/bushido_template/img/offers/menu-drodown-offer.jpg" alt="Special Offer"/>
	                  	<a class="btn btn-block" href="#"><span>584$</span>Special offer</a>
	                  </div>
	                </li>
			';
			$indent .= $custome_li;
		}
		//End
		
		$output .= "$indent</ul>{$n}";
	}
	

} // Walker_Nav_Menu_Category
