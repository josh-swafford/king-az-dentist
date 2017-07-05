<?php
/**
 * The template used for displaying child page on the grid template.
 *
 * @package Sela
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'child-page' ); ?>>
	<?php if ( '' != get_the_post_thumbnail() ) : ?>
	<div class="entry-thumbnail">
		<?php /** comment out original link
			 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="<?php the_ID(); ?>"> 
        **/ ?>
			<?php the_post_thumbnail( 'sela-grid-thumbnail' ); ?>
	    <?php /** </a> **/ ?>
	</div><!-- .entry-thumbnail -->
	<?php endif; ?>

	<header class="entry-header">
		<h1 class="entry-title"><?php /** comment out link <a href="<?php the_permalink(); ?>" rel="bookmark"> </a> **/ ?><?php the_title(); ?> </h1>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<?php edit_post_link( __( 'Edit', 'sela' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->