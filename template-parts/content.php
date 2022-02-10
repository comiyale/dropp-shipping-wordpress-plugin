<?php
/**
 * The template part for displaying content
 * @package Dropshipping Store
 * @subpackage dropshipping_store
 * @since 1.0
 */
?>

<?php $dropshipping_store_theme_lay = get_theme_mod( 'dropshipping_store_post_layouts','Layout 1');
if($dropshipping_store_theme_lay == 'Layout 1'){ 
	get_template_part('template-parts/Post-layouts/layout1'); 
}else if($dropshipping_store_theme_lay == 'Layout 2'){ 
	get_template_part('template-parts/Post-layouts/layout2'); 
}else if($dropshipping_store_theme_lay == 'Layout 3'){ 
	get_template_part('template-parts/Post-layouts/layout3'); 
}else{ 
	get_template_part('template-parts/Post-layouts/layout1'); 
}