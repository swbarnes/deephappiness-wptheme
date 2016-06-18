<?php
/**
 * Template part for displaying about-blog section in page-home.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Deep_Happiness
 */

// Advanced Custom Fields
$about_blog_headline		= get_field( 'about_blog_headline' );
$about_blog_introduction	= get_field( 'about_blog_introduction' );
$about_blog_content			= get_field( 'about_blog_content' );

?>

<!-- #main for screen readers -->
<div id="main">

<!-- About Blog -->
<section id="about-blog" role="main">
	<div class="container">

		<div class="section-header">
			<h2><?php echo $about_blog_headline; ?></h2>
		</div><!-- .section-header -->

		<div class="row">

			<div class="col-sm-8 col-sm-offset-2">
			<?php if( !empty($about_blog_introduction) ) : ?>
				<p class="lead"><?php echo $about_blog_introduction; ?></p>
			<?php endif; ?>

				<?php echo $about_blog_content; ?>
			</div><!-- .col -->

		</div><!-- .row -->

	</div><!-- .container -->
</section><!-- #about-blog -->

</div><!-- closing #main for screen readers -->