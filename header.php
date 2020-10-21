<?php
// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
		<?php wp_head(); ?>
    </head>
<body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
<?php wp_body_open(); ?>
<div class="prizrak-site-wrappers">
    <div class="prizrak-site-container prizrak-layout-container">
        <header id="header_first" class="prizrak-header-wrapper" itemscope itemtype="http://schema.org/WPHeader">
            <div class="prizrak-times prizrak-layout-row prizrak-layout-container">
                <?php setlocale( LC_TIME, 'ru_RU.UTF-8' ); ?>
                <div class="prizrak-title-website prizrak-layout-column">
                    <h1 class="prizrak-title"><a href="<?php echo home_url(); ?>"><?php echo bloginfo('title'); ?></a></h1>
                </div>
                <div class="prizrak-time prizrak-layout-column">
                    <a href="javascript.void(0);">
                        <time><?php echo strftime( '%A,  %B  %d,  %G' ); ?></time>
                    </a>
                </div>
                <div class="prizrak-social-group prizrak-layout-column">
                    <?php echo prizrak_template_social('prizrak-layout-inline-template'); ?>
                </div>
            </div>
            <div class="prizrak-additional-wrapper">
                <div class="prizrak-additional prizrak-layout-container">
                    <div class="prizrak-additional-content prizrak-layout-row">
                        <div class="prizrak-layout-logos prizrak-layout-column">
                            <a class="prizrak-logos-title" href="<?php echo esc_html('/'); ?>">  
                                <?php if (!empty(has_custom_logo())):
                                     echo has_custom_logo(); 
                                endif; ?>
                            </a>  
                        </div>
                    </div>
                </div>
            </div>
            <div class="prizrak-navigation-wrapper">
                <div class="prizrak-navigation prizrak-layout-container">
                    <div class="prizrak-navigation-content prizrak-layout-row">
                        <div class="prizrak-navigation-menu prizrak-layout-column">
                            <?php 
                                wp_nav_menu( array(
                                    'theme_location'  => 'header_primary_menu',
                                    'menu'            => '', 
                                    'container'       => false,
                                    'menu_class'      => 'prizrak-header-primary-menu', 
                                    'before'          => '',
                                    'after'           => '',
                                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                ));
                            ?>
                        </div>
                        <div class="prizrak-navigation-searchform prizrak-layout-column">
                            <?php echo get_search_form(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>

