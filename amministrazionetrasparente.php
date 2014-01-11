<?php
/*
Plugin Name: Amministrazione Trasparente
Plugin URI: http://wordpress.org/extend/plugins/amministrazione-trasparente
Description: Soluzione completa per la pubblicazione online dei documenti ai sensi del D.lgs. n. 33 del 14/03/2013, riguardante il riordino della disciplina degli obblighi di pubblicità, trasparenza e diffusione di informazioni da parte delle pubbliche amministrazioni, in attuazione dell’art. 1, comma 35, della legge n. 190/2012.
Version: 3.8.1
Author: Marco Milesi
Author Email: milesimarco@outlook.com
Author URI: http://marcomilesi.ml
License: GPL Attribution-ShareAlike
*/

add_action( 'init', 'AT_RegistraTAX');
function AT_RegistraTAX() {
	
    $labels = array( 
        'name' => _x( 'Tipologie', 'tipologie' ),
        'singular_name' => _x( 'Tipologia', 'tipologie' ),
        'search_items' => _x( 'Cerca tipologia', 'tipologie' ),
        'popular_items' => _x( 'Tipologie più usate', 'tipologie' ),
        'all_items' => _x( 'Tutte le Tipologie', 'tipologie' ),
        'parent_item' => _x( 'Parent Tipologia', 'tipologie' ),
        'parent_item_colon' => _x( 'Parent Tipologia:', 'tipologie' ),
        'edit_item' => _x( 'Modifica Tipologia', 'tipologie' ),
        'update_item' => _x( 'Aggiorna Tipologia', 'tipologie' ),
        'add_new_item' => _x( 'Nuova Tipologia', 'tipologie' ),
        'new_item_name' => _x( 'Nuova Tipologia', 'tipologie' ),
        'separate_items_with_commas' => _x( 'Separate tipologie with commas', 'tipologie' ),
        'add_or_remove_items' => _x( 'Aggiungi o elimina una tipologia', 'tipologie' ),
        'choose_from_most_used' => _x( 'Scegli tra le tipologie più usate', 'tipologie' ),
        'menu_name' => _x( 'Tipologie', 'tipologie' ),
    );
	
	//Se è attivata l'opzione per sbloccare le tipologie, cambiamo alcuni parametri =)
	//$get_at_option_sblocca_tipologie = get_option('at_option_sblocca_tipologie');
	//if ($get_at_option_sblocca_tipologie == '1') {
	//	$at_option_sblocca_tipologie_array = array( 'manage_terms' => 'administrator', 'edit_terms' => 'administrator','delete_terms' => 'administrator');
	//} else {
	//	$at_option_sblocca_tipologie_array = array('manage_terms' => 'utentealieno','edit_terms'   => 'utentealieno','delete_terms' => 'utentealieno',);
	//}
	
    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => false,
        'show_admin_column' => true,
        'hierarchical' => true,
		'rewrite' => array('hierarchical' => true, 'slug' => 'trasparenza', 'with_front' => false),
		'capabilities' => array('manage_terms' => 'utentealieno','edit_terms'   => 'utentealieno','delete_terms' => 'utentealieno',),
        'query_var' => true
    );
    register_taxonomy( 'tipologie', array('amm-trasparente'), $args );
    require(plugin_dir_path(__FILE__) . 'taxonomygenerator.php'); 
}

/* REGISTRA CUSTOM POST TYPE */

