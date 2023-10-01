<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico">
  <title>ギフトセンターサクマ | 山梨県特産のギフトなら</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.2/swiper-bundle.css" integrity="sha512-15OzXDrYC/wTgcjNDIx6+2LiAHCPnS9DiKQj/dhgdRMpdW+W4AoSjxism+gRaDobBaFN+UONPGic1ttu5mpWxg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;200;300;400;500;600;700;800;900&family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.2/swiper-bundle.css" integrity="sha512-15OzXDrYC/wTgcjNDIx6+2LiAHCPnS9DiKQj/dhgdRMpdW+W4AoSjxism+gRaDobBaFN+UONPGic1ttu5mpWxg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <div class="header-inner">
      <a href="tel:055-275-5178" class="header-tel"></a>
      <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="ギフトセンターサクマ" width="220.098px" height="60px">
      </a>
      <nav class="header-nav">
        <ul class="header-nav-wrap">
          <il class="header-list">
            <a href="<?php echo esc_url(home_url('/how-to-give')); ?>">ギフトの選び方・贈り方</a>
          </il>
          <il class="header-list">
            <a href="<?php echo esc_url(home_url('/service')); ?>">オリジナルサービス</a>
          </il>
          <il class="header-list">
            <a href="<?php echo esc_url(home_url('/about')); ?>">ABOUT</a>
          </il>
          </il>
          <il class="header-list">
            <a href="<?php echo esc_url(home_url('/topix')); ?>">TOPIX</a>
          </il>
        </ul>
      </nav>
    </div>
  </header>
  <div id="navBtn" class="nav-btn">
        <div class="nav-box"></div>
        <p class="nav-text">MENU</p>
      </div>
  <div id="navMenu" class="nav-menu">
    <div class="nav-menu-inner">
      <div class="nav-logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="ギフトセンターサクマ" width="136px" height="37px" loading="lazy">
        </a>
      </div>
      <div class="nav-contents">
        <div class="nav-contents-title">
          <p>MENU</p>
        </div>
        <div class="nav-border"></div>
        <div class="nav-contents-box">
          <p class="nav-list-title nav-list-title-acoodion">ギフトの選び方・贈り方</p>
          <div class="nav-list-item-wrap">
            <p class="nav-list-link-sp nav-list-link">
              <a class="hamburger-nav-link" href="<?php echo esc_url(home_url('/how-to-give')); ?>">ギフトの選び方・贈り方</a>
            </p>
            <p class="nav-list-link">
              <a class="hamburger-nav-link" href="<?php echo esc_url(home_url('/how-to-give/#wedding')); ?>">結婚</a>
            </p>
            <p class="nav-list-link">
              <a class="hamburger-nav-link" href="<?php echo esc_url(home_url('/how-to-give/#delivery')); ?>">出産</a>
            </p>
            <p class="nav-list-link">
              <a class="hamburger-nav-link" href="<?php echo esc_url(home_url('/how-to-give/#sympathy')); ?>">快気・お見舞い</a>
            </p>
            <p class="nav-list-link">
              <a class="hamburger-nav-link" href="<?php echo esc_url(home_url('/how-to-give/#employment')); ?>">入進学・就職・長寿</a>
            </p>
            <p class="nav-list-link">
              <a class="hamburger-nav-link" href="<?php echo esc_url(home_url('/how-to-give/#moving')); ?>">新築・引越し</a>
            </p>
            <p class="nav-list-link">
              <a class="hamburger-nav-link" href="<?php echo esc_url(home_url('/how-to-give/#buddhist')); ?>">仏事・法要</a>
            </p>
            <p class="nav-list-link">
              <a class="hamburger-nav-link" href="<?php echo esc_url(home_url('/how-to-give/#gift')); ?>">御中元・御歳暮</a>
            </p>
            <p class="nav-list-link">
              <a class="hamburger-nav-link" href="<?php echo esc_url(home_url('/how-to-give/#event')); ?>">イベント景品</a>
            </p>
            <p class="nav-list-link">
              <a class="hamburger-nav-link" href="<?php echo esc_url(home_url('/how-to-give/#catalog')); ?>">カタログギフト</a>
            </p>
          </div>
        </div>
        <div class="nav-border"></div>
        <div class="nav-contents-box">
          <p class="nav-list-title nav-list-title-acoodion">オリジナルサービス</p>
          <div class="nav-list-item-wrap">
            <p class="nav-list-link-sp nav-list-link">
              <a class="hamburger-nav-link" href="<?php echo esc_url(home_url('/service')); ?>">オリジナルサービス</a>
            </p>
            <p class="nav-list-link">
              <a class="hamburger-nav-link" href="<?php echo esc_url(home_url('/service/#ceremony')); ?>">仏事</a>
            </p>
            <p class="nav-list-link">
              <a class="hamburger-nav-link" href="<?php echo esc_url(home_url('/service/#summer')); ?>">御中元・御歳暮</a>
            </p>
            <p class="nav-list-link">
              <a class="hamburger-nav-link" href="<?php echo esc_url(home_url('/service/#original-set')); ?>">オリジナルセット</a>
            </p>
            <p class="nav-list-link">
              <a class="hamburger-nav-link" href="<?php echo esc_url(home_url('/service/#delivery')); ?>">配送</a>
            </p>
          </div>
            <p class="nav-list-title-about nav-list-title nav-list-title-about"><a class="hamburger-nav-link" href="<?php echo esc_url(home_url('/about')); ?>">ABOUT</a></p>
            <p class="nav-list-title nav-list-title-acoodion">TOPIX</p>
          <div class="nav-list-item-wrap">
            <p class="nav-list-link">
              <a class="hamburger-nav-link" href="<?php echo esc_url(home_url('/category/information')); ?>">おしらせ</a>
            </p>
            <p class="nav-list-link">
              <a class="hamburger-nav-link" href="<?php echo esc_url(home_url('/category/faq')); ?>">Q&A</a>
            </p>
            <p class="nav-list-link">
              <a class="hamburger-nav-link" href="<?php echo esc_url(home_url('/category/pickup')); ?>">PICK UP</a>
            </p>
          </div>
        </div>
      </div>
      <div class="nav-tel-box">
        <p>お問合わせ</p>
        <a href="tel:055-275-5178" class="nav-tel">055-275-5178</a>
      </div>
      <div class="nav-sns">
        <a href="https://www.instagram.com/giftcenter_sakuma/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg" alt="instagram" width="59px" height="60px" loading="lazy"></a>
        <a href="https://www.facebook.com/gcsakuma" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" alt="facebook" width="59px" height="60px" loading="lazy"></a>
      </div>
    </div>
  </div>
  <div id="overlay" class="overlay"></div>
