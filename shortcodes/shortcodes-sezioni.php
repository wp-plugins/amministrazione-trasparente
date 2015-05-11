<?php

extract(shortcode_atts(array('col' => '1', 'bar' => '0', 'con' => '0'), $atts));

switch ($col) {
    case 0:
        $atscss= "";
        break;
    case 1:
        $atscss= "";
        break;
    case 2:
        $atscss= "width:49%;float:left;";
        $atw2 = "width:98%;float:left;";
        break;
    case 3:
        $atscss= "width:31%;float:left;";
        $atw2 = "width:62%;float:left;";
        break;
}

echo '
<style type="text/css">

.at-tableclass {'.$atscss.'padding:0px 0px 0px 5px;position:relative;min-width: 200px;}

';

if ($atw2) { echo '#at-s-23 { '.$atw2.' }'; }

echo '
.at-tableclass h3 a { text-decoration:none; cursor: default; }

.at-tableclass h3 {  border: 1px solid #eee; padding: 8px 10px; background: #FBFBFB; }

.at-tableclass ul li a { text-decoration: none; }

.at-number { float: right;
  border-radius: 20px;
  background-color: white;
  height: 20px;
  width: 20px;
  border: 1px solid #eee;
  text-align: center;
  font-size: 0.8em;
  font-weight: bold; }

</style>
<!-- Generato con il Plugin Wordpress Amministrazione Trasparente v.' . get_option('at_version_number') . '-->';

if ($bar) {
    echo '<div style="border: 1px solid #eee; padding: 8px 10px; background: #FBFBFB;">';
    if ($bar > 2) {
        echo do_shortcode( '[at-desc]' );
    }
    if ($bar > 1) {
        echo '<span style="float:right;"><a href="'.get_post_type_archive_link( 'amm-trasparente' ).'"><small>Ultimi inseriti</small></a></span>';
    }
    echo do_shortcode( '[at-search]' ).'</div>';
}

$atcontatore = 0;
foreach (amministrazionetrasparente_getarray() as $inner) {
    $atcontatore++;

    //  Scan through inner loop
    $atreturn = '<ul>';
    $atcounter = 0;
    foreach ($inner[1] as $value) {
        $atreturn .= '<li>';
        $atreturn .= '<a href="' . get_term_link( $value, 'tipologie' ) . '" title="' . $value . '">' . $value . '</a>';
        $atreturn .= '</li>';
        $args = array( 'taxonomy' => 'tipologie', 'term' => $value );
$query = new WP_Query( $args );
        $atcounter = $atcounter + $query->found_posts;
    }
    $atreturn .= '</ul>';

    echo '<div class="at-tableclass" id="at-s-'.++$atct.'">';

    $sez_l = strtolower(preg_replace('/[^a-zA-Z]+/', '', $inner[0]));
    echo '<h3>';
    if ($con) { echo '<div class="at-number">'.$atcounter.'</div>'; }
    echo '<a id="'.$sez_l.'" href="#'.$sez_l.'">'.$inner[0].'</a></h3>';
    echo $atreturn;

    echo '</div>';

    if ($col && $atcontatore == $col) {
        echo '<div class="clear"></div>';
        $atcontatore=0;
    }
}

if ( get_option('wpgov_show_love') ) {
    echo '<span style="width:98%;border: 1px solid #eee;padding: 8px 10px;background: #FBFBFB;float: left;font-size: 0.7em;">
        <span style="float:right;">
            <a href="http://www.wpgov.it" target="_blank" alt="Software WPGov" title="Software WPGov"><img src="' . plugin_dir_url(__FILE__) . 'wpgov.png" /></a>
        </span>
        Sezione gestita con il plugin WordPress
        <a href="http://wordpress.org/plugins/amministrazione-trasparente/" rel="nofollow" title="Plugin Amministrazione Trasparente per Wordpress">Amministrazione Trasparente</a>
        </span>';
}
 echo '<div class="clear"></div>';

?>
