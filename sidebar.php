<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package hhp
 */
?>
			</div><!-- #content -->
		</div><!-- /.col-md-7 -->
		<div class="col-md-3 col-md-pull-7">
			<div id="secondary" class="widget-area" role="complementary">
				<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

					<aside id="search" class="widget widget_search">
						<?php get_search_form(); ?>
					</aside>

					<aside id="archives" class="widget">
						<h1 class="widget-title"><?php _e( 'Archives', 'hhp' ); ?></h1>
						<ul>
							<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
						</ul>
					</aside>

					<aside id="meta" class="widget">
						<h1 class="widget-title"><?php _e( 'Meta', 'hhp' ); ?></h1>
						<ul>
							<?php wp_register(); ?>
							<li><?php wp_loginout(); ?></li>
							<?php wp_meta(); ?>
						</ul>
					</aside>

				<?php endif; // end sidebar widget area ?>
			</div><!-- #secondary -->
		</div><!-- /.col-md-3 -->

<?php get_template_part( 'inc/hhpnav'); ?>

	</div><!-- /.row -->
</div><!-- /.container-fluid -->
