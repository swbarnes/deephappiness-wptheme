<?php
/**
 * Template part for displaying free report banner content in page-home.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Deep_Happiness
 */

// Advanced Custom Fields
$free_report_image			= get_field( 'free_report_image' );
$free_report_introduction	= get_field( 'free_report_introduction' );
$free_report_title			= get_field( 'free_report_title' );
$free_report_subtitle		= get_field( 'free_report_subtitle' );
$free_report_button_text	= get_field( 'free_report_button_text' );

?>

<!-- Happier Now Banner -->
<section id="happier-now">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 report-cover">
			<?php if ( !empty($free_report_image) ) : // If user uploaded an image ?>
				<img src="<?php echo $free_report_image['url']; ?>" alt="<?php echo $free_report_image['alt']; ?>">
			<?php endif; ?>
			</div>
			<div class="col-sm-9 report-ad">
				<p class="lead text-center"><?php echo $free_report_introduction; ?></p>
				<p class="lead text-center report-title"><?php echo $free_report_title; ?> <br><?php echo $free_report_subtitle; ?></p>
				<p class="text-center"><a class="btn btn-lg btn-danger" href="/subscribe"><?php echo $free_report_button_text; ?> &raquo;</a></p>
			</div>
		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- #happier-now -->
