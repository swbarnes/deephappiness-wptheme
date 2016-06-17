<?php
/**
 * Template Name: Home Page
 *
 * The template for displaying the landing page or homepage.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Deep_Happiness
 */

// Advanced Custom Fields
$optin_lead_paragraph		= get_field( 'optin_lead_paragraph' );
$about_blog_headline		= get_field( 'about_blog_headline' );
$about_blog_introduction	= get_field( 'about_blog_introduction' );
$about_blog_content			= get_field( 'about_blog_content' );
$free_report_image			= get_field( 'free_report_image' );
$free_report_introduction	= get_field( 'free_report_introduction' );
$free_report_title			= get_field( 'free_report_title' );
$free_report_subtitle		= get_field( 'free_report_subtitle' );
$free_report_button_text	= get_field( 'free_report_button_text' );
$about_me_headline			= get_field( 'about_me_headline' );
$about_me_introduction		= get_field( 'about_me_introduction' );
$about_me_content			= get_field( 'about_me_content' );

get_header(); ?>

<!-- Opt-in -->
<section id="opt-in">
	<div class="container">
		<div class="row">
			
			<div class="col-sm-12">
				<p class="lead text-center"><?php echo $optin_lead_paragraph; ?></p>
			</div><!-- .col -->

		</div><!-- .row -->

		<div class="row">
				<div class="col-sm-8 col-sm-offset-2 text-center">
				<!-- Begin MailChimp Signup Form -->
					<div id="mc_embed_signup">
						<form class="form-inline" role="form" action="//deephappiness.us13.list-manage.com/subscribe/post?u=0fba3a67c4dba8aee0b420a13&amp;id=c0e2b7616a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							<div id="mc_embed_signup_scroll">
								<div class="mc-field-group form-group">
									<label class="sr-only" for="mce-FNAME">Your first name </label>
									<input type="text" value="" class="form-control" name="FNAME" class="" id="mce-FNAME" placeholder="Your first name">
								</div>
								<div class="mc-field-group form-group">
									<label class="sr-only" for="mce-EMAIL">and your email</label>
									<input type="email" value="" class="form-control" name="EMAIL" id="mce-EMAIL" placeholder="and your email">
								</div>
								<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0fba3a67c4dba8aee0b420a13_c0e2b7616a" tabindex="-1" value=""></div>
								<div id="mc-subscribe-btn" class="form-group">
									<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-danger">
								</div>
							</div>
						</form>
					</div>
					<!--End mc_embed_signup-->
				</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- #opt-in -->

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

<!-- About Me -->
<section id="about-me">
	<div class="container">

		<div class="section-header">
			<h2><?php echo $about_me_title; ?></h2>
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

<?php
get_footer();
