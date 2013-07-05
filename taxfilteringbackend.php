<?php
/* =========== FILTRAGGIO LISTA BACK-END === */

add_action( 'restrict_manage_posts', 'at_filter_list' );

function at_filter_list() {
    $screen = get_current_screen();
    global $wp_query;
    if ( $screen->post_type == 'amm-trasparente' ) {
        wp_dropdown_categories( array(
            'show_option_all' => 'Mostra tutte le tipologie',
            'taxonomy' => 'tipologie',
            'name' => 'tipologie',
            'orderby' => 'name',
            'selected' => ( isset( $wp_query->query['tipologie'] ) ? $wp_query->query['tipologie'] : '' ),
            'hierarchical' => false,
            'depth' => 3,
            'show_count' => false,
            'hide_empty' => false,
        ) );
    }
}

add_filter( 'parse_query','at_filtering' );

function at_filtering( $query ) {
    $qv = &$query->query_vars;
    if ( ( $qv['tipologie'] ) && is_numeric( $qv['tipologie'] ) ) {
        $term = get_term_by( 'id', $qv['tipologie'], 'tipologie' );
        $qv['tipologie'] = $term->slug;
    }
}
?>