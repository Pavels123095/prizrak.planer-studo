<?php 



require_once TEMPLATEPATH .'/inc/customizer/prizrak-customizer.php';
new Prizrak_Customizer();

require_once TEMPLATEPATH .'/inc/prizrak-sidebar.php';
new Prizrak_Sidebar();


// templates settings and functions themes
require_once TEMPLATEPATH .'/inc/prizrak-template.php';



require_once TEMPLATEPATH .'/inc/prizrak-header.php';
new Prizrak_Header();

require_once TEMPLATEPATH .'/inc/prizrak-footer.php';
new Prizrak_Footer();

// the_post_thumbnails is first the content
function prizrak_minify_thumbnail($post = 0, $default_src = '/assets/img/logo-this-my.png') {

    if( ! $post || ! is_object($post) )
        $post = get_post($post);

    // если у записи есть миниатюра
    if( $thumbnail_id = get_post_meta( $post->ID, '_thumbnail_id', true ) )
        if( $src = wp_get_attachment_url( $thumbnail_id ) )
            return $src;

    // миниатюры нет, ищем в контенте
    preg_match('/<img[^>]+src=[\'"]([^\'"]+)[\'"][^>]*>/i', $post->post_content, $match );

    if( ! $match )
        return get_stylesheet_directory_uri().$default_src;

    return $match[1];
}   

function prizrak_get_post_view() {
	$count  = get_post_meta( get_the_ID(), 'post_views_count', true );
	$return = ( empty( $count ) ) ? 0 : $count;

	return  ' <i class="far fa-eye"></i> '.$return;
}

function prizrak_set_post_view() {
	$key     = 'post_views_count';
	$post_id = get_the_ID();
	$count   = (int) get_post_meta( $post_id, $key, true );
	$count ++;
	update_post_meta( $post_id, $key, $count );
}

function prizrak_posts_column_views( $columns ) {
	$columns['post_views'] = 'Views';

	return $columns;
}

function prizrak_posts_custom_column_views( $column ) {
	if ( $column === 'post_views' ) {
		echo prizrak_get_post_view();
	}
}

add_filter( 'manage_posts_columns', 'prizrak_posts_column_views' );
add_action( 'manage_posts_custom_column', 'prizrak_posts_custom_column_views' );
add_action( 'prizrak_single_content_before', 'prizrak_set_post_view' );

?>