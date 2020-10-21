<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

class Prizrak_Header {
    
    function __construct() {
        add_action('wp_enqueue_scripts', array($this , 'prizrak_layout_style'));
        add_action('wp_enqueue_scripts', array($this , 'prizrak_header_style'));
        add_action( 'after_setup_theme', array($this , 'register_prizrak_menu' ));
    }

    public function register_prizrak_menu() {
        register_nav_menu( 'header_primary_menu', 'Primary Menu' );
    }
    public function prizrak_layout_style() {
        $suffix = (WP_DEBUG === true) ? '' : '.min';
        wp_enqueue_style('prizrak-layout', get_template_directory_uri() . '/assets/css/layout' .$suffix . '.css',array(),wp_get_theme()->get( 'Version'));
    }
    public function prizrak_header_style() {
        $suffix = (WP_DEBUG === true) ? '' : '.min';
        wp_enqueue_style('prizrak-header', get_template_directory_uri() . '/assets/css/header' .$suffix . '.css',array(),wp_get_theme()->get( 'Version'));
    }

}