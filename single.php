<?php
/*
 * Template Name: Post Template
 * Template Post Type: page, post
 */
get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section>


		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <a class="call" href="/">Don't wait! <span>Click here</span> to get your no-obligation life insurance quote in seconds!</a>

                <div class="block">
			
			    <h1><?php the_title(); ?></h1>

				<?php the_content(); ?>
				

				<?php edit_post_link(); ?>

                </div>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>
<?php get_footer(); ?>
