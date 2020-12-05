                <footer id="footer_first" class="prizrak-footer-wrapper" itemscope itemtype="https://schema.org/WPFooter" >
                    <div class="prizrak-footer-tops-wrapper">
                        <div class="prizrak-footer-top prizrak-layout-container">
                            <div class="prizrak-footer-top-content prizrak-layout-row">
                                <div class="footer-top-column-1 prizrak-footer-top-column prizrak-layout-column">
                                    <?php dynamic_sidebar( 'footer-top-column-1' ); ?>
                                </div>
                                <div class="footer-top-column-2 prizrak-footer-top-column prizrak-layout-column">
                                    <?php dynamic_sidebar( 'footer-top-column-2' ); ?>
                                </div>
                                <div class="footer-top-column-3 prizrak-footer-top-column prizrak-layout-column">
                                    <?php dynamic_sidebar( 'footer-top-column-3' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prizrak-footer-copyright-wrapper">
                        <div class="prizrak-footer-copyright prizrak-layout-container">
                            <div class="prizrak-footer-copyright-content prizrak-layout-row">
                                <div class="prizrak-footer-copyright-text prizak-layout-column">
                                    <span><?php echo get_theme_mod('text-copyrights'); ?></span>
                                    <span>&copy; <?php echo date("Y"); ?> - 
                                        <a class="prizrak-footer-link" href="<?php echo esc_html('/'); ?>">
                                            <?php bloginfo('title'); ?></a> - <?php bloginfo('description'); ?>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>