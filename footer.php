<footer id="footer" class="site-footer" role="contentinfo">
	<div class="footer-widgets">
		<div class="container">
			<?php if(FOOTER_SIDEBAR_COUNT > 0){?>
				<div class="col-lg-3">
					<?php dynamic_sidebar('sidebar-footer1');?>
				</div>
			<?php }?>
			<?php if(FOOTER_SIDEBAR_COUNT > 1){?>
				<div class="col-lg-3">
					<?php dynamic_sidebar('sidebar-footer2');?>
				</div>
			<?php }?>
			<?php if(FOOTER_SIDEBAR_COUNT > 2){?>
				<div class="col-lg-3">
					<?php dynamic_sidebar('sidebar-footer3');?>
				</div>
			<?php }?>
			<?php if(FOOTER_SIDEBAR_COUNT > 3){?>
				<div class="col-lg-3">
					<?php dynamic_sidebar('sidebar-footer4');?>
				</div>
			<?php }?>
		</div>
	</div>
	<div class="copyright">
		<div class="container">
			<?php echo esc_attr( get_theme_mod( 'dt_copyright_text', DT_COPYRIGHT_TEXT ) ); ?>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>