<?php get_header(); ?>

<main class="attendance-page">

  <section class="attendance-section">
    <div class="inner">

      <h1 class="page-title">欠席・遅刻連絡</h1>
      <p class="page-text">
        欠席・遅刻の際は、こちらのフォームよりご連絡ください。
      </p>

      <div class="attendance-form">
        <?php echo do_shortcode('[contact-form-7 id="123" title="欠席・遅刻連絡"]'); ?>
      </div>

    </div>
    <div class="back-button-wrap">
        <a href="<?php echo home_url('/parents'); ?>" class="back-button">
          ← 在園者ページに戻る
        </a>
      </div>
  </section>

  

</main>

<?php get_footer(); ?>