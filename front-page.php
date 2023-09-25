<?php get_header(); ?>

<div class="fv">
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="fv-img-box swiper-slide">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/fv1-sp.png" media="(max-width:768px)">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fv1.png" width="1044px" height="600px" alt="ギフトセンターサクマ" class="fv-img">
        </picture>
      </div>
      <div class="fv-img-box swiper-slide">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/fv2-sp.png" media="(max-width:768px)">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fv2.png" width="1044px" height="600px" alt="山梨コラボギフト" class="fv-img">
        </picture>
      </div>
      <div class="fv-img-box swiper-slide">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/fv3-sp.png" media="(max-width:768px)">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fv3.png" width="1044px" height="600px" alt="カタログギフト" class="fv-img">
        </picture>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>

<div class="top-pick">
  <div class="top-pick-inner">
    <h2 class="section-title fadeUpText">PICK UP</h2>
    <h3 class="section-sub-title fadeUpText">ギフトセンター サクマ オススメのギフト</h3>
    <div class="section-border-top animationBorder"></div>
    <div class="section-border-btm animationBorder"></div>
    <div class="top-pick-contents">
<?php
$args = array(
  'posts_per_page' => 3,
  'category_name'  => 'pickup',
  'orderby'        => 'date',
  'order'          => 'DESC',
);
$pickup_posts = new WP_Query($args);
if ($pickup_posts->have_posts()) : while ($pickup_posts->have_posts()) : $pickup_posts->the_post();
?>
<a href="<?php the_permalink(); ?>" class="top-pick-link">
  <div class="top-pick-item">
    <?php
    if (has_post_thumbnail()) :
      the_post_thumbnail('full'); 
    endif;
    ?>
    <div class="top-pick-item-text">
      <?php if (get_field('pickup-tag')) : ?>
      <div class="pickup-tag">
        <?php the_field('pickup-tag'); ?>
      </div>
      <?php endif; ?>
      <h2 class="pickup-title"><?php the_title(); ?></h2>
      <?php if (get_field('pickup-sub')) : ?>
      <div class="pickup-sub">
        <?php the_field('pickup-sub'); ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
</a>
<?php
endwhile; endif;
wp_reset_postdata(); 
?>
</div>


  </div>
</div>



<?php get_footer(); ?>
