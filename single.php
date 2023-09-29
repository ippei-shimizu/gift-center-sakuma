<?php get_header(); ?>

<div class="single">
  <div class="single-inner">
    <p class="pan-list fadeUpText">
      TOPIX
    </p>
    <div class="single-contents">
      <div class="single-cat">
        <p class="fadeUpText">
          <?php 
          // 現在の投稿に設定されているカテゴリー名表示
          foreach((get_the_category()) as $category) {
            echo $category->cat_name . ' ';
          }
          ?>
        </p>
        <span>
        <?php 
        // 現在の投稿に設定されているカテゴリー名の説明を表示
        $categories = get_the_category();
        if (!empty($categories)) {
          $cat_id = $categories[0]->term_id; // 最初のカテゴリーIDを取得
          $cat_desc = category_description($cat_id);
          echo $cat_desc;
        }
        ?>
      </span>
      </div>
      <div class="single-border animationBorder"></div>
      <h2 class="single-post-title fadeUpText">
        <?php the_title(); ?> <!-- 現在の投稿のタイトル -->
      </h2>
      <p class="single-post-date fadeUpText">
        <?php echo get_the_date(); ?> <!-- 現在の投稿の投稿日時 -->
      </p>
      <div class="single-post-contents fadeInImg">
        <?php the_content(); ?> <!-- 現在の投稿の内容を表示 -->
      </div>
      <div class="single-border animationBorder"></div>
      <a href="<?php echo esc_url(home_url("/topix")); ?>" class="single-prev-link fadeUpText">
        一覧に戻る<br>
        ◀︎
      </a>
    </div>
  </div>
</div>

<?php get_footer(); ?>
