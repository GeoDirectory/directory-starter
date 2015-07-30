<?php get_header(); ?>

<?php if (!have_posts()) : ?>
	<div class="alert alert-warning">
		<?php _e('Sorry, no results were found.', DIRECTORY_THEME); ?>
	</div>
	<?php get_search_form(); ?>
<?php endif; ?>

<?php get_footer(); ?>