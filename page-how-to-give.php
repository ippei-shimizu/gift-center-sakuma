<?php get_header(); ?>

<div class="how-fv">
  <div class="how-fv-inner">
    <p class="pan-list fadeUpText">ギフトの選び方・贈り方</p>
    <div class="how-fv-title">
      <h1 class="fadeUpText">「贈り物」は、<br>
  言葉を超えたコミュニケーション。</h1>
      <p class="how-fv-sub-title fadeUpText">
      "Gift" is communication beyond words.
      </p>
    </div>
    <div class="how-fv-item-wrap">
      <div class="how-fv-square how-fv-square-01"></div>
      <div class="how-fv-square how-fv-square-02"></div>
      <div class="how-fv-item how-fv-item-top">
        <h2 class="fadeUpText-how">贈り物とは</h2>
        <div class="how-fv-border animationBorderHow"></div>
        <p class="how-fv-text fadeUpText-how">贈答には「贈る」と「お返し」という意味があり、ひとつの流れとして考えられています。相手を想うギフトを贈り合うだけで、そこにはすてきなコミュニケーションが生まれます。</p>
      </div>
      <div class="how-fv-item how-fv-item-btm">
        <h2 class="fadeUpText-how">人生の節目に贈りたい</h2>
        <div class="how-fv-border animationBorderHow"></div>
        <p class="how-fv-text fadeUpText-how">人生の節目のタイミングで、自分以外の誰かからの心遣いは、とても嬉しく心に残るはずです。心に残る節目をお互いにお祝いし合う関係は、これからも人生における大切な財産になります。</p>
      </div>
    </div>
    <div class="how-fv-bg">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/give-fv-sp.png" media="(max-width:768px)">
        <img class="fadeInImgFv" src="<?php echo get_template_directory_uri(); ?>/assets/images/give-fv.png" width="1454px" height="969px" alt="ギフトの選び方・贈り方">
      </picture>
    </div>
  </div>
</div>

<div class="how-ct">
  <div class="how-ct-inner">
    <div class="how-ct-grid">
      <!-- nav -->
      <div class="how-ct-nav">
        <p class="how-ct-title fadeUpText">CATEGORY</p>
        <ul class="how-ct-nav-box">
        <?php
$categories = [
    "#wedding" => "結婚",
    "#delivery" => "出産",
    "#sympathy" => "快気・お見舞い",
    "#employment" => "入進学・就職・長寿",
    "#moving" => "新築・引越し",
    "#buddhist" => "仏事・法要",
    "#gift" => "御中元・御歳暮",
    "#event" => "イベント景品",
    "#catalog" => "カタログギフト"
];

foreach ($categories as $link => $category) :
?>
<li class="how-nav-border animationBorder"></li>
<li class="how-ct-list">
    <a class="page-in-link" href="<?php echo $link; ?>"><?php echo $category; ?>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hover-arrow.svg" width="50px" height="6px" alt="矢印">
    </a>
</li>
<?php endforeach; ?>
<li class="how-nav-border animationBorder"></li>
        </ul>
        <div class="how-q-a">
          <a href="<?php echo esc_url(home_url('/category/faq')); ?>">Q & A</a>
          <span>※よくある質問はこちら</span>
        </div>
        <div class="how-tel">
          <span>お問合せ</span>
          <a href="tel:055-275-5178">055-275-5178</a>
        </div>
      </div>
      <!-- contents -->
      <?php get_template_part('templates/how-contents'); ?>
    </div>
  </div>
</div>
</div>

<?php get_footer(); ?>