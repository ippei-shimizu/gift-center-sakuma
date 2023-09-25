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


<?php get_footer(); ?>
