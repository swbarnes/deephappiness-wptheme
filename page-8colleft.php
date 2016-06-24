<?php
/**
 * Template Name: Left Main Column With Sidebar
 */

get_header(); ?>

<!-- Main content -->
<div class="container">
	<div class="row" id="primary">
		<main class="col-sm-8" id="content" role="main">

			<section class="main-content">

				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>						
				<?php endwhile; ?>
				
			</section><!-- .main-content -->

		</main><!-- #content .col -->

		<?php get_sidebar(); ?>
		
	</div><!-- #primary .row -->
</div><!-- .container -->

<?php
get_footer();