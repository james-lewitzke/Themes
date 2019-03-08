<?php
/* Make sure Engipress Library is loaded */
function engipress_library_check() {
global $themeURL;
$failmessage = '<div class="error">Please enable the Engipress Library before continuing this theme.</div>';

	include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); 

	if ( ! is_plugin_active('engipress-library/engipress-library.php') ) : 
		echo $failmessage;
	endif;

}
add_action('admin_notices', 'engipress_library_check');

?>