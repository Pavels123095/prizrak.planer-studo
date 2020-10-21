<?php get_header(); ?>
    <div class="prizrak-layout-content prizrak-layout-row">
        
        <?php do_action('prizrak_content_after'); ?>
            <main class="prizrak-main-reported prizrak-layout-column">
                
            </main>
        <?php do_action('prizrak_content_before'); ?>

        <aside class="prizrak-sidebar-reported prizrak-layout-column">
            <?php get_sidebar(); ?>
        </aside>
        
    </div>

<?php get_footer(); ?>