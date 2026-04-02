<?php
/*
Template Name: Parents Page
*/
if(!is_user_logged_in()) {wp_redirect(home_url('/login'));exit;} get_header();?>

<main class="parents-page">
  <section class="parents-section">
    <div class="inner">

      <div class="parents-header">
        <h1 class="parents-title">在園者ページ</h1>
        <p class="parents-text">
          在園者向けのサイトです。必要に応じてダウンロードしてください。
        </p>
      </div>

      <div class="parents-grid">

        <a href="<?php echo home_url('/letter'); ?>" class="parents-card">
          <p>園だよりと<br>クラスだより</p>
        </a>

        <a href="<?php echo home_url('/photos'); ?>" class="parents-card">
          <p>行事写真</p>
        </a>

        <a href="<?php echo home_url('/schedule-comingsoon'); ?>" class="parents-card">
          <p>年間予定表</p>
        </a>

        <a href="<?php echo home_url('/parent-contact'); ?>" class="parents-card">
          <p>欠席・遅刻連絡</p>
        </a>

      </div>

      <div class="logout-area">
        <a href="<?php echo wp_logout_url(home_url()); ?>" class="logout-link">
          ログアウト
        </a>
      </div>

    </div>
  </section>
</main>

<?php get_footer(); ?>