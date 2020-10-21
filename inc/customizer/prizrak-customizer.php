<?php
// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

class Prizrak_Customizer {

	function __construct() {
		add_action( 'customize_register', array( $this, 'custom_control_register' ), 10 );
		add_action( 'customize_register', array( $this, 'customizer_register' ), 10 );
		add_action( 'customize_preview_init', array( $this, 'customizer_live_preview' ), 10 );
    }

    //costomizer registers
    public function customizer_register( $wp_customize ) {

        add_theme_support( 'custom-logo' );
    
    }

    // control panels website
    public function custom_control_register() {

    }

    //costomizer previews
    public function customizer_live_preview() {
        
    }
	
}