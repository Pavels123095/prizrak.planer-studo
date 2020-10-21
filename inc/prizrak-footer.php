<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


class Prizrak_Footer  {
    
    function __construct() {
        add_action( 'widgets_init',array($this, 'register_prizrak_footer_widgets') );
        add_action('wp_enqueue_scripts', array($this, 'prizrak_footer_style'));
        add_action('wp_enqueue_scripts', array($this , 'prizrak_common_js'));
    }

    public function register_prizrak_footer_widgets() {

        $args_footer_1 = array(
                'name'          => __('Колонка подвала 1'),
                'id'            => 'footer-top-column-1',
                'description'   => '',
                'class'         => '',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<div class="widget-header"><h2 class="widget-title">',
                'after_title'   => '</h2></div>',
            );
        register_sidebar($args_footer_1);
            
        $agrs_footer_2 = array(
            'name'          => __('Колонка подвала 2'),
            'id'            => 'footer-top-column-2',
            'description'   => '',
            'class'         => '',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="widget-header"><h2 class="widget-title">',
            'after_title'   => '</h2></div>',
        );

        register_sidebar( $agrs_footer_2 );

        $args_footer_3 = array(
            'name'          => __('Колонка подвала 3'),
            'id'            => 'footer-top-column-3',
            'description'   => '',
            'class'         => '',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="widget-header"><h2 class="widget-title">',
            'after_title'   => '</h2></div>',
        );

        register_sidebar( $args_footer_3 );

    }

    public function prizrak_footer_style() {
        $suffix = (WP_DEBUG === true) ? '' : '.min';
        wp_enqueue_style('prizrak-footer', get_template_directory_uri() . '/assets/css/footer' .$suffix . '.css',array(),wp_get_theme()->get( 'Version'));
    }

    public function prizrak_common_js() {
        $suffix = (WP_DEBUG === true) ? '' : '.min';
        wp_enqueue_script('prizrak-common', get_template_directory_uri() . '/assets/js/common' .$suffix . '.js' , array('jQuery'),wp_get_theme()->get( 'Version' ), true);
    }

}

