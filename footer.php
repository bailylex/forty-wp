<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package forty_wp
 */

?>

			</div><!-- #main -->

			<!-- Contact plugin -->

			<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<!-- Social menu -->
					<?php
					wp_nav_menu(array(
						'theme_location' => 'social-menu',
						'menu_class'     => 'icons',
						'container'      => false,
						'link_before'    => '<span class="label">',
						'link_after'     => '</span>',
						'fallback_cb'    => false
					));
					?><!-- #social menu -->

					<ul class="copyright">
						<li>&copy; <?php bloginfo('name'); ?></li>
						<li>
							<?php 
							/* translators: 1: Text, 2: Theme author. */
							printf( esc_html__( 'Theme: %1$s by %2$s.', 'forty-wp' ), 'forty-wp', '<a href="https://bailylex.github.io/portfolio/">Alexander Fedorov</a>' );
							?>
						</li>
					</ul>
				</div>
			</footer>
		</div><!-- #wrapper -->	
		<?php wp_footer(); ?>
	</body>
</html>
