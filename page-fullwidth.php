<?php
/**
 * Template Name: Full-width Template
 */

get_header(); ?>

<!-- Main content -->
<div class="container">
	<div class="row" id="primary">
		<main class="col-sm-12" id="content">

			<section class="main-content">

				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>						
				<?php endwhile; ?>
				
			</section><!-- .main-content -->

		</main><!-- #content .col -->
	</div><!-- #primary .row -->
</div><!-- .container -->

<?php
get_footer();
