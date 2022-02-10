<?php $related_posts = dropshipping_store_related_posts();
if(get_theme_mod('dropshipping_store_related_enable_disable',true)==1){ ?>
<?php if ( $related_posts->have_posts() ): ?>
    <div class="related-posts">
        <h3 class="mb-3"><?php echo esc_html(get_theme_mod('dropshipping_store_related_title',__('Related Post','dropshipping-store')));?></h3>
        <div class="row">
            <?php while ( $related_posts->have_posts() ) : $related_posts->the_post(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="related-inner-box mb-3 p-3">
                        <?php if(has_post_thumbnail()) { ?>
                            <div class="box-image mb-3">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php }?>
                        <h4 class="mb-3"><?php the_title(); ?></h4>
                        <?php $excerpt = get_the_excerpt(); echo esc_html( dropshipping_store_string_limit_words( $excerpt, esc_attr(get_theme_mod('dropshipping_store_related_post_excerpt_number','15')))); ?> <?php echo esc_html( get_theme_mod('dropshipping_store_post_discription_suffix','[...]') ); ?>
                        <?php if( get_theme_mod('dropshipping_store_button_text','View More') != ''){ ?>
                            <div class="postbtn my-4 text-start">
                                <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('dropshipping_store_button_text','View More'));?><i class="<?php echo esc_attr(get_theme_mod('dropshipping_store_button_icon','fas fa-long-arrow-alt-right')); ?>"></i><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('dropshipping_store_button_text','View More'));?></span></a>
                            </div>
                        <?php }?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>
<?php wp_reset_postdata(); }?>