<?php get_header(); ?>

<main class="class-news-page">
  <section class="class-news-section">
    <div class="letter-inner">

      <h1 class="class-news-title">園だより・クラスだより</h1>
      <p class="class-news-text">自クラスのおたよりをご覧下さい</p>

      <?php
      // クラス選択時のURLパラメータを受け取る
      // 例: /letter?class=hiyoko
      $class_slug = isset($_GET['class']) ? sanitize_text_field($_GET['class']) : '';
      ?>

      <!-- クラス切り替えボタン -->
      <div class="class-list">
        <a href="<?php echo home_url('/letter'); ?>" class="class-name">すべて</a>
        <a href="<?php echo home_url('/letter?class=hiyoko'); ?>" class="class-name">ひよこ</a>
        <a href="<?php echo home_url('/letter?class=risu'); ?>" class="class-name">りす</a>
        <a href="<?php echo home_url('/letter?class=ume'); ?>" class="class-name">うめ</a>
        <a href="<?php echo home_url('/letter?class=sakura'); ?>" class="class-name">さくら</a>
        <a href="<?php echo home_url('/letter?class=momo'); ?>" class="class-name">もも</a>
        <a href="<?php echo home_url('/letter?class=endayori'); ?>" class="class-name">園だより</a>
      </div>

      <div class="newsletter-list">
        <?php
        $args = array(
          'post_type'      => 'letter',
          'posts_per_page' => -1,
          'orderby'        => 'date',
          'order'          => 'DESC',
        );

        // クラスが選ばれているときだけカテゴリー絞り込み
        if (!empty($class_slug)) {
          $args['category_name'] = $class_slug;
        }

        $letter_query = new WP_Query($args);

        if ($letter_query->have_posts()) :
          while ($letter_query->have_posts()) : $letter_query->the_post();

            // ACFで設定したPDF
            $pdf = get_field('letter_pdf');

            // 投稿日から7日以内ならNEW表示
            $days = 7;
            $now = current_time('timestamp');
            $post_time = get_the_time('U');
        ?>

          <article class="newsletter-item">
            <div class="newsletter-meta">
            <h2 class="newsletter-item-title">
              <?php the_title(); ?>

              <?php if (($now - $post_time) < ($days * 24 * 60 * 60)) : ?>
                <span class="new-label">NEW</span>
              <?php endif; ?>
            </h2>
            
            <p class="newsletter-item-date">
              <?php echo get_the_date('Y.m.d'); ?>
            </p>

            <?php if ($pdf) : ?>
              <a href="<?php echo esc_url($pdf); ?>" target="_blank" class="newsletter-link">
                PDFを見る
              </a>
            <?php else : ?>
              <p class="newsletter-no-pdf">PDFはまだ登録されていません。</p>
            <?php endif; ?>
            </div>
          </article>

        <?php
          endwhile;
          wp_reset_postdata();
        else :
        ?>
          <p class="newsletter-empty">お便りはまだありません。</p>
        <?php endif; ?>
      </div>

      <div class="back-button-wrap">
        <a href="<?php echo home_url('/parents'); ?>" class="back-button">
          ← 在園者ページに戻る
        </a>
      </div>

    </div>
  </section>
</main>

<?php get_footer(); ?>