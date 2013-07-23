<?php get_header(); ?> 
<div class="corpo">
    <?php get_sidebars('left'); ?>
	<div class="span-19">
        <div id="content">    
            <?php if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb('<p id="breadcrumbs">','</p>');
            } ?>
			
<style type="text/css">
.row {vertical-align: top; height:auto !important;}
.list {display:none;}
.show {display:none;}
.hide:target + .show {display:inline;}
.hide:target {display:none;}
.hide:target ~ .list {display:inline;}
@media print {.hide, .show {display:none;}}
</style>

<h1>Archivio: <?php echo $term->name; ?></h1>
<div class="row" style="font-size:0.8em;text-align:center;"><a href="#hideARCHIVE" class="hide" id="hideARCHIVE"">[+] Info Normativa</a><a href="#showARCHIVE"" class="show" id="showARCHIVE"">[-] Info Normativa</a> &bull; <a href="<?php echo get_option('at_option_url'); ?>" title="Torna alla lista">Torna alla lista</a>
<div class="list" style="text-align:left;"><p><?php echo term_description( $term->id, 'tipologie' ) ?></p><hr></div></div>
	
<?php if (have_posts()) : ?>
<?php
if( is_category('25') ) {
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args= array(
        'meta_key' => 'data_di_inizio',
        'orderby' => 'meta_value',
        'cat' => '25',
        'paged' => $paged,
        'order' => 'ASC',
                'posts_per_page' => 20,
    );
    query_posts($args);
}
?>
        <?php while (have_posts()) : the_post(); ?>

<?php
if ( is_category('25') ) {
$strings = array('navy', 'olive', 'firebrick', 'crimson', 'chartreuse', 'cornflowerblue', 'dimgray', 'limegreen', 'seagreen', 'teal');
$color = $strings[array_rand($strings)];
echo ('<div class="postarchive" style="background-color:' . $color . '; border: 2px solid ' . $color . ';">');
} else {
echo '<div class="post">';
}
?>


<?php if ( is_category('25') ) : ?>
<div class="entry"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><center><?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) {the_post_thumbnail( 'thumbnail'); } ?></center>
<h2 class="title"><?php the_title(); ?></a></h2>
</div>
<?php else : ?>
<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<div class="entry"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) {the_post_thumbnail( 'thumbnail', array('class' => 'alignleft') ); } ?></a>
<?php if ( is_category('25') ) : ?>
<?php else : ?><?php the_excerpt() ?><?php endif;?>
</div>
<?php endif;?>
<div class="postdate" style="padding:2px;background-color:<?php echo $color; ?>">
<?php if ( get_post_meta($post->ID, 'data_di_inizio', true) ) : ?>
<?php
$mesi = array(1=>'gennaio', 'febbraio', 'marzo', 'aprile', 'maggio', 'giugno', 'luglio', 'agosto', 'settembre', 'ottobre', 'novembre','dicembre');
list($giorno,$mese,$anno) = explode('-',date('d-n-Y',strtotime(get_post_meta($post->ID, 'data_di_inizio', true))));
echo $giorno,' ',$mesi[$mese],' ',$anno;?><?php endif; ?>
<?php if ( get_post_meta($post->ID, 'data_di_fine', true) ) : ?> 
<?php $mesi = array(1=>'gennaio', 'febbraio', 'marzo', 'aprile',
                'maggio', 'giugno', 'luglio', 'agosto',
                'settembre', 'ottobre', 'novembre','dicembre');
list($giorno,$mese,$anno) = explode('-',date('d-n-Y',strtotime(get_post_meta($post->ID, 'data_di_fine', true))));
echo ' - ';
echo $giorno,' ',$mesi[$mese],' ',$anno;?>
<?php endif; ?>

<?php if ( is_category('25') ) : ?>
<?php else : ?><img src="<?php bloginfo('template_url');?>/images/folder.png"/> Inserito il <?php the_time('j.m.Y') ?> (<?php the_category(', ')?>)<br/><?php endif;?><div style="clear:both;"></div>
</div>
            </div>

        <?php endwhile; ?>

<?php if ( is_category('25') ) : ?></div>
<?php else : ?>
            <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
        <div class="left"><div class="navigation"><?php next_posts_link('&laquo; Meno Recenti') ?></div></div>
        <div class="right"><div class="navigation"><?php previous_posts_link('Pi&ugrave; Recenti &raquo;') ?></div></div>
            <?php } ?>
<?php endif;?>

    <?php else :

        if ( is_category() ) { // If this is a category archive
            printf("<h2 class='pagetitle'>Nessun Risultato trovato.</h2>", single_cat_title('',false));
        } else if ( is_date() ) { // If this is a date archive
            echo("<h2 class='pagetitle'>Nessun Risultato trovato.</h2>");
        } else if ( is_author() ) { // If this is a category archive
            $userdata = get_userdatabylogin(get_query_var('author_name'));
            printf("<h2 class='pagetitle'>Nessun Risultato trovato.</h2>");
        } else {
            echo("<h2 class='pagetitle'>No posts found.</h2>");
        }
        get_search_form();

    endif;
?>

        </div>
        </div>
    </div>
<?php get_footer(); ?>