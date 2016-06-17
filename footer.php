<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Deep_Happiness
 */

?>

<?php wp_footer(); ?>

<!-- Footer -->
<footer>
	<div class="container">
		<div class="row">
			
			<div class="col-sm-3">
				<p><a href="/"><img src="<?php bloginfo( 'template_directory' ); ?>/img//footer-logo.png" alt="Deep Happiness"></a></p>
			</div><!-- .col -->

			<div class="col-sm-6">
				<nav>
					<ul class="list-unstyled list-inline">
						<li><a href="/">Home</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="contact.html">Contact</a></li>
						<li class="subscribe-link"><a href="/subscribe">Free Report</a></li>
					</ul>
				</nav>
			</div><!-- .col -->

			<div class="col-sm-3">
				<p class="pull-right copyright-text">&copy; 2016 Jonathan Hinek</p>
			</div><!-- .col -->

		</div><!-- .row -->
	</div><!-- .container -->
</footer><!-- footer -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery-1.11.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php bloginfo( 'template_directory' ); ?>/js/bootstrap.min.js"></script>

</body>
</html>
