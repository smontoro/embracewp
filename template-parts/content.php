<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Embrace
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			
			<div class="post-details">
				<i class="fa fa-user"></i> <?php the_author(); ?>
				<i class="fa fa-clock-o"></i> <time><?php the_time(); ?></time>
				<i class="fa fa-folder"></i> <?php the_category(', '); ?>
				<i class="fa fa-tags"></i> <?php the_tags($before, $sep, $after); ?>

				<div class="post-comments-badge">
					<a href="#"><i class="fa fa-comments"></i> <?php comments_number(0, 1, '%'); ?></a>
				</div>				

				<div><?php edit_post_link('Edit', '<div><i class="fa fa-pencil"></i>', '</div>' ); ?></div>
			</div><!-- /post details -->



		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php embrace_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'embrace' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'embrace' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php embrace_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
