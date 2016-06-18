<?php
/**
 * Template part for displaying about me section content in page-home.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Deep_Happiness
 */

// Advanced Custom Fields
$about_me_headline			= get_field( 'about_me_headline' );
$about_me_introduction		= get_field( 'about_me_introduction' );
$about_me_content			= get_field( 'about_me_content' );

?>

<!-- About Me -->
<section id="about-me">
	<div class="container">

		<div class="section-header">
			<h2><?php echo $about_me_headline; ?></h2>
		</div><!-- .section-header -->

		<div class="row">

			<div class="col-sm-8 col-sm-offset-2">

			<?php if( !empty($about_me_introduction) ) : ?>
				<p class="lead"><?php echo $about_me_introduction; ?></p>
			<?php endif; ?></p>

				<?php echo $about_me_content; ?>
			</div><!-- .col -->

		</div><!-- .row -->

	</div><!-- .container -->
</section><!-- #about-me -->

