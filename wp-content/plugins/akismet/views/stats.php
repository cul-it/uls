<<<<<<< HEAD
<div id="akismet-plugin-container">
	<div class="akismet-masthead">
		<div class="akismet-masthead__inside-container">
			<a href="<?php echo esc_url( Akismet_Admin::get_page_url() );?>" class="akismet-right"><?php esc_html_e( 'Akismet Settings' , 'akismet' ); ?></a>
			<div class="akismet-masthead__logo-container">
				<img class="akismet-masthead__logo" src="<?php echo esc_url( plugins_url( '../_inc/img/logo-full-2x.png', __FILE__ ) ); ?>" alt="Akismet" />
			</div>
		</div>
	</div>
	<iframe src="<?php echo esc_url( sprintf( '//akismet.com/web/1.0/user-stats.php?blog=%s&api_key=%s&locale=%s', urlencode( get_option( 'home' ) ), Akismet::get_api_key(), get_locale() ) ); ?>" width="100%" height="2500px" frameborder="0"></iframe>
=======
<div class="wrap">
	<h2><?php esc_html_e( 'Akismet Stats' , 'akismet');?><?php if ( !isset( $hide_settings_link ) ): ?> <a href="<?php echo esc_url( Akismet_Admin::get_page_url() );?>" class="add-new-h2"><?php esc_html_e( 'Settings' , 'akismet');?></a><?php endif;?></h2> 
	<iframe src="<?php echo esc_url( sprintf( '//akismet.com/web/1.0/user-stats.php?blog=%s&api_key=%s&locale=%s', urlencode( get_bloginfo('url') ), Akismet::get_api_key(), get_locale() ) ); ?>" width="100%" height="2500px" frameborder="0" id="akismet-stats-frame"></iframe>
>>>>>>> 29277210ad8cdfc6c533bb63e35927d86f20c366
</div>