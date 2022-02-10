<?php
/**
 * The template part for displaying grid layout
 * @package Dropshipping Store
 * @subpackage dropshipping_store
 * @since 1.0
 */
?>

<div class="col-lg-4 col-md-4">
  <article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>   
    <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>   
    <div class="box-image">
      <?php if( get_theme_mod( 'dropshipping_store_post_featured_image',true) != '') { ?>
        <div class="box-image">
          <?php the_post_thumbnail(); ?>
        </div>
      <?php }?>
    </div>
    <div class="new-text">
    <?php $excerpt = get_the_excerpt(); echo esc_html( dropshipping_store_string_limit_words( $excerpt, esc_attr(get_theme_mod('dropshipping_store_post_excerpt_number','30')))); ?>  <?php echo esc_html( get_theme_mod('dropshipping_store_post_discription_suffix','[...]') ); ?>
    </div> 
    <?php if( get_theme_mod('dropshipping_store_button_text','View More') != ''){ ?>
      <div class="postbtn my-4 text-start">
        <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('dropshipping_store_button_text','View More'));?><i class="<?php echo esc_attr(get_theme_mod('dropshipping_store_button_icon','fas fa-long-arrow-alt-right')); ?>"></i><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('dropshipping_store_button_text','View More'));?></span></a>
      </div>
    <?php }?>
  </article>
</div>