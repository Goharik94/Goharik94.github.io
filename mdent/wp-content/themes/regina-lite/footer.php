<?php

	$check_footer_theme_copyright_enable = get_theme_mod( 'regina_lite_footer_theme_copyright_enable', 1 );
	$text_footer_theme_copyright_message = get_theme_mod( 'regina_lite_footer_copyright', esc_html__( '&copy; Copyright 2016. All Rights Reserved.', 'regina-lite' ) )

?>
<footer id="footer">
	<div class="container">
		<div class="row">
			<?php if ( is_active_sidebar( 'footer-sidebar-1' ) ) { ?>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
				</div><!--.col-sm-3-->
			<?php } ?>

			<?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) { ?>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
				</div><!--.col-sm-3-->
			<?php } ?>

			<?php if ( is_active_sidebar( 'footer-sidebar-3' ) ) { ?>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
				</div><!--.col-lg-3-->
			<?php } ?>

			<?php if ( is_active_sidebar( 'footer-sidebar-4' ) ) { ?>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<?php dynamic_sidebar( 'footer-sidebar-4' ); ?>
				</div><!--.col-lg-3-->
			<?php } ?>

			<a href="#" class="back-to-top"><span class="nc-icon-glyph arrows-1_bold-up"></span></a>
		</div><!--.row-->
	</div><!--.container-->
</footer><!--#footer-->

<footer id="sub-footer">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<i class="fa fa-map-marker"></i>
				<p>Քաղաք Երևան, Խաղաղ Դոնի 15/4 </p>
			</div>
		</div><!--.row-->
	</div><!--.container-->
</footer><!--#sub-footer-->
<?php wp_footer(); ?>
</body>
</html>
