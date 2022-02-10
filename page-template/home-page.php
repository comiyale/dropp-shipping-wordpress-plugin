<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); ?>

<main role="main" id="skip_content">

  <?php do_action( 'dropshipping_store_above_slider' ); ?>

  <?php if( get_theme_mod('dropshipping_store_slider_hide', false) != '' || get_theme_mod( 'dropshipping_store_display_slider',false) != ''){ ?>
    <section id="slider" class="m-auto p-0 mw-100">
      <?php $dropshipping_store_slider_speed = get_theme_mod('dropshipping_store_slider_speed', 3000); ?>
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-interval="<?php echo esc_attr($dropshipping_store_slider_speed); ?>"> 
        <?php $dropshipping_store_slider_page = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'dropshipping_store_slider_setting' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $dropshipping_store_slider_page[] = $mod;
            }
          }
          if( !empty($dropshipping_store_slider_page) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $dropshipping_store_slider_page,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <div class="slider-bg">
                <?php the_post_thumbnail(); ?>
              </div>
              <div class="carousel-caption">
                <div class="inner_carousel">
                  <div class="carousel-content">
                    <?php if( get_theme_mod('dropshipping_store_slider_heading',true) != ''){ ?>
                      <h1 class="mb-0"><?php the_title(); ?></h1>
                    <?php } ?>
                    <?php if( get_theme_mod('dropshipping_store_slider_text',true) != ''){ ?>
                      <p><?php $excerpt = get_the_excerpt(); echo esc_html( dropshipping_store_string_limit_words( $excerpt, esc_attr(get_theme_mod('dropshipping_store_slider_excerpt_number','15')))); ?></p>
                    <?php } ?>
                    <div class="more-btn mt-0 mt-md-3">
                      <a href="<?php the_permalink(); ?>"><?php esc_html_e('SHOP NOW','dropshipping-store'); ?><span class="screen-reader-text"><?php esc_html_e('SHOP NOW','dropshipping-store'); ?></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
        endif;?>
        <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-long-arrow-alt-left"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Previous','dropshipping-store' );?></span>
        </a>
        <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
          <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-long-arrow-alt-right"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Next','dropshipping-store' );?></span>
        </a>
      </div>  
      <div class="clearfix"></div>
    </section>
  <?php }?>
  
  <?php do_action( 'dropshipping_store_below_slider' ); ?>

  <?php if( get_theme_mod( 'dropshipping_store_product_enable') != '') { ?>
    <section id="product-slide" class="py-5">
      <div class="container">
        <div class="product-head text-center mb-5">
          <?php if(get_theme_mod('dropshipping_store_product_section_title') != '') {?>
            <h2><?php echo esc_html(get_theme_mod('dropshipping_store_product_section_title')); ?></h2>
          <?php }?>
        </div>
        <div class="owl-carousel">
          <?php if ( class_exists( 'WooCommerce' ) && get_theme_mod('dropshipping_store_product_slide') != '' ) {
            $args = array( 
              'post_type' => 'product',
              'posts_per_page' => 3,
              'product_cat' => get_theme_mod('dropshipping_store_product_slide'),
              'order' => 'ASC'
            );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
              <div class="product-box">
                <div class="product-image">
                  <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(woocommerce_placeholder_img_src()).'" />'; ?>
                </div>
                <h3><a href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>"><?php the_title(); ?></a></h3>
                <p class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>"><?php echo $product->get_price_html(); ?></p>
                <div class="cart-button my-2">
                  <?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_add_to_cart( $loop->post, $product ); } ?>
                </div>
              </div>
            <?php endwhile; wp_reset_query(); ?>
          <?php } ?>
        </div>
      </div>
    </section>
  <?php } ?> 

  <div class="container front-page-content">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="new-text"><?php the_content(); ?></div>
    <?php endwhile; // end of the loop. ?>
  </div>
</main>

<?php get_footer(); ?>