<?php get_header(); ?>

<!-- トップ専用（ロゴ＋TEL) -->
<div class="top-bar">
  <div class="top-bar-inner">
    <div class="top-logo">
      <img
        src="<?php echo get_template_directory_uri(); ?>/docs/長峰保育園のロゴ.png"
        alt="長峰保育園ロゴ">
      <span>長峰保育園</span>
    </div>

    <div class="top-tel">
      <a href="tel:0258463463" class="tel-link" aria-label="長峰保育園に電話しますか？">
        <img 
        src="<?php echo get_template_directory_uri(); ?>/docs/受話器.png">
        <span class="tel-text">TEL：0258-46-3463</span>
      </a>

    </div>
    <!-- トップページ用ハンバーガー -->
    <button class="hamburger" id="hamburgerBtn" aria-label="メニューを開く">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
</div>

<!-- でかヒーロー写真 -->
<section class="front-hero">
  <div class="hero-slider">
    <div class="slide active">
  <img
    src="<?php echo get_template_directory_uri(); ?>/docs/長峰保育園の入り口.jpg"
    alt="長峰保育園の入り口">
  </div>

  <div class="slide">
  <img
    src="<?php echo get_template_directory_uri(); ?>/docs/保育園紹介ダミー１.webp"
    alt="長峰保育園の紹介">
  </div>
  <div class="slide">
  <img
    src="<?php echo get_template_directory_uri(); ?>/docs/保育園ヘッダーダミー２.webp"
    alt="長峰保育園の紹介">
  </div>
  </div>
</section>

<!-- 共通ヘッダ -->
 <div class="pc-header">
<?php get_template_part('template-parts/site-header'); ?>
</div>

<!-- ウェルカムメッセージ -->
<main class="front-page">
  <section class="philosophy fade-in">
    <div class="inner">
      <h2 class="tit01">長峰保育園へようこそ！</h2>
      <p class="concept-text">
        長峰保育園の子ども達は、明るくのびのびと情緒に富んだ素直な子どもたち<br>
        自然豊かな空気に囲まれ、経験豊富で楽しく優しい先生と毎日一緒に過ごそう！
      </p>
    </div>
  </section>

  <!-- お知らせとブログ -->
  <section class="info-section fade-in">
    <div class="info-inner">

      <!-- お知らせ -->

      <div class="top-news-column">
        <h2 class="title02">お知らせ</h2>
          <ul class="top-news-list">
          <?php
          $news_query = new WP_Query(array(
            'post_type'      => 'news',
            'posts_per_page' => 5,
            'post_status'    => 'publish',
            ));
          ?>

          <?php if ($news_query->have_posts()) : ?>
            <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
                <li class="top-news-card">
                  <a href="<?php the_permalink(); ?>" class="news-card-link">
                    <h3 class="top-news-title"><?php the_title(); ?></h3>
                    <p class="top-news-text">
                      <?php echo wp_trim_words(get_the_excerpt(), 40, '...'); ?>
                    </p>
                  </a>
                </li>
              <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
              <?php else : ?>
                <li class="top-news-card">
                  <p class="top-news-text">お知らせはまだありません。</p>
                </li>
              <?php endif; ?>
              <div class="news-more">
                <a href="<?php echo home_url('/news'); ?>" class="more-btn">
                もっと見る →
              </a>
            </div>
          </ul>
      </div>
      

      <!-- ブログ -->
      <div class="top-blog-column">
        <h2 class="title02">BLOG</h2>

        <div class="top-blog-list">
          <?php
          $blog_query = new WP_Query(array(
            'post_type'      => 'post',
            'posts_per_page' => 3,
            'post_status'    => 'publish',
          ));
          ?>

          <?php if ($blog_query->have_posts()) : ?>
            <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
              <article class="top-blog-card">
                <a href="<?php the_permalink(); ?>" class="blog-card-link">

                  <div class="top-blog-card-image">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('medium_large'); ?>
                    <?php else : ?>
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/no-image.jpg'); ?>" alt="No Image">
                    <?php endif; ?>
                  </div>

                  <h3 class="top-blog-card-title"><?php the_title(); ?></h3>
                </a>
              </article>
              <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
              <?php else : ?>
                <p>ブログ記事はまだありません。</p>
              <?php endif; ?>
              <div class="blog-more">
                <a href="<?php echo home_url('/blog'); ?>" class="more-btn">
                もっと見る →
              </a>
            </div>
        </div>
      </div>

    </div>
  </section>
</main>

<?php get_footer(); ?>