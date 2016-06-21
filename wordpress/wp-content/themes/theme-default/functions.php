<?php

	/* Feature to hide updates from X plugin. */

	function filter_plugin_updates( $value ) {
		unset( $value->response['advanced-custom-fields-pro/acf.php'] );
		return $value;
	}
	add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );
	remove_filter('acf_the_content', 'wpautop');

?>