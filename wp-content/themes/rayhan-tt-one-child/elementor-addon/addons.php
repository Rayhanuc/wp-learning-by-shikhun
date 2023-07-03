<?php

function rayhan_tt_one_child_widgets( $widgets_manager ) {

	include_once( __DIR__ . '/widgets/hello-world.php' );

	$widgets_manager->register( new \Rayhan_Elementor_Addon_Hello_World() );

}
add_action( 'elementor/widgets/register', 'rayhan_tt_one_child_widgets' );