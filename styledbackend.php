<?php
function sfondo_at_trasparenza()
{
    global $current_screen;
    if ($current_screen->post_type == 'amm-trasparente') {
        $css = '<style type="text/css">' . '#wpwrap { background: white url(' . plugin_dir_url(__FILE__) . 'includes/bandieraItaliana.jpg) no-repeat; }' . '</style>';
        echo $css;
    }
}
add_action('admin_footer', 'sfondo_at_trasparenza');
?>