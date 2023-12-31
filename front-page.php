<?php get_header(); ?>
<!-- fadeUpText -->
<!-- animationBorder -->
<!-- fadeInImg -->
<div class="fv">
  <div class="fv-inner">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="fv-img-box swiper-slide">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/fv1-sp.jpg" media="(max-width:768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fv1.jpg" width="1044px" height="600px" alt="ギフトセンターサクマ" class="fv-img">
          </picture>
        </div>
        <div class="fv-img-box swiper-slide">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/fv2-2-sp.png" media="(max-width:768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fv2-2.png" width="1044px" height="600px" alt="山梨コラボギフト" class="fv-img">
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
</div>

<!-- pick up -->
<div class="top-pick">
  <div class="top-pick-inner">
    <h2 class="section-title fadeUpText">PICK UP</h2>
    <h3 class="section-sub-title fadeUpText">ギフトセンター サクマ オススメのギフト</h3>
    <div class="section-border-top animationBorder"></div>
    <div class="section-border-btm animationBorder-02"></div>
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
    <div class="fadeInImg">
    <?php
    if (has_post_thumbnail()) :
      the_post_thumbnail('full'); 
    endif;
    ?>
    </div>
    <div class="top-pick-item-text fadeUpText">
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
<div class="sp-pickup">
  <div class="sp-pickup-title">
    <h2 class="fadeUpText">PICK UP</h2>
    <h3 class="fadeUpText">ギフトセンター サクマ<br>オススメのギフト</h3>
    <div class="sp-pickup-border"></div>
  </div>
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
  the_post_thumbnail('full', array('class' => 'fadeInImg'));
endif;
?>

    <div class="top-pick-item-text">
      <?php if (get_field('pickup-tag')) : ?>
      <div class="pickup-tag fadeUpText">
        <?php the_field('pickup-tag'); ?>
      </div>
      <?php endif; ?>
      <h2 class="pickup-title fadeUpText"><?php the_title(); ?></h2>
      <?php if (get_field('pickup-sub')) : ?>
      <div class="pickup-sub fadeUpText">
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

<!-- catalog gift -->
<div class="top-catalog">
  <div class="top-catalog-inner">
    <h2 class="section-title fadeUpText">CATALOG GIFT</h2>
    <h3 class="section-sub-title fadeUpText">ギフトセンター サクマ が取り扱っている<br class="pc-br">カタログギフト</h3>
    <div class="top-catalog-contents">
      <div class="top-catalog-item">
        <a href="https://giftsakuma.com/shaddy/">
          <img class="fadeInImg" src="<?php echo get_template_directory_uri(); ?>/assets/images/catalog-01.png" width="250px" height="389px" alt="shaddy" loading="lazy">
        </a>
      </div>
      <div class="top-catalog-border"></div>
      <div class="top-catalog-item">
        <a href="https://giftsakuma.com/harmonick/">
          <img class="fadeInImg" src="<?php echo get_template_directory_uri(); ?>/assets/images/catalog-02-2.png" width="250px" height="389px" alt="HARMONICK" loading="lazy">
        </a>
      </div>
      <div class="top-catalog-border"></div>
      <div class="top-catalog-item">
        <a href="https://giftsakuma.com/ring-bell/">
          <img class="fadeInImg" src="<?php echo get_template_directory_uri(); ?>/assets/images/catalog-03.png" width="250px" height="389px" alt="RINGBELL" loading="lazy">
        </a>
      </div>
    </div>
<div class="sp-top-catalog-slider">
<div class="swiper-wrapper">
<!-- Start Slide Items -->
<div class="swiper-slide top-catalog-item">
  <a href="https://giftsakuma.com/shaddy/">
    <img class="fadeInImg" src="<?php echo get_template_directory_uri(); ?>/assets/images/catalog-01.png" width="250px" height="389px" alt="shaddy" loading="lazy">
  </a>
</div>
<div class="swiper-slide top-catalog-item">
  <a href="https://giftsakuma.com/harmonick/">
    <img class="fadeInImg" src="<?php echo get_template_directory_uri(); ?>/assets/images/catalog-02-2.png" width="250px" height="389px" alt="HARMONICK" loading="lazy">
  </a>
</div>
<div class="swiper-slide top-catalog-item">
  <a href="https://giftsakuma.com/ring-bell/">
    <img class="fadeInImg" src="<?php echo get_template_directory_uri(); ?>/assets/images/catalog-03.png" width="250px" height="389px" alt="RINGBELL" loading="lazy">
  </a>
</div>
<!-- End Slide Items -->
</div>
<!-- Add Arrows -->
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>
</div>

<div class="cl-text-box fadeUpText ">
  <p>カタログは数多くの種類を取り扱っております。<br>
詳細はお問い合わせください。</p>
<a href="tel:055-275-5178" class="fadeUpText ">055-275-5178</a>
</div>
  </div>
</div>
<div class="sp-cl-text-box cl-text-box fadeUpText ">
  <p>カタログは数多くの種類を取り扱っております。<br>
詳細はお問い合わせください。</p>
<a href="tel:055-275-5178" class="fadeUpText ">055-275-5178</a>
</div>

<!-- category -->
<div class="top-category">
  <div class="top-category-inner">
  <h2 class="section-title fadeUpText">CATEGORY</h2>
  <div class="top-category-contents">
    <div class="swiper-wrapper">
    <?php
$categories = [
    "結婚", "出産", "快気お見舞い", "入学・就職・長寿", "新築・引越し", "仏事・法要", "お中元・お歳暮", "イベント景品", "カタログ"
];
$categories_link = [
    "#wedding", "#delivery", "#sympathy", "#employment", "#moving", "#buddhist", "#gift", "#event", "#catalog"
];

foreach ($categories as $index => $category) :
?>
    <div class="swiper-slide">
        <a href="<?php echo esc_url(home_url('/how-to-give' . $categories_link[$index])); ?>">
            <img class="fadeInImg" src="<?php echo get_template_directory_uri(); ?>/assets/images/cat-0<?php echo $index + 1; ?>.png" width="307px" height="130px" alt="<?php echo $category; ?>" loading="lazy">
        </a>
    </div>
<?php endforeach; ?>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    </div>
    <div class="top-category-link fadeUpText">
      <a href="<?php echo esc_url(home_url('/how-to-give')); ?>">VIEW ALL CATEGORY</a>
    </div>
  </div>
</div>

<!-- what new -->
<div class="top-what">
  <div class="top-what-inner">
    <div class="what-border what-border-top animationBorder"></div>
    <div class="top-what-contents">
      <div class="top-what-title-box">
        <h2 class="fadeUpText">WHAT'S NEW</h2>
        <h3 class="fadeUpText">おしらせ</h3>
        <a class="fadeUpText" href="<?php echo esc_url(home_url('/category/information')); ?>">VIEW MORE</a>
      </div>
      <div class="top-what-list">
<?php
$info_args = array(
  'posts_per_page' => 3,
  'category_name'  => 'information',
  'orderby'        => 'date',
  'order'          => 'DESC',
);
$info_posts = new WP_Query($info_args);
if ($info_posts->have_posts()) : while ($info_posts->have_posts()) : $info_posts->the_post();
?>
<div class="top-what-item">
<a href="<?php the_permalink(); ?>">
  <p class="top-what-date fadeUpText"><?php echo get_the_date('Y.m.j'); ?></p>
  <p class="top-what-title fadeUpText"><?php the_title(); ?></p>
  <span>▶︎</span>
</a>
</div>
<?php
endwhile; endif;
wp_reset_postdata(); 
?>
</div>
    </div>
    <div class="what-border what-border-btm animationBorder"></div>
  </div>
</div>

<!-- contact -->
<div class="top-contact">
  <div class="top-contact-inner">
    <div class="top-contact-box">
      <h2 class="fadeUpText">お問い合わせ</h2>
      <p class="top-contact-text fadeUpText">
      ギフトについてのご相談も<br class="pc-br">お気軽にお問い合せください。<br>来店のご予約も承ります。
      </p>
      <p class="top-contact-tel fadeUpText">
        <a href="tel:055-275-5178">055-275-5178</a>
      </p>
      <p class="top-contact-text fadeUpText">
      現在お電話のみでお問い合せを受け付けております。
      </p>
    </div>
  </div>
</div>

<div class="top-sns">
  <div class="top-sns-inner">
    <div class="top-sns-facebook">
    <?php echo do_shortcode('[custom-facebook-feed feed=2]'); ?>
    </div>
    <div class="top-sns-instagram">
      <?php echo do_shortcode('[instagram-feed feed=2]'); ?>
    </div>
  </div>
</div>



<?php get_footer(); ?>
