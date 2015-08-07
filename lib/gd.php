<?php
// GeoDirectory Plugin compatibility functions.
add_action('init', 'directory_theme_set_default_rating_icon');
function directory_theme_set_default_rating_icon() {
	$default_star = get_option('geodir_default_rating_star_icon');
	if (!$default_star || ($default_star == geodir_plugin_url() . '/geodirectory-assets/images/stars.png')) {
		update_option('geodir_default_rating_star_icon', get_template_directory_uri() . '/assets/images/star.png');
	}
}

if (defined('GEODIRREVIEWRATING_VERSION') && is_admin()) {
	add_action('init', 'directory_theme_set_default_multi_rating_icon');
}
function directory_theme_set_default_multi_rating_icon() {
	$default_star = get_option('geodir_reviewrating_overall_off_img');
	if (!$default_star || ($default_star == GEODIR_REVIEWRATING_PLUGINDIR_URL . '/icons/stars.png')) {
		update_option('geodir_reviewrating_overall_off_img', get_template_directory_uri() . '/assets/images/star.png');
	}

	$default_color = get_option('geodir_reviewrating_overall_color');
	if (!$default_color || ($default_color == '#ff9900')) {
		update_option('geodir_reviewrating_overall_color', '#ed695d');
	}
}

// Change some GD settings
add_action( 'after_switch_theme', 'directory_theme_geodirectory_settings' );
function directory_theme_geodirectory_settings() {
	update_option('geodir_set_as_home', '1');
	update_option('geodir_width_home_contant_section', '67');
	update_option('geodir_width_listing_contant_section', '67');
	update_option('geodir_width_search_contant_section', '67');
	update_option('geodir_width_author_contant_section', '67');
	update_option('geodir_listing_view', 'listview');
	update_option('geodir_search_view', 'listview');
	update_option('geodir_author_view', 'listview');
}

// Change avatar size
function dt_comment_avatar_size() {
	return 60;
}
add_action('geodir_comment_avatar_size', 'dt_comment_avatar_size');

// reviews
function dt_geodir_comment($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
	switch ($comment->comment_type) :
		case 'pingback' :
		case 'trackback' :
			// Display trackbacks differently than normal comments.
			?>
			<li <?php comment_class('geodir-comment'); ?> id="comment-<?php comment_ID(); ?>">
			<p><?php _e('Pingback:', GEODIRECTORY_TEXTDOMAIN); ?> <?php comment_author_link(); ?> <?php edit_comment_link(__('(Edit)', GEODIRECTORY_TEXTDOMAIN), '<span class="edit-link">', '</span>'); ?></p>
			<?php
			break;
		default :
			// Proceed with normal comments.
			global $post;
			?>
		<li <?php comment_class('geodir-comment'); ?> id="li-comment-<?php comment_ID(); ?>">
			<article id="comment-<?php comment_ID(); ?>" class="comment hreview">
				<header class="comment-meta comment-author vcard">
					<?php
					/**
					 * Filter to modify comment avatar size
					 *
					 * You can use this filter to change comment avatar size.
					 *
					 * @since 1.0.0
					 * @package GeoDirectory
					 */
					$avatar_size = apply_filters('geodir_comment_avatar_size', 44);
					echo get_avatar($comment, $avatar_size);
					printf('<cite><b class="reviewer">%1$s</b> %2$s</cite>',
						get_comment_author_link(),
						// If current post author is also comment author, make it known visually.
						($comment->user_id === $post->post_author) ? '<span>' . __('Post author', GEODIRECTORY_TEXTDOMAIN) . '</span>' : ''
					);
					echo "<span class='item'><small><span class='fn'>$post->post_title</span></small></span>";
					printf('<a href="%1$s"><time datetime="%2$s" class="dtreviewed">%3$s<span class="value-title" title="%2$s"></span></time></a>',
						esc_url(get_comment_link($comment->comment_ID)),
						get_comment_time('c'),
						/* translators: 1: date, 2: time */
						sprintf(__('%1$s at %2$s', GEODIRECTORY_TEXTDOMAIN), get_comment_date(), get_comment_time())
					);
					?>
				</header>
				<!-- .comment-meta -->

				<?php if ('0' == $comment->comment_approved) : ?>
					<p class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.', GEODIRECTORY_TEXTDOMAIN); ?></p>
				<?php endif; ?>

				<section class="comment-content comment">
					<?php comment_text(); ?>
				</section>
				<!-- .comment-content -->

				<div class="reply">
					<?php edit_comment_link(__('Edit', GEODIRECTORY_TEXTDOMAIN), '<p class="edit-link">', '</p>'); ?>
					<?php comment_reply_link(array_merge($args, array('reply_text' => __('Reply', GEODIRECTORY_TEXTDOMAIN), 'after' => ' <span>&darr;</span>', 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
				</div>
				<!-- .reply -->
			</article>
			<!-- #comment-## -->
			<?php
			break;
	endswitch; // end comment_type check
}