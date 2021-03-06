<?php
if ( ! defined( 'WPINC' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

return array (
	'ajax_calls' => array (
		'get_plugin_version' =>	'/api/open/get-plugin-version',
		'get_asset' =>			'/api/open/get-asset',
	),
	'asset_server' =>			'https://wp-assets.boldgrid.com',
	'plugin_name' => 			'boldgrid-ninja-forms',
	'plugin_key_code' => 		'ninja-forms',
	'main_file_path' => 		BOLDGRID_NINJA_FORMS_PATH . '/ninja-forms.php',
	'plugin_transient_name' => 	'boldgrid_ninja_forms_version_data',
);
