<?php
include(locate_template('vars.php'));

/* Make sure Engipress Framework is loaded */
function engipress_framework_check() {
global $themeURL;
$failmessage = '<div class="error">Please enable the Engipress Framework before continuing this theme.</div>';

	include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); 

	if ( ! is_plugin_active('engipress-framework/engipress-framework.php') ) : 
		echo $failmessage;
	endif;

}
add_action('admin_notices', 'engipress_framework_check');

?>