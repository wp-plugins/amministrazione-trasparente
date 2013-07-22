<?php
add_action( 'admin_init', 'at_perform_upgrade');

function at_perform_upgrade() {
		$term = get_term_by('slug','programma-per-la-trasparenza-e-l-integrita','tipologie');
		$termid = $term->term_id;	
		wp_delete_term($termid, 'tipologie' );
}
?>