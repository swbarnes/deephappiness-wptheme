<?php
/**
 * Template part for displaying opt-in mailchimp form content in page-home.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Deep_Happiness
 */

// Advanced Custom Fields
$optin_lead_paragraph		= get_field( 'optin_lead_paragraph' );

?>

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