add_action( 'init', 'register_cpt_documento_trasparenza' );
function register_cpt_documento_trasparenza() {

    $labels = array( 
        'name' => _x( 'Documenti Trasparenza', 'documenti_trasparenza' ),
        'singular_name' => _x( 'Documento Trasparenza', 'documento_trasparenza' ),
        'add_new' => _x( 'Nuova Voce', 'documento_trasparenza' ),
        'add_new_item' => _x( 'Nuova Voce', 'documento_trasparenza' ),
        'edit_item' => _x( 'Modifica Documento', 'documento_trasparenza' ),
        'new_item' => _x( 'Nuovo Documento', 'documento_trasparenza' ),
        'view_item' => _x( 'Vedi Documento Trasparenza', 'documento_trasparenza' ),
        'search_items' => _x( 'Cerca Documenti', 'documento_trasparenza' ),
        'not_found' => _x( 'Nessun Documento trovato', 'documento_trasparenza' ),
        'not_found_in_trash' => _x( 'Nessun Documento trovato', 'documento_trasparenza' ),
        'parent_item_colon' => _x( 'Parent Documento AT:', 'documento_trasparenza' ),
        'menu_name' => _x( 'Trasparenza', 'documento_trasparenza' ),
    );
	
	$get_at_categorization_enable = get_option('at_categorization_enable');
	$get_at_option_tag = get_option('at_option_tag');
	
	if ( $get_at_categorization_enable == '1') { //CATEGORIA SI
		if ( $get_at_option_tag == '0') { //TAG SI
			$taxonomysupport = array('post_tag', 'category');
		} else { //TAG NO, CAT SI
			$taxonomysupport = array('category');
		}
	} else if ( $get_at_option_tag == '0') { //TAG SI, CAT NO
		$taxonomysupport = array('post_tag');
	} else {
		$taxonomysupport = array();
	}

	$get_at_ruoli_option_enable = get_option('at_ruoli_option_enable');
	if ($get_at_ruoli_option_enable == '1') {
		$at_capability_type = 'documenti_trasparenza';
		$map_meta_cap_var = 'true';
		$at_capabilities_array = array(
				'publish_posts' => 'pubblicare_documento_trasparenza',
				'edit_posts' => 'modificare_propri_documento_trasparenza',
				'edit_others_posts' => 'modificare_altri_documento_trasparenza',
				'delete_posts' => 'eliminare_propri_documento_trasparenza',
				'delete_others_posts' => 'modificare_altri_documento_trasparenza',
				'read_private_posts' => 'read_private_professionisti',
				'edit_post' => 'modificare_documento_trasparenza',
				'delete_post' => 'eliminare_documento_trasparenza',
				'read_post' => 'leggere_documento_trasparenza',
				);
	} else {
		$at_capability_type = 'post';
		$map_meta_cap_var = 'false';
	}
	
    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'trasparenza',
		'taxonomies' => $taxonomysupport,
        'supports' => array( 'title', 'editor', 'excerpt', 'revisions' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => plugin_dir_url(__FILE__) . 'includes/icon.png',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
		'rewrite' => array('pages'=> true, 'with_front' => false),
		//'capabilities' => $at_capabilities_array,
        'capability_type' => $at_capability_type,
		'map_meta_cap' => $map_meta_cap_var
    );

    register_post_type( 'amm-trasparente', $args );

}

/* =========== TITOLO HCK =========== */
function at_nuovo_titolo($title)
{
    $screen = get_current_screen();
    if ('amm-trasparente' == $screen->post_type) {
        $title = 'Inserire il titolo della voce da inserire';
    }
    return $title;
}
add_filter('enter_title_here', 'at_nuovo_titolo');

/* =========== SHORTCODES [at-head] & [at-desc] & [at-table] & [at-list] ============ */

function at_head_shtc($atts)
{
ob_start();
include(plugin_dir_path(__FILE__) . 'shortcodes/shortcodes-head.php');
$atshortcode = ob_get_clean();
return $atshortcode;
}
add_shortcode('at-head', 'at_head_shtc');

function at_desc_shtc($atts)
{
$atshortcode = '<p>In questa pagina sono raccolte le informazioni che le Amministrazioni pubbliche sono tenute a pubblicare nel proprio sito internet nell\'ottica della trasparenza, buona amministrazione e di prevenzione dei fenomeni della corruzione (L.69/2009, L.213/2012, <a href="http://www.normattiva.it/uri-res/N2Ls?urn:nir:stato:decreto.legislativo:2013-03-14;33" title="Riferimenti normativi">Dlgs33/2013</a>, L.190/2012).</p>';
return $atshortcode;
}
add_shortcode('at-desc', 'at_desc_shtc');

function at_table_shtc($atts)
{
ob_start();
include(plugin_dir_path(__FILE__) . 'shortcodes/shortcodes-table.php');
$atshortcode = ob_get_clean();
return $atshortcode;
}
add_shortcode('at-table', 'at_table_shtc');

function at_list_shtc($atts)
{
ob_start();
include(plugin_dir_path(__FILE__) . 'shortcodes/shortcodes-list.php');
$atshortcode = ob_get_clean();
return $atshortcode;
}
add_shortcode('at-list', 'at_list_shtc');

function at_archive_buttons() { //Questa funzione va chiamata con at_archive_buttons()
include(plugin_dir_path(__FILE__) . 'shortcodes/shortcodes-php-archive.php');
}

