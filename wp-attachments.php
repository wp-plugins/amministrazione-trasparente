<?php
// Codice basato sulla versione 3.0.3 di WP Attachments - (C)2013 Marco Milesi - http://wordpress.org/plugins/wp-attachments

function at_wpatt_format_bytes($a_bytes) {
    if ($a_bytes < 1024)
        { return $a_bytes . ' B'; }
    elseif ($a_bytes < 1048576)
        { return round($a_bytes / 1024, 2) . ' KB'; }
    elseif ($a_bytes < 1073741824)
        { return round($a_bytes / 1048576, 2) . ' MB'; }
    elseif ($a_bytes < 1099511627776)
        { return round($a_bytes / 1073741824, 2) . ' GB'; }
    else
        { return round($a_bytes / 1208925819614629174706176, 2) . ' ERROR'; }
}


add_filter('the_content', 'at_wpatt_job_cpt_template_filter');
function at_wpatt_job_cpt_template_filter($content)
    {
    global $post;
    
    $attachments = get_posts(array(
        'post_type' => 'attachment',
        'orderby' => 'menu_order',
        'posts_per_page' => 100,
        'post_parent' => $post->ID
    ));
    
    if ($attachments)
        {
        
        $content .= '<div style="width:100%;float:left;margin:10px 0 10px 0;"><h3>Allegati</h3>
	<style>
	ul.post-attachments{list-style:none;margin:0;}
	li.post-attachment{background:url(' . plugin_dir_url(__FILE__) . 'includes/document.png) 0 4px no-repeat;padding-left:24px}	.post-attachment.mime-imagejpeg,.post-attachment.mime-imagepng{background-image:url(' . plugin_dir_url(__FILE__) . 'includes/document-image.png)}
	.post-attachment.mime-applicationzip{background-image:url(' . plugin_dir_url(__FILE__) . 'includes/document-zipper.png)}
	.post-attachment.mime-applicationpdf{background-image:url(' . plugin_dir_url(__FILE__) . 'includes/document-pdf.png)}
	.post-attachment.mime-applicationvnd-ms-excel{background-image:url(' . plugin_dir_url(__FILE__) . 'includes/document-excel.png)}
	.post-attachment.mime-applicationvnd-openxmlformats-officedocument-spreadsheetml-sheet{background-image:url(' . plugin_dir_url(__FILE__) . 'includes/document-excel.png)}
	.post-attachment.mime-applicationmsword{background-image:url(' . plugin_dir_url(__FILE__) . 'includes/document-word.png)}
	.post-attachment.mime-applicationvnd-openxmlformats-officedocument-wordprocessingml-document{background-image:url(' . plugin_dir_url(__FILE__) . 'includes/document-word.png)}
			</style><ul class="post-attachments">';
        
        foreach ($attachments as $attachment)
            {
            
            
            $class = "post-attachment mime-" . sanitize_title($attachment->post_mime_type);
            
            $content .= '<li class="' . $class . '"><a href="' . wp_get_attachment_url($attachment->ID) . '">' . $attachment->post_title . '</a> (' . at_wpatt_format_bytes(filesize(get_attached_file($attachment->ID)));
            
            $get_at_wpatt_option_showdate = get_option('at_wpatt_option_showdate');
            
            if ($get_at_wpatt_option_showdate == '1')
                {
                
                $wpatt_date = new DateTime($attachment->post_date);
                
                $content .= '<div style="float:right;">' . $wpatt_date->format('d.m.Y') . '</div>';
                
                }
            
            $content .= ')</li>';
            
            }
        $content .= '</ul></div>';
        
        }
    return $content;
    
    }

?>