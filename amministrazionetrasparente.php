<?php
/*
Plugin Name: Amministrazione Trasparente
Plugin URI: http://amministrazioneaperta.wordpress.com/
Description: Soluzione completa per la pubblicazione online dei documenti ai sensi del D.lgs. n. 33 del 14/03/2013, riguardante il riordino della disciplina degli obblighi di pubblicità, trasparenza e diffusione di informazioni da parte delle pubbliche amministrazioni, in attuazione dell’art. 1, comma 35, della legge n. 190/2012.
Version: 0.2.2
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
	// 'capabilities' => array('manage_terms' => 'utentealieno','edit_terms'   => 'utentealieno','delete_terms' => 'utentealieno',),
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

/* =========== FUNZIONI INCLUSE ============ */

include(plugin_dir_path(__FILE__) . 'radiotaxonomy.php');
include(plugin_dir_path(__FILE__) . 'styledbackend.php');
include(plugin_dir_path(__FILE__) . 'settingsmenu.php');

?>