<?php
/**
 * The template for displaying comments
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area normal-comments">
	<?php if ( have_comments() ) : ?>
	<div class="commentlist-wrap">
		<h2 class="comments-title">
			<?php
			printf( _nx( '1 Comment', '%1$s Comments', get_comments_number(), 'comments title', 'directory-starter' ),
				number_format_i18n( get_comments_number() ));
			?>
		</h2>

		<?php //directory_theme_comment_nav(); ?>

		<ol class="commentlist">
			<?php
			wp_list_comments( array(
				'style'       => 'ol',
				'callback'    => 'directory_theme_comment'
			) );
			?>
		</ol><!-- .comment-list -->

		<?php directory_theme_comment_nav(); ?>
	</div>
	<?php endif; // have_comments() ?>

	<?php
	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'directory-starter' ); ?></p>
	<?php endif; ?>

	<?php comment_form(); ?>

</div><!-- .comments-area -->