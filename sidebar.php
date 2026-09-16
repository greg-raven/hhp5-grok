<?php
/**
 * Primary widget area. Grid close tags live in footer.php.
 *
 * @package hhp
 */

if ( ! empty( $GLOBALS['hhp_sidebar_rendered'] ) ) {
    return;
}
$GLOBALS['hhp_sidebar_rendered'] = true;
?>
        <div class="col-md-3 col-md-pull-7">
            <div id="secondary" class="widget-area" role="complementary">
                <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

                    <aside id="search" class="widget widget_search">
                        <?php get_search_form(); ?>
                    </aside>

                    <aside id="archives" class="widget">
                        <h4 class="widget-title"><?php esc_html_e( 'Archives', 'hhp' ); ?></h4>
                        <ul>
                            <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
                        </ul>
                    </aside>

                    <aside id="meta" class="widget">
                        <h4 class="widget-title"><?php esc_html_e( 'Meta', 'hhp' ); ?></h4>
                        <ul>
                            <?php wp_register(); ?>
                            <li><?php wp_loginout(); ?></li>
                            <?php wp_meta(); ?>
                        </ul>
                    </aside>

                <?php endif; ?>
            </div><!-- #secondary -->
        </div><!-- /.col-md-3 -->
