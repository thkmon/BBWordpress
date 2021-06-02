<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php // bb_ 쿠팡광고(1) ?>
	<?php if ( !is_home() ) : ?>
	<div style="margin-bottom: 40px;">
		<script src="https://ads-partners.coupang.com/g.js"></script>
		<script>
			new PartnersCoupang.G({"id":479802,"template":"carousel","trackingCode":"AF3087228","width":"1000","height":"140"});
		</script>
		<style>
			iframe {
				margin-bottom: 0px;
			}
		</style>
	</div>
	<?php endif; ?>
	
	<?php
	if ( is_sticky() && is_home() ) :
		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;
	?>
	<header class="entry-header">
		<?php
		if ( 'post' === get_post_type() ) {
			echo '<div class="entry-meta">';
				if ( is_single() ) {
					twentyseventeen_posted_on();
				} else {
					echo twentyseventeen_time_link();
					twentyseventeen_edit_link();
				};
			echo '</div><!-- .entry-meta -->';
		};

		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} elseif ( is_front_page() && is_home() ) {
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}
		?>
	</header><!-- .entry-header -->

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>
	
	<?php // bb_ 홈화면에서는 줄 간격 제거 ?>
	<?php if ( is_home() ) : ?>
		<style>
			article {
				padding-bottom: 0px !important;
				margin-bottom: 0px !important;
			}
		</style>
	<?php endif; ?>
	
	<?php // bb_ 홈화면에서는 글 내용 안보이게 처리 ?>
	<?php if ( !is_home() ) : ?>
	<div class="entry-content">
		<?php
		/* translators: %s: Name of current post */
		the_content( sprintf(
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
			get_the_title()
		) );

		wp_link_pages( array(
			'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
			'after'       => '</div>',
			'link_before' => '<span class="page-number">',
			'link_after'  => '</span>',
		) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>
	
	<?php
	if ( is_single() ) {
		twentyseventeen_entry_footer();
	}
	?>
	
</article><!-- #post-## -->
