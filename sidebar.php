<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Mog
 * @since Mog 1.0
 */
?>
		<div id="secondary" class="widget-area" role="complementary">
				<aside id="search" class="widget widget_search">
					<?php /* get_search_form(); */ ?>
				</aside>
			<?php do_action( 'before_sidebar' ); ?>
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
				<aside id="archives" class="widget">
					<h1 class="widget-title"><?php _e( 'Archives', 'mog' ); ?></h1>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget">
					<h1 class="widget-title"><?php _e( 'Meta', 'mog' ); ?></h1>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

				<div style="clear:both;"></div>

			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->
