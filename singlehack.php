<?php
/* =========== Visualizzazione Singola Documenti ======*/
function at_format_bytes($a_bytes)
{
    if ($a_bytes < 1024) {
        return $a_bytes . ' B';
    } elseif ($a_bytes < 1048576) {
        return round($a_bytes / 1024, 2) . ' KB';
    } elseif ($a_bytes < 1073741824) {
        return round($a_bytes / 1048576, 2) . ' MB';
    } elseif ($a_bytes < 1099511627776) {
        return round($a_bytes / 1073741824, 2) . ' GB';
    } else {
        return round($a_bytes / 1208925819614629174706176, 2) . ' ERROR';
    }
}
add_action('template_redirect', 'at_job_cpt_template');
function at_job_cpt_template()
{
    global $wp, $wp_query;
    if (isset($wp->query_vars['post_type']) && $wp->query_vars['post_type'] == 'amm-trasparente') {
        if (have_posts()) {
            add_filter('the_content', 'at_job_cpt_template_filter');
        } else {
            $wp_query->is_404 = true;
        }
    }
}
function at_job_cpt_template_filter($content)
{
    global $wp_query;
    $jobID = $wp_query->post->ID;
    echo get_the_content();
    echo '<br/><hr><strong>Documenti Allegati:</strong><br/>';
    $args        = array(
        'post_type' => 'attachment',
        'numberposts' => -1,
        'post_status' => null,
        'post_parent' => get_the_ID(),
        'orderby' => 'menu_order',
        'order' => 'desc'
    );
    $attachments = get_posts($args);
    if ($attachments) {
        foreach ($attachments as $attachment) {
            $class = "post-attachment mime-" . sanitize_title($attachment->post_mime_type);
            echo '<li class="' . $class . '"><a href="' . wp_get_attachment_url($attachment->ID) . '">';
            echo $attachment->post_title;
            echo '</a> (';
            echo at_format_bytes(filesize(get_attached_file($attachment->ID)));
            echo ')</li>';
        }
    }
}
?>