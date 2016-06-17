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
$optin_lead_paragraph		= get_field('optin_lead_paragraph');
$about_blog_headline		= get_field('about_blog_headline');
$about_blog_introduction	= get_field('about_blog_introduction');
$about_blog_content			= get_field('about_blog_content');

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
				<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/happier-now.jpg" alt="book cover for 'Happier Now, 21 proven techniques to improve your outlook instantly'">
			</div>
			<div class="col-sm-9 report-ad">
				<p class="lead text-center">Subscribe today to receive our free report </p>
				<p class="lead text-center report-title">Happier Now <br>21 Proven Techniques to Improve Your Outlook Instantly</p>
				<p class="text-center"><a class="btn btn-lg btn-danger" href="/subscribe">Subscribe Now &raquo;</a></p>
			</div>
		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- #happier-now -->

<!-- About Me -->
<section id="about-me">
	<div class="container">

		<div class="section-header">
			<h2>Okay, so you want to know a bit more about where I'm coming from…</h2>
		</div><!-- .section-header -->

		<div class="row">

			<div class="col-sm-8 col-sm-offset-2">

				<p class="lead">It's true that I'm disabled, I have a severe form of muscular dystrophy. It's a progressive, muscle wasting, degenerative disease. My body continues to grow weaker and, someday, my muscular dystrophy will result in my death.</p>

				<p>Among other things, this means that I am confined to a wheelchair and my physical limitations basically result in a form of quadriplegia. My daily routine is dependent upon a caregiver assisting me with things as mundane as brushing my teeth or adjusting my head so I can access the chin controls to my wheelchair. If it weren't for the progress of modern technology, I might be entirely isolated.</p>

				<p>With that said, I would definitely not characterize myself as someone with a poor quality of life. There are always things to be grateful for, and I delight in them daily. For example, my beautiful partner who cares for me. We love each other profoundly and have been together for more than 20 years.</p>

				<p>While I believe in optimism and gratitude, I do want to make it clear that I don't believe in rose-colored glasses or new age nonsense. I'm not looking to make us all shiny-happy people.</p>

				<p>Happiness can be found in real assessments of what's going on all around you. Because, often, our emotional state is based on a warped sort of cognitive illusion. Negative emotional reactions are often disproportionate to what we are actually facing.</p>

				<p>These disproportionate reactions are rarely productive. Being aware of this tendency is the first step. Being aware that negative emotions are transient and often unproductive can allow you to begin seeing them in a new light.</p>

				<p>When you start to recognize your own patterns of negative thoughts and emotions, then you are already halfway liberated from them.</p>

				<p>I know something about this and, while I may still occasionally struggle, there are insights I can share that are scientifically backed,  that work for me, and have worked for people I know. If you're interested in learning more, <a href="/subscribe">please subscribe to my free newsletter and get my Happier Now report</a>.</p>
			</div><!-- .col -->

		</div><!-- .row -->

	</div><!-- .container -->
</section><!-- #about-me -->

<?php
get_footer();
