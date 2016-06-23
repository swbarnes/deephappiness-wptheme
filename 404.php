<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Deep_Happiness
 */

get_header(); ?>

<div class="container">
	<div class="row" id="primary">
			
		<main id="content" class="col-sm-8" role="main">

			<section class="error-404 not-found">
				<div class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'deephappiness' ); ?></h1>
					<small><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'deephappiness' ); ?></small>
				</div><!-- .page-header -->

				<div class="page-content">

					<h2 class="404-suggest">How about a few suggestions?</h2>

					<?php
						// Only show the widget if site has multiple categories.
						if ( deephappiness_categorized_blog() ) :
					?>

					<div class="widget widget_categories">
						<h4 class="widget-title"><?php esc_html_e( 'Check Out Our Most Used Categories', 'deephappiness' ); ?></h4>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->

					<?php
						endif;

						the_widget( 'WP_Widget_Archives', 'title=Look Through Our Archives&dropdown=1', 'before_title=<h4 class="widget-title">&after_title=</h4>' );
					?>

					<h2>Try searching for what you need</h2>

					<?php get_template_part( 'template-parts/content', 'large_search_form' ); ?>


				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->

		<?php get_sidebar(); ?>

	</div><!-- #primary -->
</div><!-- .container -->

<?php
get_footer();
