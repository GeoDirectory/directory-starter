<?php
/**
 * Modified review template. This template splits Reviews and Review form into two section.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @since 1.0.0
 * @since 1.5.4 Modified to fix review sorting.
 *
 * @package GeoDirectory
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required())
    return;
?>

<div id="comments" class="comments-area">

    <div class="content-box">
    <?php
    $comments_text = sprintf( _n( '%s Review', '%s Reviews', get_comments_number(), 'geodirectory' ), get_comments_number() );
    echo '<h2 class="wpl-box-title"><i class="fa fa-star-o"></i>'.$comments_text.'</h2>';
    if (get_comments_number() == 0) {
        echo '<p style="wpl-no-reviews">No reviews yet</p>';
    } ?>
        <ol class="commentlist">
            <?php $reverse_top_level = is_plugin_active('geodir_review_rating_manager/geodir_review_rating_manager.php') ? false : null; ?>
            <?php wp_list_comments(array('callback' => 'geodir_comment', 'reverse_top_level' => $reverse_top_level, 'style' => 'ol'));
            ?>
        </ol><!-- .commentlist -->

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // are there comments to navigate through ?>
            <nav id="comment-nav-below" class="navigation" role="navigation">
                <h1 class="assistive-text section-heading"><?php _e('Comment navigation', 'geodirectory'); ?></h1>

                <div
                    class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', 'geodirectory')); ?></div>
                <div
                    class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'geodirectory')); ?></div>
            </nav>
        <?php endif; // check for comment navigation ?>
    </div>

    <?php if (have_comments()) : ?>

        <?php
        /* If there are no comments and comments are closed, let's leave a note.
         * But we only want the note on posts and pages that had comments in the first place.
         */
        if (!comments_open() && get_comments_number()) : ?>
            <p class="nocomments"><?php _e('Reviews are closed.', 'geodirectory'); ?></p>
        <?php endif; ?>

    <?php endif; // have_comments() ?>

    <div class="content-box">
    <?php
    //echo '<h2 class="wpl-box-title"><i class="fa fa-star-o"></i>'.$comments_text.'</h2>';
    $args = apply_filters('geodir_review_form_args', array(
        'title_reply' => __('Leave a Review', 'geodirectory'),
        'title_reply_before'   => '<h2 id="reply-title" class="wpl-box-title">',
        'title_reply_after'    => '</h2>',
        'label_submit' => __('Post Review', 'geodirectory'),
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . __('Review text', 'geodirectory') . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
        'must_log_in' => '<p class="must-log-in">' . sprintf(__('You must be <a href="%s">logged in</a> to post a comment.', 'geodirectory'), geodir_login_url()) . '</p>'
    ));
    comment_form($args);
    ?>
    </div>

</div><!-- #comments .comments-area -->