<article <?php post_class(); ?>>
	<header>
		<h1 class="entry-title">
			<?php
			if ( is_singular() ) {
				?>
				<?php the_title(); ?>
				<?php
			} else {
				?>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<?php
			}
			?>
		</h1>
	</header>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
		<?php
		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', DIRECTORY_THEME ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
		) );
		?>
	</div>
</article>