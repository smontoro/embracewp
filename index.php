<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Embrace
 */

get_header();
?>


	<header class="blog-hero" id="blog-hero-wrapper">
		<h1 class="text-white">Salon News</h1>
		<hr class="white-hr">
	</header>


 <!-- BLOG CONTENT
 ======================================= -->
 <div class="blog-body">
    <div class="container py-5">
      	<div class="row">



			
		<?php 
			while(have_posts()) {
				the_post(); ?>

				<div class="blog-post card mb-4 col-sm-8">

           			 <div class="card-body">
						<h2><a href="<?php the_permalink(); ?>" class="card-title"><?php the_title(); ?></a></h2>
						<p class="card-text">Posted by <?php the_author_posts_link(); ?> in <?php echo get_the_category_list(' | '); ?> on <?php the_time('n-j-y'); ?></p>
					<div class="card-img-top">
						<?php embrace_post_thumbnail(); ?>
					</div>
						<p><?php the_excerpt(); ?></p>
						<a href="#" class="btn btn-outline-dark">Read More &rarr;</a>
					 </div><!--/card-body-->

					 <div class="card-footer text-muted">
					 	Posted on January 1, 2017 by
             			<a href="#"a>Start Bootstrap</a>
					 </div><!--/card-footer-->
				</div><!--/card -->

				<!-- SIDEBAR
 ======================================= -->
 <aside class="col-sm-3 ml-5">
 	<?php get_sidebar(); ?>
 </aside>


			<?php }

			echo paginate_links();
		?>	
	








		</div><!-- /row -->
	</div><!-- /container-->
</div>

<?php

get_footer(); ?>
