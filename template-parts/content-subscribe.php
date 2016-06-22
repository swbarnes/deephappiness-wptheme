<?php
/**
 * Template part for displaying about-blog section in page-home.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Deep_Happiness
 */

// Advanced Custom Fields
$subscribe_heading		= get_field( 'subscribe_heading' );
$subscribe_introduction	= get_field( 'subscribe_introduction' );

?>
<!-- Main content -->
<div class="container">
	<div class="row" id="primary">
		<main class="col-sm-12" id="content">
			<section class="section-header">
				<h1 class="page-title"><?php echo $subscribe_heading; ?></h1>
			</section>

			<section class="main-content">

			<?php if ( !empty($subscribe_introduction) ) : ?>
				<p class="lead text-center"><?php echo $subscribe_introduction; ?></p>
			<?php endif; ?>

				<!-- Begin MailChimp Signup Form -->
				<div id="mc_embed_signup">
					<form role="form"  action="//deephappiness.us13.list-manage.com/subscribe/post?u=0fba3a67c4dba8aee0b420a13&amp;id=c0e2b7616a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate clearfix" target="_blank" novalidate>
						<div class="row">
							<div class="col-sm-6 col-sm-offset-3">
								<div class="mc-field-group form-group">
									<label class="sr-only" for="mce-FNAME">Your first name</label>
									<input type="text" class="form-control input-lg" value="" name="FNAME" id="mce-FNAME" placeholder="Your first name">
								</div><!-- .form-group -->
							</div><!-- .col -->
						</div><!-- .row -->

						<div class="row">
							<div class="col-sm-6 col-sm-offset-3">
								<div class="mc-field-group form-group">
									<label class="sr-only" for="mce-EMAIL">and your email address</label>
									<input type="email" class="form-control input-lg" value="" name="EMAIL" id="mce-EMAIL" placeholder="and your email address">
								</div><!-- .form-group -->
							</div><!-- .col -->
						</div><!-- .row -->

						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>
						<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0fba3a67c4dba8aee0b420a13_c0e2b7616a" tabindex="-1" value=""></div>

						<div class="row">
							<div class="col-sm-6 col-sm-offset-3">
								<input type="submit" class="btn btn-lg btn-danger" value="Subscribe &raquo;" name="subscribe" id="mc-embedded-subscribe">
							</div><!-- .col -->
						</div><!-- .row -->
						<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
						<script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
					</form>
				</div><!--#mc_embed_signup -->
				<!-- End MailChimp Signup Form -->
	
			</section><!-- .main-content -->

		</main><!-- #content .col -->
	</div><!-- #primary .row -->
</div><!-- .container -->
