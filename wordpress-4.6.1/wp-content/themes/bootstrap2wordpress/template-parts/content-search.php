<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bootstrap_to_WordPress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ) , '</a></h3>'); ?>
		<?php
		if ( 'post' === get_post_type() ) : ?>
		<div class="post-details">
			<i class="fa fa-user"></i> <?php the_author(); ?>
			<i class="fa fa-clock-o"></i><time><?php the_date(); ?></time>
			<i class="fa fa-folder"></i><?php the_category(', '); ?>
			<i class="fa fa-tags"></i><?php the_tags(); ?>

			<div class="post-comments-badge">
				<a href="<?php comments_link(); ?>"><i class="fa fa-comment"></i> <?php comments_number(0, 1, '%'); ?></a>
			</div><!-- post-comments-badge -->
				<?php edit_post_link( 'Edit', '<i class="fa fa-pencil"></i>', '' ); ?>
		</div><!-- post-details -->
	<?php endif; ?>
	</header><!-- .entry-header -->


<?php if ( has_post_thumbnail() ) { ?>
	<div class="post-image">
		<?php the_post_thumbnail(); ?>
	</div><!-- post-image -->
<?php } ?>

	<!-- <div class="post-excerpt">
		<?php the_excerpt(); ?>
	</div><! post-excerpt -->

	<?php if ( is_single() ) { // check for single or excerpt mode ?>
	<div class="post-body"><?php echo the_content(); ?></div>
	<?php } else { ?>
	<div class="post-excerpt"><?php echo the_excerpt(); ?></div>
	<?php } ?>

</article><!-- #post-## -->
