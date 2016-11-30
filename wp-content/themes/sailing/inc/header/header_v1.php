<!-- 1 -->
<?php global $thim_options_data; ?>
<div class="container">
	<div class="row">
		<div class="navigation col-sm-12">
			<div class="tm-table">
				<div class="menu-mobile-effect navbar-toggle" data-effect="mobile-effect">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</div>
				<div class="width-logo table-cell sm-logo">
					<?php
					do_action( 'thim_logo' );
					do_action( 'thim_sticky_logo' );
					do_action( 'thim_mobile_logo' );
					?>
				</div>
				<nav class="width-navigation table-cell table-right">
					<?php
					if ( isset( $thim_options_data['thim_topbar_show'] ) && $thim_options_data['thim_topbar_show'] == '1' ) {
						get_template_part( 'inc/header/top-header' );
					}
					get_template_part( 'inc/header/main-menu' );
					?>
				</nav>
			</div>
			<!--end .row-->
		</div>
	</div>
</div>