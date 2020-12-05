<?php get_header(); ?>
    <div class="prizrak-layout-content prizrak-layout-row">

        <main class="prizrak-main prizrak-main-reported prizrak-layout-column">
            <div class="prizrak-home-loop-content">
                <?php
                    while (have_posts()) : the_post();
                        require TEMPLATEPATH .'/templates/home/post.php';
                    endwhile; wp_reset_postdata();
                ?>
            </div>
        </main>

        <aside class="prizrak-sidebar-reported prizrak-layout-column">
            <?php get_sidebar(); ?>
        </aside>

    </div>

<?php get_footer(); ?>