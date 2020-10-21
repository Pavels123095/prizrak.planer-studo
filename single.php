<?php get_header();
the_post(); ?>
    <div class="prizrak-layout-content prizrak-layout-row">

        <main class="prizrak-main prizrak-main-reported prizrak-layout-column">
            <?php prizrak_header_single(); ?>
            <?php prizrak_content_single(); ?>
            <?php prizrak_footer_single(); ?>
        </main>

        <aside class="prizrak-sidebar-reported prizrak-layout-column">
            <?php get_sidebar(); ?>
        </aside>

    </div>

<?php get_footer(); ?>