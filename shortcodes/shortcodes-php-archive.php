<style type="text/css">
.row {vertical-align: top; height:auto !important;}
.list {display:none;}
.show {display:none;}
.hide:target + .show {display:inline;}
.hide:target {display:none;}
.hide:target ~ .list {display:inline;}
@media print {.hide, .show {display:none;}}
</style>

<div class="row" style="font-size:0.8em;text-align:center;"><a href="#hideARCHIVE" class="hide" id="hideARCHIVE"">[+] Info Normativa</a><a href="#showARCHIVE"" class="show" id="showARCHIVE"">[-] Info Normativa</a> &bull; <a href="<?php echo get_permalink(get_option('at_option_id')); ?>" title="Torna al sommario">Torna al sommario</a>
<div class="list" style="text-align:left;"><p><?php echo term_description( $term->id, 'tipologie' ) ?></p><hr></div></div>