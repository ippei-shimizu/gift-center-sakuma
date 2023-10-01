<?php get_header(); ?>

<div class="service-fv how-fv">
  <div class="how-fv-inner">
    <p class="pan-list fadeUpText">オリジナルサービス</p>
    <div class="how-fv-title">
      <h1 class="fadeUpText">サクマ<br>
オリジナルサービス</h1>
      <p class="how-fv-sub-title fadeUpText">
      Sakuma original service
      </p>
    </div>
    <div class="how-fv-bg">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service-fv-sp.png" media="(max-width:768px)">
        <img class="fadeInImgFv" src="<?php echo get_template_directory_uri(); ?>/assets/images/service-fv.png" width="1454px" height="969px" alt="花束">
      </picture>
    </div>
  </div>
</div>

<div class="service-ct how-ct">
  <div class="how-ct-inner">
    <div class="how-ct-grid">
      <!-- nav -->
      <div class="how-ct-nav">
        <p class="how-ct-title fadeUpText"> ORIGINAL CATEGORY</p>
        <ul class="how-ct-nav-service how-ct-nav-box">
        <?php
$categories = [
    "#ceremony" => "仏 事",
    "#summer" => "御中元・御歳暮",
    "#original-set" => "オリジナルセット",
    "#delivery" => "配 送",
];

foreach ($categories as $link => $category) :
?>
<li class="how-nav-border animationBorder"></li>
<li class="how-ct-list">
    <a href="<?php echo $link; ?>"><?php echo $category; ?>
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
      <div class="how-contents">
        <div class="how-contents-inner">
          <!-- ceremony -->
          <div id="ceremony" class="how-item">
            <div class="how-item-top">
              <div class="how-item-title">
                <h2 class="how-item-main-title fourFadeUp">仏 事</h2>
                <p class="how-item-sub-title fourFadeUp">ceremony</p>
                <div class="how-item-title-bg secondFadeUp"></div>
              </div>
              <div class="how-item-top-border"><div class="how-item-top-border-02 thirdFadeUp"></div></div>
            </div>
            <div class="how-item-content">
              <h3 class="how-item-content-title fadeUpText">御法要ご予約の方に</h3>
              <div class="how-item-content-border animationBorder"></div>
              <div class="how-item-content-border-short animationBorder"></div>
              <p class="how-item-content-text fadeUpText">
              法要案内ハガキの印刷無料
              </p>
              <div class="service-pdf-box">
                <p class="pdf-text fadeUpText">
法要案内状見本<br>
※クリックするとPDFが開きます
                </p>
                <div class="pdf-border-y fadeInImg"></div>
                <a href="https://giftsakuma.com/wp-content/uploads/2023/09/pdf1.pdf" class="pdf-link" target="_blank">
                  <img class="fadeInImg" src="<?php echo get_template_directory_uri(); ?>/assets/images/pdf1.png" width="186px" height="258px" alt="法要案内状見本" loading="lazy">
                </a>
              </div>
            </div>
            <div class="how-item-content">
              <h3 class="how-item-content-title fadeUpText">お品の数だけ</h3>
              <div class="how-item-content-border animationBorder"></div>
              <div class="how-item-content-border-short animationBorder"></div>
              <p class="how-item-content-text fadeUpText">
              挨拶状無料<br>
（神式、キリスト教などもご相談ください
              </p>
              <div class="service-pdf-box-02 service-pdf-box">
                <p class="pdf-text fadeUpText">
                奉書挨拶状見本（一例）<br>
