<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package AccessPress Root
 */
?>

	</div><!-- #content -->

	<footer id="colophon">
		<div id="top-footer" class="clearfix columns-<?php echo accesspress_footer_count(); ?>">
			<div class="ak-container">
			<div class="top-footer-wrap clearfix">
			<?php if(is_active_sidebar('footer-1')): ?>
				<div class="top-footer-block">
					<?php dynamic_sidebar('footer-1') ?>
				</div>
			<?php endif; ?>
			
			<?php if(is_active_sidebar('footer-2')): ?>
				<div class="top-footer-block">
					<?php dynamic_sidebar('footer-2') ?>
				</div>
			<?php endif; ?>

			<?php if(is_active_sidebar('footer-3')): ?>
				<div class="top-footer-block">
					<?php dynamic_sidebar('footer-3') ?>
				</div>
			<?php endif; ?>

			<?php if(is_active_sidebar('footer-4')): ?>
				<div class="top-footer-block">
					<?php dynamic_sidebar('footer-4') ?>
				</div>
			<?php endif; ?>
			</div>
			</div>
		</div> <!-- top footer end -->

		<div id="middle-footer">
			<div class="ak-container">
				<div class="footer-menu">
					<?php wp_nav_menu( array( 'theme_location' => 'footer', 'depth' => -1 ) ); ?>
				</div>
			</div>
		</div> <!-- middle-footr end -->

		<div id="bottom-footer" class="clearfix">
			<div class="ak-container">
				<div class="copyright"><?php _e('WordPress Theme: ', 'accesspress-root'); ?> <a title="AccessPress Themes" href="<?php echo esc_url('https://accesspressthemes.com','accesspress-root'); ?>">AccessPress Root</a> </div>
				<ul class="social-icon">
					<?php do_action('accesspress_social'); ?>
				</ul>
			</div>
		</div> <!-- bottom footer end -->
	</footer><!-- #colophon --> 
</div><!-- #page -->
</div> <!-- Inner wrap -->
</div> <!-- Outer wrap -->
<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78803128-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>