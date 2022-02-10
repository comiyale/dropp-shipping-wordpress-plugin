<?php
/**
 * The Header for our theme.
 * @package Dropshipping Store
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open(); 
  } else { 
    do_action( 'wp_body_open' ); 
  } ?>
  <?php if(get_theme_mod('dropshipping_store_preloader',false) != '' || get_theme_mod( 'dropshipping_store_display_preloader',false) != ''){ ?>
    <div class="frame w-100 h-100">
      <div class="loader">
        <div class="dot-1"></div>
        <div class="dot-2"></div>
        <div class="dot-3"></div>
      </div>
    </div>
  <?php }?>
  <header role="banner" class="header-box">
    <a class="screen-reader-text skip-link" href="#skip_content"><?php esc_html_e( 'Skip to content', 'dropshipping-store' ); ?></a>
    
    <div id="header">
      <div class="topbar text-md-start text-center">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-5 align-self-center">
              <?php if( get_theme_mod('dropshipping_store_topbar_text') != '' ) {?>
                <p class="topbar-text"><?php echo esc_html(get_theme_mod('dropshipping_store_topbar_text')); ?></p>
              <?php }?>
            </div>
            <div class="col-lg-2 col-md-2 align-self-center">
              <div class="translate-lang">
                <?php echo do_shortcode( '[gtranslate]' );?>
              </div>
            </div>
            <div class="col-lg-2 col-md-2 align-self-center">
              <?php if(class_exists('woocommerce')){ ?>
                <div class="currency-box">
                  <?php echo do_shortcode( '[woocommerce_currency_switcher_drop_down_box]' );?>
                </div>
              <?php } ?>
            </div>
            <div class="col-lg-2 col-md-3 align-self-center">
              <?php if(class_exists('woocommerce')){ ?>
                <div class="order-track position-relative">
                  <span><?php esc_html_e('Order Tracking','dropshipping-store'); ?></span>
                  <div class="order-track-hover text-left">
                    <?php echo do_shortcode('[woocommerce_order_tracking]','dropshipping-store'); ?>
                  </div>
                </div>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
      <div class="middle-header py-2">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-4 align-self-center">
              <div class="logo align-self-center text-md-start text-center">
                <div class="row">
                  <div class="<?php if( get_theme_mod( 'dropshipping_store_site_logo_inline') != '') { ?>col-lg-5 col-md-5 col-5<?php } else { ?>col-lg-12 col-md-12 <?php } ?>">
                    <?php if ( has_custom_logo() ) : ?>
                      <div class="site-logo"><?php the_custom_logo(); ?></div>
                    <?php endif; ?>
                  </div>
                  <div class="<?php if( get_theme_mod( 'dropshipping_store_site_logo_inline') != '') { ?>col-lg-7 col-md-7 col-7 site-logo-inline"<?php } else { ?>col-lg-12 col-md-12 <?php } ?>">
                    <?php $blog_info = get_bloginfo( 'name' ); ?>
                    <?php if ( ! empty( $blog_info ) ) : ?>
                      <?php if( get_theme_mod('dropshipping_store_site_title_enable',true) != ''){ ?>
                        <?php if ( is_front_page() && is_home() ) : ?>
                          <h1 class="site-title pb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <?php else : ?>
                          <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                        <?php endif; ?>
                      <?php }?>
                    <?php endif; ?>
                    <?php
                    $description = get_bloginfo( 'description', 'display' );
                    if ( $description || is_customize_preview() ) : ?>
                      <?php if( get_theme_mod('dropshipping_store_site_tagline_enable',true) != ''){ ?>
                        <p class="site-description"><?php echo esc_html($description); ?></p>
                      <?php }?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-8 align-self-center">
              <div class="search-cat d-md-flex d-block">
                <div class="product-headcat">
                  <?php if(class_exists('woocommerce')){ ?>
                    <button role="tab" class="product-btn py-2 px-3"><?php echo esc_html_e('All Categories','dropshipping-store'); ?><i class="fa fa-caret-down my-2 ps-2" aria-hidden="true"></i></button>
                    <div class="product-cat">
                      <?php
                        $args = array(
                         //'number'     => $number,
                         'orderby'    => 'title',
                         'order'      => 'ASC',
                         'hide_empty' => 0,
                         'parent'  => 0
                         //'include'    => $ids
                        );
                       $product_categories = get_terms( 'product_cat', $args );
                       $count = count($product_categories);
                        if ( $count > 0 ){
                          foreach ( $product_categories as $product_category) {
                          $cats_id   = $product_category->term_id;
                          $cat_link = get_category_link( $cats_id );
                          if ($product_category->category_parent == 0) { ?>
                          <li class="drp_dwn_menu py-2 mx-3"><a href="<?php echo esc_url(get_term_link( $product_category ) ); ?>">
                          <?php
                          }
                          echo esc_html( $product_category->name ); ?></a><i class="fas fa-chevron-right"></i></li>
                          <?php
                          }
                        }
                      ?>
                    </div>
                  <?php }?>
                </div>
                <?php if(class_exists('woocommerce')){ ?>
                  <div class="header-search">
                    <?php get_product_search_form(); ?>
                  </div>
                <?php }?>
              </div>
            </div>
            <div class="col-lg-2 col-md-8 px-md-0 align-self-center phone">
              <?php if (get_theme_mod('dropshipping_store_phone_text') != '' || get_theme_mod('dropshipping_store_phone_number') != '') { ?>
                <div class="row mx-md-0">
                  <div class="col-lg-3 col-md-2 col-3 pe-md-0 align-self-center text-center"><i class="fas fa-headphones"></i></div>
                  <div class="col-lg-9 col-md-10 col-9 align-self-center">
                    <p><?php echo esc_html(get_theme_mod('dropshipping_store_phone_text')); ?></p>
                    <a href="tel:<?php echo esc_attr(get_theme_mod('dropshipping_store_phone_number')); ?>"><?php echo esc_html(get_theme_mod('dropshipping_store_phone_number')); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('dropshipping_store_phone_number')); ?></span></a>
                  </div>
                </div>
              <?php }?>
            </div>
            <div class="col-lg-1 col-md-2 col-6 align-self-center text-center">
              <?php if (get_theme_mod('dropshipping_store_wishlist_link') != '') { ?>
                <a href="<?php echo esc_url( get_theme_mod('dropshipping_store_wishlist_link') ); ?>" class="wishlist-link"><i class="far fa-heart"></i><span class="screen-reader-text"><?php esc_html_e( 'Wishlist','dropshipping-store' );?></span></a>
              <?php }?>
            </div>
            <div class="col-lg-1 col-md-2 col-6 align-self-center text-center">
              <?php if(class_exists('woocommerce')){ ?>
                <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" class="myaccount-link"><i class="far fa-user"></i><span class="screen-reader-text"><?php esc_html_e( 'My Account','dropshipping-store' );?></span></a>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
      <div class="menu-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-10 col-md-9 col-3 align-self-center">
              <?php
              if(has_nav_menu('primary')){ ?>
                <div class="toggle-menu responsive-menu">
                  <button role="tab" onclick="dropshipping_store_menu_open()" class="mobiletoggle"><i class="<?php echo esc_attr(get_theme_mod('dropshipping_store_responsive_menu_open_icon','fas fa-bars')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','dropshipping-store'); ?></span>
                  </button>
                </div>
              <?php }?>
              <div id="navbar-header text-center" class="menu-brand primary-nav">
                <nav id="site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'dropshipping-store' ); ?>">
                  <?php
                    if(has_nav_menu('primary')){
                      wp_nav_menu( array( 
                        'theme_location' => 'primary',
                        'container_class' => 'main-menu-navigation clearfix' ,
                        'menu_class' => 'clearfix',
                        'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav m-0 ps-0 text-start">%3$s</ul>',
                        'fallback_cb' => 'wp_page_menu',
                      ) );
                    } 
                  ?>
                </nav>
                <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="dropshipping_store_menu_close()"><i class="<?php echo esc_attr(get_theme_mod('dropshipping_store_responsive_menu_close_icon','fas fa-times')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','dropshipping-store'); ?></span></a>
              </div>
            </div>
            <div class="col-lg-2 col-md-3 col-9 align-self-center">
              <?php if(class_exists('woocommerce')){ ?>
                <div class="cart_no">              
                  <a href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>">
                    <div class="row">
                      <div class="col-lg-2 col-md-3 col-3 ps-md-0"><i class="fas fa-shopping-cart"></i></div>
                      <div class="col-lg-10 col-md-9 col-9">
                        <span><?php echo esc_html('SHOPPING CART', 'dropshipping-store'); ?></span>
                        <span class="cart-total"><?php echo esc_html(get_woocommerce_currency_symbol()); ?> <?php echo esc_html(wp_kses_data( WC()->cart->get_cart_contents_total() ));?></span>
                      </div>
                    </div>
                  <span class="screen-reader-text"><?php esc_html_e( 'Cart item','dropshipping-store' );?></span></a>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>