function at_archive_tag_custom_types( $query ) {

	if(is_category() || is_tag()) {
		$post_type = get_query_var('post_type');
		if($post_type) {
			$post_type = $post_type;
		} else {
			$post_type = array('post','amm-trasparente');
			$query->set('post_type',$post_type);
		}
	}
	return $query;
}
add_filter( 'pre_get_posts', 'at_archive_tag_custom_types' );

	function presstrends_AmministrazioneTrasparente_plugin() {

		// PressTrends Account API Key
		$api_key = 'abt3ep7uq9b2jzohwmefm3y5koqcsxguqx0a';
		$auth    = 'gjn5vuptdjt3nfjghf4c04sop2kf5es70';

		// Start of Metrics
		global $wpdb;
		$data = get_transient( 'presstrends_cache_data' );
		if ( !$data || $data == '' ) {
			$api_base = 'http://api.presstrends.io/index.php/api/pluginsites/update/auth/';
			$url      = $api_base . $auth . '/api/' . $api_key . '/';

			$count_posts    = wp_count_posts();
			$count_pages    = wp_count_posts( 'page' );
			$comments_count = wp_count_comments();

			// wp_get_theme was introduced in 3.4, for compatibility with older versions, let's do a workaround for now.
			if ( function_exists( 'wp_get_theme' ) ) {
				$theme_data = wp_get_theme();
				$theme_name = urlencode( $theme_data->Name );
			} else {
				$theme_data = get_theme_data( get_stylesheet_directory() . '/style.css' );
				$theme_name = $theme_data['Name'];
			}

			$plugin_name = '&';
			foreach ( get_plugins() as $plugin_info ) {
				$plugin_name .= $plugin_info['Name'] . '&';
			}
			// CHANGE __FILE__ PATH IF LOCATED OUTSIDE MAIN PLUGIN FILE
			$plugin_data         = get_plugin_data( __FILE__ );
			$posts_with_comments = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->posts WHERE post_type='post' AND comment_count > 0" );
			$data                = array(
				'url'             => stripslashes( str_replace( array( 'http://', '/', ':' ), '', site_url() ) ),
				'posts'           => $count_posts->publish,
				'pages'           => $count_pages->publish,
				'comments'        => $comments_count->total_comments,
				'approved'        => $comments_count->approved,
				'spam'            => $comments_count->spam,
				'pingbacks'       => $wpdb->get_var( "SELECT COUNT(comment_ID) FROM $wpdb->comments WHERE comment_type = 'pingback'" ),
				'post_conversion' => ( $count_posts->publish > 0 && $posts_with_comments > 0 ) ? number_format( ( $posts_with_comments / $count_posts->publish ) * 100, 0, '.', '' ) : 0,
				'theme_version'   => $plugin_data['Version'],
				'theme_name'      => $theme_name,
				'site_name'       => str_replace( ' ', '', get_bloginfo( 'name' ) ),
				'plugins'         => count( get_option( 'active_plugins' ) ),
				'plugin'          => urlencode( $plugin_name ),
				'wpversion'       => get_bloginfo( 'version' ),
			);

			foreach ( $data as $k => $v ) {
				$url .= $k . '/' . $v . '/';
			}
			wp_remote_get( $url );
			set_transient( 'presstrends_cache_data', $data, 60 * 60 * 24 );
		}
	}

// PressTrends WordPress Action
add_action('admin_init', 'presstrends_AmministrazioneTrasparente_plugin');

/* =========== VISUALIZZAZIONE ARCHIVIO SPECIALE ============ */

// force use of templates from plugin folder
function at_force_template( $template ) {	
    if( is_tax( 'tipologie' ) || is_tax( 'annirif' ) || is_tax( 'ditte' ) ) {
		$theme_name = strtolower(wp_get_theme());
		if ($theme_name == 'pasw2013') {
			$template = WP_PLUGIN_DIR .'/'. plugin_basename( dirname(__FILE__) ) .'/pasw2013/paswarchive-tipologie.php';
		} else if (get_option('at_pasw_developer') == '1') { //Se è attivata la modalità "Forza template PASW"
			$template = WP_PLUGIN_DIR .'/'. plugin_basename( dirname(__FILE__) ) .'/pasw2013/paswarchive-tipologie.php';
		}
	
	} else if ( is_singular( 'amm-trasparente' ) ) {
		$theme_name = strtolower(wp_get_theme());
		if ($theme_name == 'pasw2013') {
			$template = WP_PLUGIN_DIR .'/'. plugin_basename( dirname(__FILE__) ) .'/pasw2013/paswsingle-tipologie.php';
		} else if (get_option('at_pasw_developer') == '1') { //Se è attivata la modalità "Forza template PASW"
			$template = WP_PLUGIN_DIR .'/'. plugin_basename( dirname(__FILE__) ) .'/pasw2013/paswsingle-tipologie.php';
		}
	}
	return $template;
}
add_filter( 'template_include', 'at_force_template' );

/* =========== FUNZIONI INCLUSE ============ */

require_once(plugin_dir_path(__FILE__) . 'settingsmenu.php');
require_once(plugin_dir_path(__FILE__) . 'widget/widget.php');
require_once(plugin_dir_path(__FILE__) . 'redirector.php');

add_action( 'admin_init', 'AT_FUNCTIONSLOAD');
function AT_FUNCTIONSLOAD () {

	require_once(plugin_dir_path(__FILE__) . 'admin-messages.php');
	//require_once(plugin_dir_path(__FILE__) . 'updatefunction.php'); rimosso il 10.01.2014 per fine compatibilità aggiornamento dalla v.1.1.2
	require_once(plugin_dir_path(__FILE__) . 'searchTaxonomy/searchTaxonomyGT.php');
	require_once(plugin_dir_path(__FILE__) . 'styledbackend.php');
	require_once(plugin_dir_path(__FILE__) . 'taxfilteringbackend.php');

}
?>