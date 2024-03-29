<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bootstrap_to_WordPress
 */

get_header(); ?>

	<!-- <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main"> -->

		<section class="feature-image feature-image-default-alt" data-type="background" data-speed="4">

		<?php
		if ( have_posts() ) : ?>
			<!-- <header class="page-header"> -->
			<?php
				the_archive_title( '<h1 class="page-title">', '' );
					the_archive_description( '<small class="taxonomy-description">', '</small></h1>' );
			?>
			<!-- </header><! .page-header -->
</section>

<div class="container">
	<div id="primary" class="row">
		<main id="content" class="col-sm-8">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- content -->

		<!-- SIDEBAR -->
		<aside class="col-sm-4">
			<?php get_sidebar(); ?>

		</aside>

	</div><!-- primary -->
</div><!-- container -->


		<!-- </main><! #main
	</div><! #primary --> -->

<?php
get_footer();
