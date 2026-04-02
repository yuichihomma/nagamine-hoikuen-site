<?php get_header(); ?>

<main class="photos-page">
  <section class="photos-section">
    <div class="photos-inner">

      <h1 class="photos-page-title">行事写真</h1>

      <?php
      $class_slug = isset($_GET['class']) ? sanitize_text_field($_GET['class']) : '';

      $class_map = array(
        'hiyoko' => 'ひよこ組',
        'risu'   => 'りす組',
        'ume'    => 'うめ組',
        'sakura' => 'さくら組',
        'momo'   => 'もも組',
      );
      ?>

      <div class="photo-class-nav">
        <a href="<?php echo home_url('/photos/'); ?>" class="photo-class-link <?php echo empty($class_slug) ? 'is-active' : ''; ?>">最新順</a>
        <a href="<?php echo home_url('/photos/?class=hiyoko'); ?>" class="photo-class-link <?php echo $class_slug === 'hiyoko' ? 'is-active' : ''; ?>">ひよこ</a>
        <a href="<?php echo home_url('/photos/?class=risu'); ?>" class="photo-class-link <?php echo $class_slug === 'risu' ? 'is-active' : ''; ?>">りす</a>
        <a href="<?php echo home_url('/photos/?class=sakura'); ?>" class="photo-class-link <?php echo $class_slug === 'sakura' ? 'is-active' : ''; ?>">さくら</a>
        <a href="<?php echo home_url('/photos/?class=momo'); ?>" class="photo-class-link <?php echo $class_slug === 'momo' ? 'is-active' : ''; ?>">もも</a>
        <a href="<?php echo home_url('/photos/?class=ume'); ?>" class="photo-class-link <?php echo $class_slug === 'ume' ? 'is-active' : ''; ?>">うめ</a>
      </div>

      <?php
      $args = array(
        'post_type'      => 'envira',
        'posts_per_page' => 5,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
      );

      $gallery_query = new WP_Query($args);

      if ($gallery_query->have_posts()) :
        while ($gallery_query->have_posts()) : $gallery_query->the_post();

          $gallery_id = get_the_ID();
          $gallery_title = get_the_title();

          // クラスが選ばれている場合、そのクラス名がタイトルに入っているものだけ表示
          if (!empty($class_slug) && isset($class_map[$class_slug])) {
            if (mb_strpos($gallery_title, $class_map[$class_slug]) === false) {
              continue;
            }
          }
      ?>

        <div class="gallery-block">
          <h2 class="gallery-title"><?php echo esc_html($gallery_title); ?></h2>

          <?php
          if (function_exists('envira_gallery')) {
            envira_gallery($gallery_id);
          }
          ?>
        </div>

      <?php
        endwhile;
        wp_reset_postdata();
      else :
      ?>
        <p class="gallery-empty">写真アルバムはまだありません。</p>
      <?php endif; ?>

      <div class="back-button-wrap">
        <a href="<?php echo home_url('/parents'); ?>" class="back-button">
          ← 在園者ページに戻る
        </a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>