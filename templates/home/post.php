<article class="prizrak-home-loop-post prizrak-loop-post prizrak-post-<?php the_ID(); ?>">
    <div class="prizrak-loop-post-content">
        <div class="prizrak-loop-post-title">
            <h4><?php the_title(); ?></h4>
        </div>
        <div class="prizrak-home-loop-post-thumbnail">
            <img class="img-responsive" src="<?php echo prizrak_minify_thumbnail(); ?>" alt="<?php the_title(); ?>-thumbnail">
        </div>
        <div class="prizrak-loop-excerpt">
            <?php the_excerpt(); ?>
        </div>
        <div class="prizrak-loop-meta">
            <ul class="prizrak-layout-inline-template">
                <li>
                    <time> <?php echo get_the_date('d% m% Y% h:i'); ?></time>
                </li>
                <li><?php echo prizrak_get_post_view(); ?></li>
                <li>
                    <span>Автор:  <strong><?php the_author(); ?></strong></span>
                </li>
            </ul>
        </div>
        <div class="prizrak-loop-link-more">
            <a href="<?php the_permalink(); ?>">
                <span>Подробнее</span> <i></i>
            </a>
        </div>
    </div>
</article>