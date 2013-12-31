<?php
function sfondo_at_trasparenza()
{
    global $current_screen;
    if ($current_screen->post_type == 'amm-trasparente') {
		if (!($current_screen->id == "at_settings_menu")) {
			$css = '<style type="text/css">' . '#wpwrap { background: url(' . plugin_dir_url(__FILE__) . 'includes/bandieraItaliana.png) no-repeat; }' . '</style>';
			echo $css;
		}
    }
}
add_action('admin_footer', 'sfondo_at_trasparenza');
?>