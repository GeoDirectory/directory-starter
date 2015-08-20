<?php get_header(); ?>

<div class="container">
	<div class="content-box content-single">
		<?php if (!have_posts()) : ?>
			<div class="alert-error">
				<p><?php _e('Sorry, no results were found.', DIRECTORY_THEME); ?></p>
			</div>
			<?php get_search_form(); ?>
		<?php endif; ?>
		<?php
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content' );

			// End the loop.
		endwhile;

		// Previous/next page navigation.
		the_posts_pagination( array(
			'prev_text'          => __( 'Previous', DIRECTORY_THEME ),
			'next_text'          => __( 'Next', DIRECTORY_THEME ),
		) );
		?>
	</div>
</div>

<?php get_footer(); ?>