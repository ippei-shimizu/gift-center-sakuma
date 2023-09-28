<?php get_header(); ?>

<div class="index">
  <div class="index-inner">
    <p class="pan-list fadeUpText">
      <?php if(is_category()) : ?>
        <?php single_cat_title(); ?>
      <?php else: ?>
        TOPIX
      <?php endif; ?>
    </p>

    <div class="index-title">
      <h2 class="fadeUpText">
        <?php if(is_category()) : ?>
          <?php single_cat_title(); ?>
        <?php else: ?>
          TOPIX
        <?php endif; ?>
      </h2>
      <span class="fadeUpText">
        <?php if(is_category()) : ?>
          <?php echo category_description(); ?>
        <?php else: ?>
          トピックス
        <?php endif; ?>
      </span>
    </div>

    <ul class="category-list">
    <li class="fadeUpText">
        <a href="<?php echo esc_url(home_url("/topix")); ?>" <?php if(!is_category()) echo 'class="active"'; ?>>ALL</a>
    </li>
    <?php 
        $categories = get_categories();
        foreach($categories as $category) {
            $class = (is_category($category->name)) ? 'active' : '';
            echo '<li class="fadeUpText"><a class="' . $class . '" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
        }
    ?>
</ul>


    <div class="post-lists">
      <div class="index-border animationBorder"></div>
      <div class="post-list-wrap">
        <?php if(have_posts()): ?>
          <?php while(have_posts()): the_post(); ?>
            <div class="index-post-box">
              <div class="index-post fadeUpText">
                <a href="<?php the_permalink(); ?>">
                  <p class="index-date">
                  <?php echo get_the_date(); ?>
                  </p>
                  <h3 class="index-post-title">
                      <?php the_title(); ?>
                  </h3>
                  <div class="index-arrow">
                    ▶︎
                  </div>
                </a>
              </div>
            </div>
          <?php endwhile; ?>
        <?php else: ?>
          <p>投稿がありません。</p>
        <?php endif; ?>
      </div>
      <div class="index-border animationBorder"></div>
    </div>

    <div class="index-pagination fadeUpText">
      <?php
        echo paginate_links(array(
          'prev_text' => '&laquo;',
          'next_text' => '&raquo;'
        ));
      ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
