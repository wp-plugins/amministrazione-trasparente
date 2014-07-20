<?php
	register_setting( 'at_options_group', 'at_version_number'); update_option( 'at_version_number', '4.0.4' );
	register_setting( 'at_options_group', 'at_option_id', 'intval');
	register_setting( 'at_options_group', 'at_option_love', 'intval');
	register_setting( 'at_options_group', 'at_option_widget');
	register_setting( 'at_options_group', 'at_pasw_developer', 'intval');
	register_setting( 'at_options_group', 'at_breadcrumb_single', 'intval');
	register_setting( 'at_options_group', 'at_categorization_disable', 'intval');
	register_setting( 'at_options_group', 'at_wpatt_option_enable', 'intval');
	register_setting( 'at_options_group', 'at_ruoli_option_enable', 'intval');
	register_setting( 'at_options_group', 'at_option_showarchivedesc', 'intval');
	register_setting( 'at_options_group', 'at_option_tag', 'intval');
?>