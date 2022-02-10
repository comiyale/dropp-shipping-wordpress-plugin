<?php

	/*---------------------------Width Layout -------------------*/
	$dropshipping_store_theme_lay = get_theme_mod( 'dropshipping_store_width_layout_options','Default');
    if($dropshipping_store_theme_lay == 'Default'){
		$dropshipping_store_custom_css .='body{';
			$dropshipping_store_custom_css .='max-width: 100%;';
		$dropshipping_store_custom_css .='}';
	}else if($dropshipping_store_theme_lay == 'Container Layout'){
		$dropshipping_store_custom_css .='body{';
			$dropshipping_store_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$dropshipping_store_custom_css .='}';
	}else if($dropshipping_store_theme_lay == 'Box Layout'){
		$dropshipping_store_custom_css .='body{';
			$dropshipping_store_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$dropshipping_store_custom_css .='}';
	}

	/*---------------------------Slider Content Layout -------------------*/
	$dropshipping_store_theme_lay = get_theme_mod( 'dropshipping_store_slider_content_layout','Left');
    if($dropshipping_store_theme_lay == 'Left'){
		$dropshipping_store_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .more-btn {';
			$dropshipping_store_custom_css .='text-align:left;';
		$dropshipping_store_custom_css .='}';
	}else if($dropshipping_store_theme_lay == 'Center'){
		$dropshipping_store_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .more-btn{';
			$dropshipping_store_custom_css .='text-align:center;';
		$dropshipping_store_custom_css .='}';
	}else if($dropshipping_store_theme_lay == 'Right'){
		$dropshipping_store_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .more-btn {';
			$dropshipping_store_custom_css .='text-align:right;';
		$dropshipping_store_custom_css .='}';
	}

	/*------------ Slider Opacity -------------------*/
	$dropshipping_store_theme_lay = get_theme_mod( 'dropshipping_store_slider_opacity','0.7');
	if($dropshipping_store_theme_lay == '0'){
	$dropshipping_store_custom_css .='#slider .slider-bg img{';
		$dropshipping_store_custom_css .='opacity:0';
	$dropshipping_store_custom_css .='}';
	}else if($dropshipping_store_theme_lay == '0.1'){
	$dropshipping_store_custom_css .='#slider .slider-bg img{';
		$dropshipping_store_custom_css .='opacity:0.1';
	$dropshipping_store_custom_css .='}';
	}else if($dropshipping_store_theme_lay == '0.2'){
	$dropshipping_store_custom_css .='#slider .slider-bg img{';
		$dropshipping_store_custom_css .='opacity:0.2';
	$dropshipping_store_custom_css .='}';
	}else if($dropshipping_store_theme_lay == '0.3'){
	$dropshipping_store_custom_css .='#slider .slider-bg img{';
		$dropshipping_store_custom_css .='opacity:0.3';
	$dropshipping_store_custom_css .='}';
	}else if($dropshipping_store_theme_lay == '0.4'){
	$dropshipping_store_custom_css .='#slider .slider-bg img{';
		$dropshipping_store_custom_css .='opacity:0.4';
	$dropshipping_store_custom_css .='}';
	}else if($dropshipping_store_theme_lay == '0.5'){
	$dropshipping_store_custom_css .='#slider .slider-bg img{';
		$dropshipping_store_custom_css .='opacity:0.5';
	$dropshipping_store_custom_css .='}';
	}else if($dropshipping_store_theme_lay == '0.6'){
	$dropshipping_store_custom_css .='#slider .slider-bg img{';
		$dropshipping_store_custom_css .='opacity:0.6';
	$dropshipping_store_custom_css .='}';
	}else if($dropshipping_store_theme_lay == '0.7'){
	$dropshipping_store_custom_css .='#slider .slider-bg img{';
		$dropshipping_store_custom_css .='opacity:0.7';
	$dropshipping_store_custom_css .='}';
	}else if($dropshipping_store_theme_lay == '0.8'){
	$dropshipping_store_custom_css .='#slider .slider-bg img{';
		$dropshipping_store_custom_css .='opacity:0.8';
	$dropshipping_store_custom_css .='}';
	}else if($dropshipping_store_theme_lay == '0.9'){
	$dropshipping_store_custom_css .='#slider .slider-bg img{';
		$dropshipping_store_custom_css .='opacity:0.9';
	$dropshipping_store_custom_css .='}';
	}

	/*-------------- Footer Text -------------------*/
	$dropshipping_store_footer_text_align = get_theme_mod('dropshipping_store_footer_text_align');
	$dropshipping_store_custom_css .='.copyright-wrapper{';
		$dropshipping_store_custom_css .='text-align: '.esc_attr($dropshipping_store_footer_text_align).';';
	$dropshipping_store_custom_css .='}';

	$dropshipping_store_footer_text_padding = get_theme_mod('dropshipping_store_footer_text_padding');
	$dropshipping_store_custom_css .='.copyright-wrapper{';
		$dropshipping_store_custom_css .='padding-top: '.esc_attr($dropshipping_store_footer_text_padding).'px; padding-bottom: '.esc_attr($dropshipping_store_footer_text_padding).'px;';
	$dropshipping_store_custom_css .='}';

	$dropshipping_store_footer_bg_color = get_theme_mod('dropshipping_store_footer_bg_color');
	$dropshipping_store_custom_css .='.footer-wp{';
		$dropshipping_store_custom_css .='background-color: '.esc_attr($dropshipping_store_footer_bg_color).';';
	$dropshipping_store_custom_css .='}';

	$dropshipping_store_footer_bg_image = get_theme_mod('dropshipping_store_footer_bg_image');
	if($dropshipping_store_footer_bg_image != false){
		$dropshipping_store_custom_css .='.footer-wp{';
			$dropshipping_store_custom_css .='background: url('.esc_attr($dropshipping_store_footer_bg_image).');';
		$dropshipping_store_custom_css .='}';
	}

	$dropshipping_store_copyright_text_font_size = get_theme_mod('dropshipping_store_copyright_text_font_size', 15);
	$dropshipping_store_custom_css .='.copyright-wrapper p, .copyright-wrapper a{';
		$dropshipping_store_custom_css .='font-size: '.esc_attr($dropshipping_store_copyright_text_font_size).'px;';
	$dropshipping_store_custom_css .='}';

	/*------------- Back to Top  -------------------*/
	$dropshipping_store_back_to_top_border_radius = get_theme_mod('dropshipping_store_back_to_top_border_radius');
	$dropshipping_store_custom_css .='#scrollbutton i{';
		$dropshipping_store_custom_css .='border-radius: '.esc_attr($dropshipping_store_back_to_top_border_radius).'px;';
	$dropshipping_store_custom_css .='}';

	$dropshipping_store_scroll_icon_font_size = get_theme_mod('dropshipping_store_scroll_icon_font_size', 22);
	$dropshipping_store_custom_css .='#scrollbutton i{';
		$dropshipping_store_custom_css .='font-size: '.esc_attr($dropshipping_store_scroll_icon_font_size).'px;';
	$dropshipping_store_custom_css .='}';

	$dropshipping_store_top_bottom_scroll_padding = get_theme_mod('dropshipping_store_top_bottom_scroll_padding', 12);
	$dropshipping_store_custom_css .='#scrollbutton i{';
		$dropshipping_store_custom_css .='padding-top: '.esc_attr($dropshipping_store_top_bottom_scroll_padding).'px; padding-bottom: '.esc_attr($dropshipping_store_top_bottom_scroll_padding).'px;';
	$dropshipping_store_custom_css .='}';

	$dropshipping_store_left_right_scroll_padding = get_theme_mod('dropshipping_store_left_right_scroll_padding', 17);
	$dropshipping_store_custom_css .='#scrollbutton i{';
		$dropshipping_store_custom_css .='padding-left: '.esc_attr($dropshipping_store_left_right_scroll_padding).'px; padding-right: '.esc_attr($dropshipping_store_left_right_scroll_padding).'px;';
	$dropshipping_store_custom_css .='}';

	/*-------------- Post Button  -------------------*/
	$dropshipping_store_post_button_padding_top = get_theme_mod('dropshipping_store_post_button_padding_top');
	$dropshipping_store_custom_css .='.postbtn a, #comments input[type="submit"].submit{';
		$dropshipping_store_custom_css .='padding-top: '.esc_attr($dropshipping_store_post_button_padding_top).'px; padding-bottom: '.esc_attr($dropshipping_store_post_button_padding_top).'px;';
	$dropshipping_store_custom_css .='}';

	$dropshipping_store_post_button_padding_right = get_theme_mod('dropshipping_store_post_button_padding_right');
	$dropshipping_store_custom_css .='.postbtn a, #comments input[type="submit"].submit{';
		$dropshipping_store_custom_css .='padding-left: '.esc_attr($dropshipping_store_post_button_padding_right).'px; padding-right: '.esc_attr($dropshipping_store_post_button_padding_right).'px;';
	$dropshipping_store_custom_css .='}';

	$dropshipping_store_post_button_border_radius = get_theme_mod('dropshipping_store_post_button_border_radius');
	$dropshipping_store_custom_css .='.postbtn a, #comments input[type="submit"].submit{';
		$dropshipping_store_custom_css .='border-radius: '.esc_attr($dropshipping_store_post_button_border_radius).'px;';
	$dropshipping_store_custom_css .='}';

	$dropshipping_store_post_comment_enable = get_theme_mod('dropshipping_store_post_comment_enable',true);
	if($dropshipping_store_post_comment_enable == false){
		$dropshipping_store_custom_css .='#comments{';
			$dropshipping_store_custom_css .='display: none;';
		$dropshipping_store_custom_css .='}';
	}

	/*----------- Preloader Color Option  ----------------*/
	$dropshipping_store_preloader_bg_color_option = get_theme_mod('dropshipping_store_preloader_bg_color_option');
	$dropshipping_store_preloader_icon_color_option = get_theme_mod('dropshipping_store_preloader_icon_color_option');
	$dropshipping_store_custom_css .='.frame{';
		$dropshipping_store_custom_css .='background-color: '.esc_attr($dropshipping_store_preloader_bg_color_option).';';
	$dropshipping_store_custom_css .='}';
	$dropshipping_store_custom_css .='.dot-1,.dot-2,.dot-3{';
		$dropshipping_store_custom_css .='background-color: '.esc_attr($dropshipping_store_preloader_icon_color_option).';';
	$dropshipping_store_custom_css .='}';

	// preloader type
	$dropshipping_store_theme_lay = get_theme_mod( 'dropshipping_store_preloader_type','First Preloader Type');
    if($dropshipping_store_theme_lay == 'First Preloader Type'){
		$dropshipping_store_custom_css .='.dot-1, .dot-2, .dot-3{';
			$dropshipping_store_custom_css .='';
		$dropshipping_store_custom_css .='}';
	}else if($dropshipping_store_theme_lay == 'Second Preloader Type'){
		$dropshipping_store_custom_css .='.dot-1, .dot-2, .dot-3{';
			$dropshipping_store_custom_css .='border-radius:0;';
		$dropshipping_store_custom_css .='}';
	}

	/*------------------ Skin Option  -------------------*/
	$dropshipping_store_theme_lay = get_theme_mod( 'dropshipping_store_background_skin','Without Background');
    if($dropshipping_store_theme_lay == 'With Background'){
		$dropshipping_store_custom_css .='.inner-service,#sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.front-page-content,.background-img-skin{';
			$dropshipping_store_custom_css .='background-color: #fff; padding:20px;';
		$dropshipping_store_custom_css .='}';
		$dropshipping_store_custom_css .='.login-box a{';
			$dropshipping_store_custom_css .='background-color: #fff;';
		$dropshipping_store_custom_css .='}';
	}else if($dropshipping_store_theme_lay == 'Without Background'){
		$dropshipping_store_custom_css .='{';
			$dropshipping_store_custom_css .='background-color: transparent;';
		$dropshipping_store_custom_css .='}';
	}

	/*-------------- Woocommerce Button  -------------------*/
	$dropshipping_store_woocommerce_button_padding_top = get_theme_mod('dropshipping_store_woocommerce_button_padding_top',12);
	$dropshipping_store_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$dropshipping_store_custom_css .='padding-top: '.esc_attr($dropshipping_store_woocommerce_button_padding_top).'px; padding-bottom: '.esc_attr($dropshipping_store_woocommerce_button_padding_top).'px;';
	$dropshipping_store_custom_css .='}';
	

	$dropshipping_store_woocommerce_button_padding_right = get_theme_mod('dropshipping_store_woocommerce_button_padding_right',15);
	$dropshipping_store_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$dropshipping_store_custom_css .='padding-left: '.esc_attr($dropshipping_store_woocommerce_button_padding_right).'px; padding-right: '.esc_attr($dropshipping_store_woocommerce_button_padding_right).'px;';
	$dropshipping_store_custom_css .='}';

	$dropshipping_store_woocommerce_button_border_radius = get_theme_mod('dropshipping_store_woocommerce_button_border_radius',10);
	$dropshipping_store_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$dropshipping_store_custom_css .='border-radius: '.esc_attr($dropshipping_store_woocommerce_button_border_radius).'px;';
	$dropshipping_store_custom_css .='}';

	$dropshipping_store_related_product_enable = get_theme_mod('dropshipping_store_related_product_enable',true);
	if($dropshipping_store_related_product_enable == false){
		$dropshipping_store_custom_css .='.related.products{';
			$dropshipping_store_custom_css .='display: none;';
		$dropshipping_store_custom_css .='}';
	}

	$dropshipping_store_woocommerce_product_border_enable = get_theme_mod('dropshipping_store_woocommerce_product_border_enable',true);
	if($dropshipping_store_woocommerce_product_border_enable == false){
		$dropshipping_store_custom_css .='.products li{';
			$dropshipping_store_custom_css .='border: none;';
		$dropshipping_store_custom_css .='}';
	}

	$dropshipping_store_woocommerce_product_padding_top = get_theme_mod('dropshipping_store_woocommerce_product_padding_top',10);
	$dropshipping_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$dropshipping_store_custom_css .='padding-top: '.esc_attr($dropshipping_store_woocommerce_product_padding_top).'px !important; padding-bottom: '.esc_attr($dropshipping_store_woocommerce_product_padding_top).'px !important;';
	$dropshipping_store_custom_css .='}';

	$dropshipping_store_woocommerce_product_padding_right = get_theme_mod('dropshipping_store_woocommerce_product_padding_right',10);
	$dropshipping_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$dropshipping_store_custom_css .='padding-left: '.esc_attr($dropshipping_store_woocommerce_product_padding_right).'px !important; padding-right: '.esc_attr($dropshipping_store_woocommerce_product_padding_right).'px !important;';
	$dropshipping_store_custom_css .='}';

	$dropshipping_store_woocommerce_product_border_radius = get_theme_mod('dropshipping_store_woocommerce_product_border_radius',0);
	$dropshipping_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$dropshipping_store_custom_css .='border-radius: '.esc_attr($dropshipping_store_woocommerce_product_border_radius).'px;';
	$dropshipping_store_custom_css .='}';

	$dropshipping_store_woocommerce_product_box_shadow = get_theme_mod('dropshipping_store_woocommerce_product_box_shadow', 5);
	$dropshipping_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$dropshipping_store_custom_css .='box-shadow: '.esc_attr($dropshipping_store_woocommerce_product_box_shadow).'px '.esc_attr($dropshipping_store_woocommerce_product_box_shadow).'px '.esc_attr($dropshipping_store_woocommerce_product_box_shadow).'px #eee;';
	$dropshipping_store_custom_css .='}';

	$dropshipping_store_woo_product_sale_top_bottom_padding = get_theme_mod('dropshipping_store_woo_product_sale_top_bottom_padding', 0);
	$dropshipping_store_woo_product_sale_left_right_padding = get_theme_mod('dropshipping_store_woo_product_sale_left_right_padding', 0);
	$dropshipping_store_custom_css .='.woocommerce span.onsale{';
		$dropshipping_store_custom_css .='padding-top: '.esc_attr($dropshipping_store_woo_product_sale_top_bottom_padding).'px; padding-bottom: '.esc_attr($dropshipping_store_woo_product_sale_top_bottom_padding).'px; padding-left: '.esc_attr($dropshipping_store_woo_product_sale_left_right_padding).'px; padding-right: '.esc_attr($dropshipping_store_woo_product_sale_left_right_padding).'px; display:inline-block;';
	$dropshipping_store_custom_css .='}';

	$dropshipping_store_woo_product_sale_border_radius = get_theme_mod('dropshipping_store_woo_product_sale_border_radius',50);
	$dropshipping_store_custom_css .='.woocommerce span.onsale {';
		$dropshipping_store_custom_css .='border-radius: '.esc_attr($dropshipping_store_woo_product_sale_border_radius).'px;';
	$dropshipping_store_custom_css .='}';

	$dropshipping_store_woo_product_sale_position = get_theme_mod('dropshipping_store_woo_product_sale_position', 'Right');
	if($dropshipping_store_woo_product_sale_position == 'Right' ){
		$dropshipping_store_custom_css .='.woocommerce ul.products li.product .onsale{';
			$dropshipping_store_custom_css .=' left:auto; right:0;';
		$dropshipping_store_custom_css .='}';
	}elseif($dropshipping_store_woo_product_sale_position == 'Left' ){
		$dropshipping_store_custom_css .='.woocommerce ul.products li.product .onsale{';
			$dropshipping_store_custom_css .=' left:0; right:auto;';
		$dropshipping_store_custom_css .='}';
	}

	$dropshipping_store_wooproduct_sale_font_size = get_theme_mod('dropshipping_store_wooproduct_sale_font_size',14);
	$dropshipping_store_custom_css .='.woocommerce span.onsale{';
		$dropshipping_store_custom_css .='font-size: '.esc_attr($dropshipping_store_wooproduct_sale_font_size).'px;';
	$dropshipping_store_custom_css .='}';

	// Responsive Media
	$dropshipping_store_post_date = get_theme_mod( 'dropshipping_store_display_post_date',true);
	if($dropshipping_store_post_date == true && get_theme_mod( 'dropshipping_store_metafields_date',true) != true){
    	$dropshipping_store_custom_css .='.metabox .entry-date{';
			$dropshipping_store_custom_css .='display:none;';
		$dropshipping_store_custom_css .='} ';
	}
    if($dropshipping_store_post_date == true){
    	$dropshipping_store_custom_css .='@media screen and (max-width:575px) {';
		$dropshipping_store_custom_css .='.metabox .entry-date{';
			$dropshipping_store_custom_css .='display:inline-block;';
		$dropshipping_store_custom_css .='} }';
	}else if($dropshipping_store_post_date == false){
		$dropshipping_store_custom_css .='@media screen and (max-width:575px){';
		$dropshipping_store_custom_css .='.metabox .entry-date{';
			$dropshipping_store_custom_css .='display:none;';
		$dropshipping_store_custom_css .='} }';
	}

	$dropshipping_store_post_author = get_theme_mod( 'dropshipping_store_display_post_author',true);
	if($dropshipping_store_post_author == true && get_theme_mod( 'dropshipping_store_metafields_author',true) != true){
    	$dropshipping_store_custom_css .='.metabox .entry-author{';
			$dropshipping_store_custom_css .='display:none;';
		$dropshipping_store_custom_css .='} ';
	}
    if($dropshipping_store_post_author == true){
    	$dropshipping_store_custom_css .='@media screen and (max-width:575px) {';
		$dropshipping_store_custom_css .='.metabox .entry-author{';
			$dropshipping_store_custom_css .='display:inline-block;';
		$dropshipping_store_custom_css .='} }';
	}else if($dropshipping_store_post_author == false){
		$dropshipping_store_custom_css .='@media screen and (max-width:575px){';
		$dropshipping_store_custom_css .='.metabox .entry-author{';
			$dropshipping_store_custom_css .='display:none;';
		$dropshipping_store_custom_css .='} }';
	}

	$dropshipping_store_post_comment = get_theme_mod( 'dropshipping_store_display_post_comment',true);
	if($dropshipping_store_post_comment == true && get_theme_mod( 'dropshipping_store_metafields_comment',true) != true){
    	$dropshipping_store_custom_css .='.metabox .entry-comments{';
			$dropshipping_store_custom_css .='display:none;';
		$dropshipping_store_custom_css .='} ';
	}
    if($dropshipping_store_post_comment == true){
    	$dropshipping_store_custom_css .='@media screen and (max-width:575px) {';
		$dropshipping_store_custom_css .='.metabox .entry-comments{';
			$dropshipping_store_custom_css .='display:inline-block;';
		$dropshipping_store_custom_css .='} }';
	}else if($dropshipping_store_post_comment == false){
		$dropshipping_store_custom_css .='@media screen and (max-width:575px){';
		$dropshipping_store_custom_css .='.metabox .entry-comments{';
			$dropshipping_store_custom_css .='display:none;';
		$dropshipping_store_custom_css .='} }';
	}

	$dropshipping_store_post_time = get_theme_mod( 'dropshipping_store_display_post_time',false);
	if($dropshipping_store_post_time == true && get_theme_mod( 'dropshipping_store_metafields_time',false) != true){
    	$dropshipping_store_custom_css .='.metabox .entry-time{';
			$dropshipping_store_custom_css .='display:none;';
		$dropshipping_store_custom_css .='} ';
	}
    if($dropshipping_store_post_time == true){
    	$dropshipping_store_custom_css .='@media screen and (max-width:575px) {';
		$dropshipping_store_custom_css .='.metabox .entry-time{';
			$dropshipping_store_custom_css .='display:inline-block;';
		$dropshipping_store_custom_css .='} }';
	}else if($dropshipping_store_post_time == false){
		$dropshipping_store_custom_css .='@media screen and (max-width:575px){';
		$dropshipping_store_custom_css .='.metabox .entry-time{';
			$dropshipping_store_custom_css .='display:none;';
		$dropshipping_store_custom_css .='} }';
	}

	if($dropshipping_store_post_date == false && $dropshipping_store_post_author == false && $dropshipping_store_post_comment == false && $dropshipping_store_post_time == false){
		$dropshipping_store_custom_css .='@media screen and (max-width:575px) {';
    	$dropshipping_store_custom_css .='.metabox {';
			$dropshipping_store_custom_css .='display:none;';
		$dropshipping_store_custom_css .='} }';
	}

	$dropshipping_store_metafields_date = get_theme_mod( 'dropshipping_store_metafields_date',true);
	$dropshipping_store_metafields_author = get_theme_mod( 'dropshipping_store_metafields_author',true);
	$dropshipping_store_metafields_comment = get_theme_mod( 'dropshipping_store_metafields_comment',true);
	$dropshipping_store_metafields_time = get_theme_mod( 'dropshipping_store_metafields_time',true);
	if($dropshipping_store_metafields_date == false && $dropshipping_store_metafields_author == false && $dropshipping_store_metafields_comment == false && $dropshipping_store_metafields_time == false){
		$dropshipping_store_custom_css .='@media screen and (min-width:576px) {';
    	$dropshipping_store_custom_css .='.metabox {';
			$dropshipping_store_custom_css .='display:none;';
		$dropshipping_store_custom_css .='} }';
	}

	$dropshipping_store_slider = get_theme_mod( 'dropshipping_store_display_slider',false);
	if($dropshipping_store_slider == true && get_theme_mod( 'dropshipping_store_slider_hide', false) == false){
    	$dropshipping_store_custom_css .='#slider{';
			$dropshipping_store_custom_css .='display:none;';
		$dropshipping_store_custom_css .='} ';
	}
    if($dropshipping_store_slider == true){
    	$dropshipping_store_custom_css .='@media screen and (max-width:575px) {';
		$dropshipping_store_custom_css .='#slider{';
			$dropshipping_store_custom_css .='display:block;';
		$dropshipping_store_custom_css .='} }';
	}else if($dropshipping_store_slider == false){
		$dropshipping_store_custom_css .='@media screen and (max-width:575px){';
		$dropshipping_store_custom_css .='#slider{';
			$dropshipping_store_custom_css .='display:none;';
		$dropshipping_store_custom_css .='} }';
	}

	$dropshipping_store_sidebar = get_theme_mod( 'dropshipping_store_display_sidebar',true);
    if($dropshipping_store_sidebar == true){
    	$dropshipping_store_custom_css .='@media screen and (max-width:575px) {';
		$dropshipping_store_custom_css .='#sidebar{';
			$dropshipping_store_custom_css .='display:block;';
		$dropshipping_store_custom_css .='} }';
	}else if($dropshipping_store_sidebar == false){
		$dropshipping_store_custom_css .='@media screen and (max-width:575px) {';
		$dropshipping_store_custom_css .='#sidebar{';
			$dropshipping_store_custom_css .='display:none;';
		$dropshipping_store_custom_css .='} }';
	}

	$dropshipping_store_scroll = get_theme_mod( 'dropshipping_store_display_scrolltop',true);
	if($dropshipping_store_scroll == true && get_theme_mod( 'dropshipping_store_hide_show_scroll',true) != true){
    	$dropshipping_store_custom_css .='#scrollbutton i{';
			$dropshipping_store_custom_css .='display:none;';
		$dropshipping_store_custom_css .='} ';
	}
    if($dropshipping_store_scroll == true){
    	$dropshipping_store_custom_css .='@media screen and (max-width:575px) {';
		$dropshipping_store_custom_css .='#scrollbutton i{';
			$dropshipping_store_custom_css .='display:block;';
		$dropshipping_store_custom_css .='} }';
	}else if($dropshipping_store_scroll == false){
		$dropshipping_store_custom_css .='@media screen and (max-width:575px){';
		$dropshipping_store_custom_css .='#scrollbutton i{';
			$dropshipping_store_custom_css .='display:none;';
		$dropshipping_store_custom_css .='} }';
	}

	$dropshipping_store_preloader = get_theme_mod( 'dropshipping_store_display_preloader',false);
	if($dropshipping_store_preloader == true && get_theme_mod( 'dropshipping_store_preloader',false) == false){
		$dropshipping_store_custom_css .='@media screen and (min-width:575px) {';
    	$dropshipping_store_custom_css .='.frame{';
			$dropshipping_store_custom_css .=' visibility: hidden;';
		$dropshipping_store_custom_css .='} }';
	}
    if($dropshipping_store_preloader == true){
    	$dropshipping_store_custom_css .='@media screen and (max-width:575px) {';
		$dropshipping_store_custom_css .='.frame{';
			$dropshipping_store_custom_css .='visibility:visible;';
		$dropshipping_store_custom_css .='} }';
	}else if($dropshipping_store_preloader == false){
		$dropshipping_store_custom_css .='@media screen and (max-width:575px){';
		$dropshipping_store_custom_css .='.frame{';
			$dropshipping_store_custom_css .='visibility: hidden;';
		$dropshipping_store_custom_css .='} }';
	}

	$dropshipping_store_search = get_theme_mod( 'dropshipping_store_display_search_category',true);
	if($dropshipping_store_search == true && get_theme_mod( 'dropshipping_store_search_enable_disable',true) != true){
    	$dropshipping_store_custom_css .='.search-cat-box{';
			$dropshipping_store_custom_css .='display:none;';
		$dropshipping_store_custom_css .='} ';
	}
    if($dropshipping_store_search == true){
    	$dropshipping_store_custom_css .='@media screen and (max-width:575px) {';
		$dropshipping_store_custom_css .='.search-cat-box{';
			$dropshipping_store_custom_css .='display:block;';
		$dropshipping_store_custom_css .='} }';
	}else if($dropshipping_store_search == false){
		$dropshipping_store_custom_css .='@media screen and (max-width:575px){';
		$dropshipping_store_custom_css .='.search-cat-box{';
			$dropshipping_store_custom_css .='display:none;';
		$dropshipping_store_custom_css .='} }';
	}

	$dropshipping_store_myaccount = get_theme_mod( 'dropshipping_store_display_myaccount',true);
	if($dropshipping_store_myaccount == true && get_theme_mod( 'dropshipping_store_myaccount_enable_disable',true) != true){
    	$dropshipping_store_custom_css .='.login-box{';
			$dropshipping_store_custom_css .='display:none;';
		$dropshipping_store_custom_css .='} ';
	}
    if($dropshipping_store_myaccount == true){
    	$dropshipping_store_custom_css .='@media screen and (max-width:575px) {';
		$dropshipping_store_custom_css .='.login-box{';
			$dropshipping_store_custom_css .='display:block;';
		$dropshipping_store_custom_css .='} }';
	}else if($dropshipping_store_myaccount == false){
		$dropshipping_store_custom_css .='@media screen and (max-width:575px){';
		$dropshipping_store_custom_css .='.login-box{';
			$dropshipping_store_custom_css .='display:none;';
		$dropshipping_store_custom_css .='} }';
	}

	// menu settings
	$dropshipping_store_menu_font_size_option = get_theme_mod('dropshipping_store_menu_font_size_option');
	$dropshipping_store_custom_css .='.primary-navigation a{';
		$dropshipping_store_custom_css .='font-size: '.esc_attr($dropshipping_store_menu_font_size_option).'px;';
	$dropshipping_store_custom_css .='}';

	$dropshipping_store_menu_padding = get_theme_mod('dropshipping_store_menu_padding');
	$dropshipping_store_custom_css .='.primary-navigation a{';
		$dropshipping_store_custom_css .='padding: '.esc_attr($dropshipping_store_menu_padding).'px;';
	$dropshipping_store_custom_css .='}';

	$dropshipping_store_theme_lay = get_theme_mod( 'dropshipping_store_text_tranform_menu','Uppercase');
    if($dropshipping_store_theme_lay == 'Uppercase'){
		$dropshipping_store_custom_css .='.primary-navigation a{';
			$dropshipping_store_custom_css .='';
		$dropshipping_store_custom_css .='}';
	}else if($dropshipping_store_theme_lay == 'Lowercase'){
		$dropshipping_store_custom_css .='.primary-navigation a{';
			$dropshipping_store_custom_css .='text-transform: lowercase;';
		$dropshipping_store_custom_css .='}';
	}
	else if($dropshipping_store_theme_lay == 'Capitalize'){
		$dropshipping_store_custom_css .='.primary-navigation a{';
			$dropshipping_store_custom_css .='text-transform: Capitalize;';
		$dropshipping_store_custom_css .='}';
	}

	$dropshipping_store_theme_lay = get_theme_mod( 'dropshipping_store_font_weight_option_menu','');
    if($dropshipping_store_theme_lay == 'Bold'){
		$dropshipping_store_custom_css .='.primary-navigation a{';
			$dropshipping_store_custom_css .='font-weight:bold;';
		$dropshipping_store_custom_css .='}';
	}else if($dropshipping_store_theme_lay == 'Normal'){
		$dropshipping_store_custom_css .='.primary-navigation a{';
			$dropshipping_store_custom_css .='font-weight: normal;';
		$dropshipping_store_custom_css .='}';
	}

	// slider height
	$dropshipping_store_option_slider_height = get_theme_mod('dropshipping_store_option_slider_height');
	$dropshipping_store_custom_css .='#slider .slider-bg img{';
		$dropshipping_store_custom_css .='height: '.esc_attr($dropshipping_store_option_slider_height).'px;';
	$dropshipping_store_custom_css .='}';

	// slider content spacing
	$dropshipping_store_slider_content_top_padding = get_theme_mod('dropshipping_store_slider_content_top_padding');
	$dropshipping_store_slider_content_left_padding = get_theme_mod('dropshipping_store_slider_content_left_padding');
	$dropshipping_store_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
		$dropshipping_store_custom_css .='top: '.esc_attr($dropshipping_store_slider_content_top_padding).'%; bottom: '.esc_attr($dropshipping_store_slider_content_top_padding).'%;left: '.esc_attr($dropshipping_store_slider_content_left_padding).'%;right: '.esc_attr($dropshipping_store_slider_content_left_padding).'%;';
	$dropshipping_store_custom_css .='}';

	// slider overlay
	$dropshipping_store_enable_slider_overlay = get_theme_mod('dropshipping_store_enable_slider_overlay', true);
	if($dropshipping_store_enable_slider_overlay == false){
		$dropshipping_store_custom_css .='#slider image{';
			$dropshipping_store_custom_css .='opacity:1;';
		$dropshipping_store_custom_css .='}';
	} 
	$dropshipping_store_slider_overlay_color = get_theme_mod('dropshipping_store_slider_overlay_color', true);
	if($dropshipping_store_enable_slider_overlay != false){
		$dropshipping_store_custom_css .='#slider{';
			$dropshipping_store_custom_css .='background: '.esc_attr($dropshipping_store_slider_overlay_color).';';
		$dropshipping_store_custom_css .='}';
	}

	//  comment form width
	$dropshipping_store_comment_form_width = get_theme_mod( 'dropshipping_store_comment_form_width');
	$dropshipping_store_custom_css .='#comments textarea{';
		$dropshipping_store_custom_css .='width: '.esc_attr($dropshipping_store_comment_form_width).'%;';
	$dropshipping_store_custom_css .='}';

	$dropshipping_store_title_comment_form = get_theme_mod('dropshipping_store_title_comment_form', 'Leave a Reply');
	if($dropshipping_store_title_comment_form == ''){
		$dropshipping_store_custom_css .='#comments h2#reply-title {';
			$dropshipping_store_custom_css .='display: none;';
		$dropshipping_store_custom_css .='}';
	}

	$dropshipping_store_comment_form_button_content = get_theme_mod('dropshipping_store_comment_form_button_content', 'Post Comment');
	if($dropshipping_store_comment_form_button_content == ''){
		$dropshipping_store_custom_css .='#comments p.form-submit {';
			$dropshipping_store_custom_css .='display: none;';
		$dropshipping_store_custom_css .='}';
	}

	// featured image setting
	$dropshipping_store_image_border_radius = get_theme_mod('dropshipping_store_image_border_radius', 0);
	$dropshipping_store_custom_css .='.box-image img, .content_box img{';
		$dropshipping_store_custom_css .='border-radius: '.esc_attr($dropshipping_store_image_border_radius).'%;';
	$dropshipping_store_custom_css .='}';

	$dropshipping_store_image_box_shadow = get_theme_mod('dropshipping_store_image_box_shadow',0);
	$dropshipping_store_custom_css .='.box-image img, .content_box img{';
		$dropshipping_store_custom_css .='box-shadow: '.esc_attr($dropshipping_store_image_box_shadow).'px '.esc_attr($dropshipping_store_image_box_shadow).'px '.esc_attr($dropshipping_store_image_box_shadow).'px #b5b5b5;';
	$dropshipping_store_custom_css .='}';

	// Post Block
	$dropshipping_store_post_block_option = get_theme_mod( 'dropshipping_store_post_block_option','By Block');
    if($dropshipping_store_post_block_option == 'By Without Block'){
		$dropshipping_store_custom_css .='.inner-service, #blog_sec .sticky{';
			$dropshipping_store_custom_css .='border:none; margin:30px 0;';
		$dropshipping_store_custom_css .='}';
	}

	// post image 
	$dropshipping_store_post_featured_color = get_theme_mod('dropshipping_store_post_featured_color', '#5c727d');
	$dropshipping_store_post_featured_image = get_theme_mod('dropshipping_store_post_featured_image','Image');
	if($dropshipping_store_post_featured_image == 'Color'){
		$dropshipping_store_custom_css .='.post-color{';
			$dropshipping_store_custom_css .='background-color: '.esc_attr($dropshipping_store_post_featured_color).';';
		$dropshipping_store_custom_css .='}';
	}

	// featured image dimention
	$dropshipping_store_post_featured_image_dimention = get_theme_mod('dropshipping_store_post_featured_image_dimention', 'Default');
	$dropshipping_store_post_featured_image_custom_width = get_theme_mod('dropshipping_store_post_featured_image_custom_width');
	$dropshipping_store_post_featured_image_custom_height = get_theme_mod('dropshipping_store_post_featured_image_custom_height');
	if($dropshipping_store_post_featured_image_dimention == 'Custom'){
		$dropshipping_store_custom_css .='.box-image img{';
			$dropshipping_store_custom_css .='width: '.esc_attr($dropshipping_store_post_featured_image_custom_width).'px; height: '.esc_attr($dropshipping_store_post_featured_image_custom_height).'px;';
		$dropshipping_store_custom_css .='}';
	}

	// featured image dimention
	$dropshipping_store_custom_post_color_width = get_theme_mod('dropshipping_store_custom_post_color_width');
	$dropshipping_store_custom_post_color_height = get_theme_mod('dropshipping_store_custom_post_color_height');
	if($dropshipping_store_post_featured_image == 'Color'){
		$dropshipping_store_custom_css .='.post-color{';
			$dropshipping_store_custom_css .='width: '.esc_attr($dropshipping_store_custom_post_color_width).'px; height: '.esc_attr($dropshipping_store_custom_post_color_height).'px;';
		$dropshipping_store_custom_css .='}';
	}

	// site title font size
	$dropshipping_store_site_title_font_size = get_theme_mod('dropshipping_store_site_title_font_size', 30);
	$dropshipping_store_custom_css .='.logo h1, .site-title a, .logo .site-title a{';
	$dropshipping_store_custom_css .='font-size: '.esc_attr($dropshipping_store_site_title_font_size).'px;';
	$dropshipping_store_custom_css .='}';

	// site tagline font size
	$dropshipping_store_site_tagline_font_size = get_theme_mod('dropshipping_store_site_tagline_font_size', 15);
	$dropshipping_store_custom_css .='p.site-description{';
	$dropshipping_store_custom_css .='font-size: '.esc_attr($dropshipping_store_site_tagline_font_size).'px;';
	$dropshipping_store_custom_css .='}';

	// woocommerce Product Navigation
	$dropshipping_store_wooproducts_nav = get_theme_mod('dropshipping_store_wooproducts_nav', 'Yes');
	if($dropshipping_store_wooproducts_nav == 'No'){
		$dropshipping_store_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$dropshipping_store_custom_css .='display: none;';
		$dropshipping_store_custom_css .='}';
	}