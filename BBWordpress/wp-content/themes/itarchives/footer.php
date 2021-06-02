<?php
// bb_ 쿠팡광고

// <div>
// 	<script src="https://ads-partners.coupang.com/g.js"></script>
// 	<script>
// 		new PartnersCoupang.G({"id":479806,"template":"carousel","trackingCode":"AF3087228","width":"1000","height":"300"});
// 	</script>
// 	<script>
// 		new PartnersCoupang.G({"id":479805,"template":"carousel","trackingCode":"AF3087228","width":"1000","height":"300"});
// 	</script>
// 	<script>
// 		new PartnersCoupang.G({"id":479807,"template":"carousel","trackingCode":"AF3087228","width":"1000","height":"300"});
// 	</script>
// </div>
?>

<?php // bb_ 쿠팡광고(2) ?>
<?php /*if ( !is_home() ) :*/ ?>
<div style="margin: 0 auto; width: 100%; max-width: 1200px;">
	<div style="margin-top: 40px;">
		<script src="https://ads-partners.coupang.com/g.js"></script>
		<script>
			new PartnersCoupang.G({"id":461029,"template":"carousel","trackingCode":"AF3087228","width":"1200","height":"140"});
		</script>
		<style>
			iframe {
				margin-bottom: 0px;
			}
		</style>
	</div>
</div>
<?php /*endif;*/ ?>


<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif;

				get_template_part( 'template-parts/footer/site', 'info' );
				?>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