※クリックするとPDFが開きます
                </p>
                <div class="pdf-border-y fadeInImg"></div>
                <a href="https://giftsakuma.com/wp-content/uploads/2023/09/pdf2.pdf" class="pdf-link" target="_blank">
                  <img class="fadeInImg" src="<?php echo get_template_directory_uri(); ?>/assets/images/pdf2.png" width="300px" height="142px" alt="奉書挨拶状見本（一例）" loading="lazy">
                </a>
              </div>
            </div>
            <div class="how-item-content">
              <h3 class="how-item-content-title fadeUpText">生前お見舞いを頂いたり、御供花などを頂いた方へ</h3>
              <div class="how-item-content-border animationBorder"></div>
              <div class="how-item-content-border-short animationBorder"></div>
              <p class="how-item-content-text fadeUpText">
              各種御礼のカード無料
              </p>
              <div class="service-pdf-box-03">
                <a href="https://giftsakuma.com/wp-content/uploads/2023/09/pdf3.pdf" class="pdf-link" target="_blank">
                  <img class="fadeInImg" src="<?php echo get_template_directory_uri(); ?>/assets/images/pdf3.png" width="300px" height="142px" alt="各種御礼のカード無料" loading="lazy">
                </a>
                <a href="https://giftsakuma.com/wp-content/uploads/2023/09/pdf4.pdf" class="pdf-link" target="_blank">
                  <img class="fadeInImg" src="<?php echo get_template_directory_uri(); ?>/assets/images/pdf4.png" width="300px" height="142px" alt="各種御礼のカード無料" loading="lazy">
                </a>
                <a href="https://giftsakuma.com/wp-content/uploads/2023/09/pdf5.pdf" class="pdf-link" target="_blank">
                  <img class="fadeInImg" src="<?php echo get_template_directory_uri(); ?>/assets/images/pdf5.png" width="300px" height="142px" alt="各種御礼のカード無料" loading="lazy">
                </a>
                <a href="https://giftsakuma.com/wp-content/uploads/2023/09/pdf6.pdf" class="pdf-link" target="_blank">
                  <img class="fadeInImg" src="<?php echo get_template_directory_uri(); ?>/assets/images/pdf6.png" width="300px" height="142px" alt="各種御礼のカード無料" loading="lazy">
                </a>
              </div>
              <p class="service-pdf-text fadeUpText">クリックするとPDFが開きます</p>
            </div>
            <div class="how-item-content">
              <h3 class="how-item-content-title fadeUpText">法要引き物・御供物</h3>
              <div class="how-item-content-border animationBorder"></div>
              <div class="how-item-content-border-short animationBorder"></div>
              <p class="how-item-content-text fadeUpText">
              生花 果物 饅頭 など承ります
              </p>
              <div class="service-contact-text fadeInImg">
                <p>各種、お電話いただければ ご都合に合わせて伺います</p>
              </div>
            </div>
          </div><!-- ceremony end -->
          <!-- summer -->
          <div id="summer" class="how-item">
            <div class="how-item-top">
              <div class="how-item-title">
                <h2 class="how-item-main-title fourFadeUp">お中元・お歳暮</h2>
                <p class="how-item-sub-title fourFadeUp">summer-yearend</p>
                <div class="how-item-title-bg secondFadeUp"></div>
              </div>
              <div class="how-item-top-border"><div class="how-item-top-border-02 thirdFadeUp"></div></div>
            </div>
            <div class="how-item-content">
              <h3 class="how-item-content-title fadeUpText">早期承り特別価格実施中</h3>
              <div class="how-item-content-border animationBorder"></div>
              <div class="how-item-content-border-short animationBorder"></div>
              <p class="how-item-content-text fadeUpText">
              ◎早期（弊社が定める日迄）に、ご予約・お買い求めで早期特別価格にて対応。<br>
◎価格等はそれぞれの時期にチラシ等でご確認ください。<br>
◎一部対象外商品がございます。<br>
尚、ご不明な点はお電話にてお問い合わせくださいますようお願い申し上げます。
              </p>
            </div>
            </div>
          </div><!-- summer  end -->
          <!-- original-set -->
          <div id="original-set" class="how-item">
            <div class="how-item-top">
              <div class="how-item-title">
                <h2 class="how-item-main-title fourFadeUp">オリジナルセット</h2>
                <p class="how-item-sub-title fourFadeUp">original set</p>
                <div class="how-item-title-bg secondFadeUp"></div>
              </div>
              <div class="how-item-top-border"><div class="how-item-top-border-02 thirdFadeUp"></div></div>
            </div>
            <div class="how-item-content">
              <h3 class="how-item-content-title fadeUpText">カタログにもう一品加えたオリジナルセット</h3>
              <div class="how-item-content-border animationBorder"></div>
              <div class="how-item-content-border-short animationBorder"></div>
              <p class="how-item-content-text fadeUpText">
              お好きなカタログに、人気のタオルやお菓子を詰めわせたオリジナルセット。<br>
カタログの種類や、加えたい一品などご相談を承ります。<br>
お電話にてお問い合わせください。<br>
              </p>
            </div>
            </div>
            <!-- delivery -->
            <div id="delivery" class="how-item">
              <div class="how-item-top">
                <div class="how-item-title">
                  <h2 class="how-item-main-title fourFadeUp">配 送</h2>
                  <p class="how-item-sub-title fourFadeUp">delivery</p>
                  <div class="how-item-title-bg secondFadeUp"></div>
                </div>
                <div class="how-item-top-border"><div class="how-item-top-border-02 thirdFadeUp"></div></div>
              </div>
              <div class="how-item-content">
                <h3 class="how-item-content-title fadeUpText">ご自宅または会場への一括お届けサービス</h3>
                <div class="how-item-content-border animationBorder"></div>
                <div class="how-item-content-border-short animationBorder"></div>
                <p class="how-item-content-text fadeUpText">
                当店配達区域内とさせて頂きます。<br>
    お電話にてお問い合わせくださいますようお願い申し上げます。
                </p>
              </div>
              </div>
            </div><!-- delivery end -->
          </div>
        </div>
      </div>
    </div><!-- contents end -->
  </div>
</div>

<?php get_footer(); ?>
