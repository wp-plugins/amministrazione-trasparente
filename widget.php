<?php

//Il codice seguente genera un Widget utilizzabile nelle proprie sidebar
class atWidget extends WP_Widget {

    function atWidget() {
        parent::__construct( false, 'Amm. Trasparente' );
    }
    function widget( $args, $instance ) {
        extract($args);
	$current_page_URL = 'http://' . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
	$get_is_logic = get_option('at_logic_widget');
		if ($get_is_logic == '1') {
			if ( is_tax( 'tipologie' ) ) {
			} else if ( is_singular( 'amm-trasparente' ) ) {
			} else if (get_permalink(get_option('at_option_id')) == $current_page_URL) {
			} else {
			return false;
			}
		}
        echo $before_widget;
        echo $before_title.$instance['title'].$after_title;
 
        //DA QUI INIZIA IL WIDGET VERO E PROPRIO
		$get_is_collas = get_option('at_option_widget');
		if ($get_is_collas == '1') {
			include(plugin_dir_path(__FILE__) . 'widget-output-collapse.php');
		} else {
			include(plugin_dir_path(__FILE__) . 'widget-output-list.php');
        }
		//FINE WIDGET
 
        echo $after_widget;
    }
    function update( $new_instance, $old_instance ) {
        return $new_instance;
    }
    function form( $instance ) {
		if (isset($_POST['submitted'])) {
			//Salva l'opzione voci espandibili
			if (isset($_POST['at_option_widget_n'])){
				update_option( 'at_option_widget', '1' );
			} else {
				update_option( 'at_option_widget', '0' );
			}
			//Salva l'opzione "Logic"
			if (isset($_POST['at_logic_widget_n'])){
				update_option( 'at_logic_widget', '1' );
			} else {
				update_option( 'at_logic_widget', '0' );
			}
		}
        $title = esc_attr($instance['title']); ?>
        <p><label for="<?php echo $this->get_field_id('title');?>">
        Titolo: <input class="widefat" id="<?php echo $this->get_field_id('title');?>" name="<?php echo $this->get_field_name('title');?>" type="text" value="<?php echo $title; ?>" />
        </label></p>
		<p><input type="checkbox" name="at_option_widget_n"
		<?php $get_show_widget = get_option('at_option_widget');
		if ($get_show_widget == '1') {
			echo ' checked=\'checked\'';
		}
		?>
		/> Voci espandibili</p>
		<p><input type="checkbox" name="at_logic_widget_n"
		<?php $get_logic_widget = get_option('at_logic_widget');
		if ($get_logic_widget == '1') {
			echo ' checked=\'checked\'';
		}
		?>
		/> Visualizza solo nella pagina indicata nelle impostazioni, pagina archivio e singola dei documenti</p>
		<input type="hidden" name="submitted" value="1" />
        <?php
    }
}
 
function at_register_widgets() {
    register_widget( 'atWidget' );
}
 
add_action( 'widgets_init', 'at_register_widgets' );


//Il codice seguente mostra il contatore nella bacheca wp-admin

// Add custom taxonomies and custom post types counts to dashboard
add_action( 'right_now_content_table_end', 'my_add_counts_to_dashboard' );

function my_add_counts_to_dashboard() {
 
    // Custom post types counts
    $post_types = get_post_types( array( '_builtin' => false ), 'objects' );
    foreach ( $post_types as $post_type ) {
        $num_posts = wp_count_posts( $post_type->name );
        $num = number_format_i18n( $num_posts->publish );
        $text = _n( $post_type->labels->singular_name, $post_type->labels->name, $num_posts->publish );
        if ( current_user_can( 'edit_posts' ) ) {
            $num = '<a href="edit.php?post_type=' . $post_type->name . '">' . $num . '</a>';
            $text = '<a href="edit.php?post_type=' . $post_type->name . '">' . $text . '</a>';
        }
        echo '<td class="first b b-' . $post_type->name . 's">' . $num . '</td>';
        echo '<td class="t ' . $post_type->name . 's">' . $text . '</td>';
        echo '</tr>';

        if ( $num_posts->pending > 0 ) {
            $num = number_format_i18n( $num_posts->pending );
            $text = _n( $post_type->labels->singular_name . ' pending', $post_type->labels->name . ' pending', $num_posts->pending );
            if ( current_user_can( 'edit_posts' ) ) {
                $num = '<a href="edit.php?post_status=pending&post_type=' . $post_type->name . '">' . $num . '</a>';
                $text = '<a href="edit.php?post_status=pending&post_type=' . $post_type->name . '">' . $text . '</a>';
            }
            echo '<td class="first b b-' . $post_type->name . 's">' . $num . '</td>';
            echo '<td class="t ' . $post_type->name . 's">' . $text . '</td>';
            echo '</tr>';
        }
    }
	$showTaxonomies = 1;
    // Custom taxonomies counts
    if ($showTaxonomies) {
        $taxonomies = get_taxonomies( array( '_builtin' => false ), 'objects' );
        foreach ( $taxonomies as $taxonomy ) {
            $num_terms  = wp_count_terms( $taxonomy->name );
            $num = number_format_i18n( $num_terms );
            $text = _n( $taxonomy->labels->singular_name, $taxonomy->labels->name, $num_terms );
            $associated_post_type = $taxonomy->object_type;
            if ( current_user_can( 'manage_categories' ) ) {
                $num = $num;
                $text = $text;
            }
            echo '<td class="first b b-' . $taxonomy->name . 's">' . $num . '</td>';
            echo '<td class="t ' . $taxonomy->name . 's">' . $text . '</td>';
            echo '</tr><tr>';
        }
    }
}
?>