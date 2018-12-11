<form name="akismet_activate" action="https://akismet.com/get/" method="POST" target="_blank">
	<input type="hidden" name="passback_url" value="<?php echo esc_url( Akismet_Admin::get_page_url() ); ?>"/>
<<<<<<< HEAD
	<input type="hidden" name="blog" value="<?php echo esc_url( get_option( 'home' ) ); ?>"/>
	<input type="hidden" name="redirect" value="<?php echo isset( $redirect ) ? $redirect : 'plugin-signup'; ?>"/>
	<input type="submit" class="<?php echo isset( $classes ) && count( $classes ) > 0 ? implode( ' ', $classes ) : 'akismet-button akismet-is-primary';?>" value="<?php echo esc_attr( $text ); ?>"/>
=======
	<input type="hidden" name="blog" value="<?php echo esc_url( get_bloginfo('url') ); ?>"/>
	<input type="hidden" name="redirect" value="<?php echo isset( $redirect ) ? $redirect : 'plugin-signup'; ?>"/>
	<input type="submit" class="<?php echo isset( $classes ) && count( $classes ) > 0 ? implode( ' ', $classes ) : 'button button-primary';?>" value="<?php echo esc_attr( $text ); ?>"/>
>>>>>>> 29277210ad8cdfc6c533bb63e35927d86f20c366
</form>