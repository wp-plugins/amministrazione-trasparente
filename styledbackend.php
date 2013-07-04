<?php
function sfondo_at_trasparenza()
{
    global $current_screen;
    if ($current_screen->post_type == 'amm-trasparente') {
        $css = '<style type="text/css">' . '#wpwrap { background: white url(' . content_url() . '/plugins/amministrazione-trasparente/bandieraItaliana.jpg) no-repeat; }' . '</style>';
        echo $css;
    }
}
add_action('admin_footer', 'sfondo_at_trasparenza');
?>