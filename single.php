<?php get_header(); ?>

<?php if (!have_posts()) : ?>
	<div class="alert alert-warning">
		<?php _e('Sorry, no results were found.', DIRECTORY_THEME); ?>
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

	// End the loop.
endwhile;
?>

<?php get_footer(); ?>