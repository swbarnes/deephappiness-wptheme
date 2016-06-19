<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Deep_Happiness
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			}

		if ( 'post' === get_post_type() ) : ?>

		<div class="post-details">
			<i class="fa fa-user"></i> <?php the_author(); ?>
			<i class="fa fa-clock-o"></i> <time><?php the_date(); ?></time>
			<i class="fa fa-folder-open"></i> <?php the_category( ', ' ); ?>
			<?php the_tags( '<i class="fa fa-tags"></i> ', ', ', '' ); ?>
			<i class="fa fa-comments"></i> <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>

			<?php edit_post_link( 'Edit', '<i class="fa fa-pencil"></i> ', '' ); ?>
		</div><!-- post-details -->

		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<?php if ( has_post_thumbnail() ) : ?>
	<div class="post-image">
		<?php the_post_thumbnail(); ?>
	</div><!-- post-image -->
	<?php endif; ?>

	<?php if ( is_single() ) : // is this the full post? ?>

	<div class="post-body">
		<?php the_content(); ?>
	</div><!-- post-body -->

	<?php else : // this is the excerpt ?>

	<div class="post-excerpt">
		<?php the_excerpt(); ?>
	</div><!-- post-excerpt -->

	<?php endif; ?>
</article><!-- #post-## -->
