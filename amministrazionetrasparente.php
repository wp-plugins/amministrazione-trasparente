<?php
/*
Plugin Name: Amministrazione Trasparente
Plugin URI: http://wpgov.it/soluzioni/amministrazione-trasparente/
Description: Soluzione completa per la pubblicazione online dei documenti ai sensi del D.lgs. n. 33 del 14/03/2013, riguardante il riordino della disciplina degli obblighi di pubblicità, trasparenza e diffusione di informazioni da parte delle pubbliche amministrazioni, in attuazione dell’art. 1, comma 35, della legge n. 190/2012.
Version: 4
Author: Marco Milesi
Author Email: milesimarco@outlook.com
Author URI: http://marcomilesi.ml
License: GPL Attribution-ShareAlike
*/

add_action( 'init', 'AT_RegistraTAX');
function AT_RegistraTAX() {
	
    $labels = array( 
        'name' => _x( 'Sezioni', 'tipologie' ),
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
add_action( 'init', 'register_taxonomy_areesettori' );
if(!(function_exists('register_taxonomy_areesettori'))){
	

	function register_taxonomy_areesettori() {

		$labels = array( 
			'name' => _x( 'Uffici - Settori - Centri di costo', 'areesettori' ),
			'singular_name' => _x( 'Settore - Centro di costo', 'areesettori' ),
			'search_items' => _x( 'Cerca in Settori - Centri di costo', 'areesettori' ),
			'popular_items' => _x( 'Settori - Centri di costo Più usati', 'areesettori' ),
			'all_items' => _x( 'Tutti i Centri di costo', 'areesettori' ),
			'parent_item' => _x( 'Parent Settore - Centro di costo', 'areesettori' ),
			'parent_item_colon' => _x( 'Parent Settore - Centro di costo:', 'areesettori' ),
			'edit_item' => _x( 'Modifica Settore - Centro di costo', 'areesettori' ),
			'update_item' => _x( 'Aggiorna Settore - Centro di costo', 'areesettori' ),
			'add_new_item' => _x( 'Aggiungi Nuovo Settore - Centro di costo', 'areesettori' ),
			'new_item_name' => _x( 'Nuovo Settore - Centro di costo', 'areesettori' ),
			'separate_items_with_commas' => _x( 'Separate settori - centri di costo with commas', 'areesettori' ),
			'add_or_remove_items' => _x( 'Add or remove settori - centri di costo', 'areesettori' ),
			'choose_from_most_used' => _x( 'Choose from the most used settori - centri di costo', 'areesettori' ),
			'menu_name' => _x( 'Uffici & Settori', 'areesettori' ),
		);

		$args = array( 
			'labels' => $labels,
			'public' => true,
			'show_in_nav_menus' => false,
			'show_ui' => true,
			'show_tagcloud' => false,
			'show_admin_column' => true,
			'hierarchical' => true,

			'rewrite' => true,
			'query_var' => true
		);
		register_taxonomy( 'areesettori', array('incarico', 'spesa', 'avcp', 'amm-trasparente'), $args );
	}
}

/* REGISTRA CUSTOM POST TYPE */

add_action( 'init', 'register_cpt_documento_trasparenza' );
function register_cpt_documento_trasparenza() {

    $labels = array( 
        'name' => _x( 'Amministrazione Trasparente', 'documenti_trasparenza' ),
        'singular_name' => _x( 'Documento Trasparenza', 'documento_trasparenza' ),
        'add_new' => _x( 'Nuova voce', 'documento_trasparenza' ),
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
        'menu_position' => 36,
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

/* =========== VISUALIZZAZIONE ARCHIVIO SPECIALE ============ */

// force use of templates from plugin folder
function at_force_template( $template ) {
	$current_page_URL = 'http://' . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
	if (get_permalink(get_option('at_option_id')) == $current_page_URL) {
		add_action('wp_head','at_table_css');
	}
	
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

function at_table_css()
{
	$at_output='<style type="text/css">.at-tableclass {width:49%;float:left;padding:0px 0px 0px 5px;position:relative;min-width: 200px;} .at-tableclass h3 a {text-decoration:none;}</style>';
	echo $at_output;
}
/* =========== FUNZIONI INCLUSE ============ */

require_once(plugin_dir_path(__FILE__) . 'widget/widget.php');
require_once(plugin_dir_path(__FILE__) . 'redirector.php');
require_once(plugin_dir_path(__FILE__) . 'admin-messages.php');
require_once(plugin_dir_path(__FILE__) . 'separators.php');

add_action( 'admin_init', 'AT_ADMIN_LOAD');
function AT_ADMIN_LOAD () {
	require_once(plugin_dir_path(__FILE__) . 'searchTaxonomy/searchTaxonomyGT.php');
	require_once(plugin_dir_path(__FILE__) . 'styledbackend.php');
	require_once(plugin_dir_path(__FILE__) . 'taxfilteringbackend.php');
	require_once(plugin_dir_path(__FILE__) . 'register_setting.php');
}
require_once(plugin_dir_path(__FILE__) . 'govconfig/loader_shared.php');
?>