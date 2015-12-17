<?php get_header(); ?>

<div class="container">
	<div class="content-box content-single">
		<?php if (!have_posts()) : ?>
			<div class="alert-error">
				<p><?php _e('Sorry, no results were found.', 'directory_starter'); ?></p>
			</div>
			<?php get_search_form(); ?>
		<?php endif; ?>
		<?php
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			// Previous/next post navigation.
			the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'directory_starter' ) . '</span> ' .
							'<span class="screen-reader-text">' . __( 'Next post:', 'directory_starter' ) . '</span> ' .
							'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'directory_starter' ) . '</span> ' .
							'<span class="screen-reader-text">' . __( 'Previous post:', 'directory_starter' ) . '</span> ' .
							'<span class="post-title">%title</span>',
			) );

			// End the loop.
		endwhile;
		?>
	</div>
</div>

<?php get_footer(); ?>