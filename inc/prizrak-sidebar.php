<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


class Prizrak_Sidebar {

    function __construct() {
        add_action( 'widgets_init',array($this, 'register_sidebar_first') );
    }

    public function register_sidebar_first() {
            $args = array(
                'name'          => __('Главный сайдбар'),
                'id'            => 'sidebar_first',
                'description'   => '',
                'class'         => '',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<div class="widget-header"><h2 class="widget-title">',
                'after_title'   => '</h2></div>',
            );
        register_sidebar($args);
    }

}