<?php
/*
Plugin Name: Amministrazione Trasparente
Plugin URI: http://amministrazioneaperta.wordpress.com/
Description: Soluzione completa per la pubblicazione online dei documenti ai sensi del D.lgs. n. 33 del 14/03/2013, riguardante il riordino della disciplina degli obblighi di pubblicità, trasparenza e diffusione di informazioni da parte delle pubbliche amministrazioni, in attuazione dell’art. 1, comma 35, della legge n. 190/2012.
Version: 1.1
Author: Marco Milesi
Author Email: milesimarco@outlook.com
License:
Copyright 2013 Marco Milesi (milesimarco@outlook.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


function register_cpt_documento_trasparenza() {

    $labels = array( 
        'name' => _x( 'Documenti', 'documenti_trasparenza' ),
        'singular_name' => _x( 'Documento', 'documento_trasparenza' ),
        'add_new' => _x( 'Nuovo', 'documento_trasparenza' ),
        'add_new_item' => _x( 'Nuovo Documento', 'documento_trasparenza' ),
        'edit_item' => _x( 'Modifica Documento', 'documento_trasparenza' ),
        'new_item' => _x( 'Nuovo Documento', 'documento_trasparenza' ),
        'view_item' => _x( 'Vedi Documento Trasparenza', 'documento_trasparenza' ),
        'search_items' => _x( 'Cerca Documenti', 'documento_trasparenza' ),
        'not_found' => _x( 'Nessun Documento trovato', 'documento_trasparenza' ),
        'not_found_in_trash' => _x( 'Nessun Documento trovato', 'documento_trasparenza' ),
        'parent_item_colon' => _x( 'Parent Documento AT:', 'documento_trasparenza' ),
        'menu_name' => _x( 'Trasparenza', 'documento_trasparenza' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'trasparenza',
        'supports' => array( 'title', 'editor', 'custom-fields' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => plugin_dir_url(__FILE__) . 'icon.png',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );


    register_post_type( 'amm-trasparente', $args );
}
add_action( 'init', 'register_cpt_documento_trasparenza' );

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
        'add_or_remove_items' => _x( 'Add or remove tipologie', 'tipologie' ),
        'choose_from_most_used' => _x( 'Choose from the most used tipologie', 'tipologie' ),
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
	'rewrite' => array('hierarchical' => true),
	'capabilities' => array('manage_terms' => 'utentealieno','edit_terms'   => 'utentealieno','delete_terms' => 'utentealieno',),
        'query_var' => true
    );
    register_taxonomy( 'tipologie', array('amm-trasparente'), $args );
    include(plugin_dir_path(__FILE__) . 'taxonomygenerator.php'); 
}

/* =========== TITOLO HCK =========== */
function at_nuovo_titolo($title)
{
    $screen = get_current_screen();
    if ('amm-trasparente' == $screen->post_type) {
        $title = 'Inserire il titolo della voce (documento/atto) da inserire';
    }
    return $title;
}
add_filter('enter_title_here', 'at_nuovo_titolo');

/* =========== SHORTCODES [at-table] & [at-list] ============ */

function at_table_shtc($atts)
{
    include(plugin_dir_path(__FILE__) . 'shortcodes-table.php');
}
add_shortcode('at-table', 'at_table_shtc');

function at_list_shtc($atts)
{
    include(plugin_dir_path(__FILE__) . 'shortcodes-list.php');
}
add_shortcode('at-list', 'at_list_shtc');

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

/* =========== FUNZIONI INCLUSE ============ */

include(plugin_dir_path(__FILE__) . 'styledbackend.php');
include(plugin_dir_path(__FILE__) . 'settingsmenu.php');
include(plugin_dir_path(__FILE__) . 'singlehack.php');

?>