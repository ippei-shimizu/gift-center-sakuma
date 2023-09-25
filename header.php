<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico"> -->
  <title>ギフトセンターサクマ | 山梨県特産のギフトなら</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.2/swiper-bundle.css" integrity="sha512-15OzXDrYC/wTgcjNDIx6+2LiAHCPnS9DiKQj/dhgdRMpdW+W4AoSjxism+gRaDobBaFN+UONPGic1ttu5mpWxg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <div class="header-inner">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="ギフトセンターサクマ" width="220.098px" height="60px">
      </a>
      <nav class="header-nav">
        <ul class="header-nav-wrap">
          <il class="header-list">
            <a href="">ギフトの選び方・贈り方</a>
          </il>
          <il class="header-list">
            <a href="">オリジナルサービス</a>
          </il>
          <il class="header-list">
            <a href="">ABOUT</a>
          </il>
          </il>
          <il class="header-list">
            <a href="">TOPIX</a>
          </il>
        </ul>
      </nav>
      <div id="navBtn" class="nav-btn">
        <div class="nav-box"></div>
        <p class="nav-text">MENU</p>
      </div>
    </div>
  </header>
  <div id="navMenu" class="nav-menu">
        <!-- こちらにメニューのアイテムを追加します -->
        <p>Item 1</p>
        <p>Item 2</p>
        <p>Item 3</p>
        <!-- ... -->
  </div>
  <div id="overlay" class="overlay"></div>
