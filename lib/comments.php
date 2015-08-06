<?php
function directory_theme_comment_nav() {
	// Are there comments to navigate through?
	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
		?>
		<nav class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php _e( 'Comment navigation', DIRECTORY_THEME ); ?></h2>
			<div class="nav-links">
				<?php
				if ( $prev_link = get_previous_comments_link( __( 'Older Comments', DIRECTORY_THEME ) ) ) :
					printf( '<div class="nav-previous">%s</div>', $prev_link );
				endif;

				if ( $next_link = get_next_comments_link( __( 'Newer Comments', DIRECTORY_THEME ) ) ) :
					printf( '<div class="nav-next">%s</div>', $next_link );
				endif;
				?>
			</div><!-- .nav-links -->
		</nav><!-- .comment-navigation -->
	<?php
	endif;
}

function directory_theme_comment( $comment, $args, $depth ) { ?>
	<?php $add_below = ''; ?>
<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
	<div class="single-comment">
		<div class="avatar-wrap"><?php echo get_avatar( $comment, 60 ); ?></div>
		<div class="comment-box">
			<div class="dt-comment-header">
				<strong><?php echo get_comment_author_link(); ?></strong>
				<?php printf( __( '%1$s at %2$s', DIRECTORY_THEME ), get_comment_date(),  get_comment_time() ); ?>
				<?php edit_comment_link( __( ' - Edit', DIRECTORY_THEME ),'  ','' ); ?>
				<?php comment_reply_link( array_merge( $args, array(
					'reply_text' => __( ' - Reply', DIRECTORY_THEME ),
					'add_below' => 'comment',
					'depth' => $depth,
					'max_depth' => $args['max_depth']
				) ) ); ?>
			</div>
			<div class="comment-text">
				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em><?php _e( 'Your comment is awaiting moderation.', DIRECTORY_THEME ); ?></em>
					<br />
				<?php endif; ?>
				<?php comment_text() ?>
			</div>
		</div>
	</div>
	<?php
}