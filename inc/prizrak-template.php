<?php 
    if ( ! function_exists( 'prizrak_template_social' ) ) {
        function prizrak_template_social( $container_class = '', $elements_class = '' ) {
            $icons = array(
                array(
                    'link' => '#',
                    'icon' => '<i class="fab fa-twitter"></i>'
                ),
                array(
                    'link' => '#',
                    'icon' => '<i class="fab fa-instagram"></i>'
                ),
                array(
                    'link' => '#',
                    'icon' => '<i class="fab fa-facebook-f"></i>'
                ),
                array(
                    'link' => '#',
                    'icon' => '<i class="fab fa-youtube"></i>'
                ),
                array(
                    'link' => 'https://vk.com/prizrak12309',
                    'icon' => '<i class="fab fa-vk"></i>'
                ),
            );
    
            $list = '';
            foreach ( $icons as $icon ) {
                $list .= '<li class="' . $elements_class . '"><a href="' . $icon['link'] . '">' . $icon['icon'] . '</a></li>';
            }
    
            return '<ul class="' . $container_class . '">' . $list . '</ul>';
        }
    }

    function prizrak_header_single() { ?>

        <div class="prizrak-single-header">
            <h2 class="prizrak-single-title"><?php the_title(); ?></h2>
        </div>
        <div class="prizrak-single-meta">
            <ul class="prizrak-layout-inline-template">
                <li><i class="fa fa-user"></i> <?php the_author(); ?></li>
            </ul>
        </div>

    <?php }

    add_action('wp_enqueue_scripts', 'prizrak_fontawesome',10);
    add_theme_support( 'post-thumbnails' );

    function prizrak_fontawesome() {
        $suffix = (WP_DEBUG === true) ? '' : '.min';
        wp_enqueue_style('prizrak-fontawesome', get_template_directory_uri() .'/assets/lib/fontawesome/css/all' .$suffix . '.css',array(),wp_get_theme()->get( 'Version'));
    }

?>