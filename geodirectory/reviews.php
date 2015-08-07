<?php
/**
 * This template overrides GeoDirectory's Reviews Template.
 */
if (post_password_required())
	return;
?>

<div id="comments" class="comments-area">

	<?php if (have_comments()) : ?>
		<h2 class="comments-title">
			<?php
			printf(_n('1 Review', '%1$s Reviews', get_comments_number(), GEODIRECTORY_TEXTDOMAIN),
				number_format_i18n(get_comments_number()));
			?>
		</h2>

		<ol class="commentlist">
			<?php wp_list_comments(array('callback' => 'dt_geodir_comment', 'style' => 'ol'));
			//wp_list_comments( );
			?>
		</ol><!-- .commentlist -->

		<?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // are there comments to navigate through ?>
			<nav id="comment-nav-below" class="navigation" role="navigation">
				<h1 class="assistive-text section-heading"><?php _e('Comment navigation', GEODIRECTORY_TEXTDOMAIN); ?></h1>

				<div
					class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', GEODIRECTORY_TEXTDOMAIN)); ?></div>
				<div
					class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', GEODIRECTORY_TEXTDOMAIN)); ?></div>
			</nav>
		<?php endif; // check for comment navigation ?>

		<?php
		/* If there are no comments and comments are closed, let's leave a note.
		 * But we only want the note on posts and pages that had comments in the first place.
		 */
		if (!comments_open() && get_comments_number()) : ?>
			<p class="nocomments"><?php _e('Comments are closed.', GEODIRECTORY_TEXTDOMAIN); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php comment_form(array('title_reply' => __('Leave a Review', GEODIRECTORY_TEXTDOMAIN), 'label_submit' => __('Post Review', GEODIRECTORY_TEXTDOMAIN), 'comment_field' => '<p class="comment-form-comment"><label for="comment">' . __('Review text', GEODIRECTORY_TEXTDOMAIN) . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>', 'must_log_in' => '<p class="must-log-in">' . sprintf(__('You must be <a href="%s">logged in</a> to post a comment.', GEODIRECTORY_TEXTDOMAIN), home_url() . "/?geodir_signup=true&amp;page1=sign_in") . '</p>')); ?>

</div><!-- #comments .comments-area -->