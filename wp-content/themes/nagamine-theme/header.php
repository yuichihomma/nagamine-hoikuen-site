<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>長峰保育園</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php if ( !is_front_page() ) : ?>
  <div class="header-inner">
    <div class="logo">
      <a href="<?php echo home_url('/'); ?>" class="logo-link">
        <img
          class="header-logo"
          src="<?php echo get_template_directory_uri(); ?>/docs/nagamine-logo.png"
          alt="">
        <h1 class="site-title">長峰保育園</h1>
        
      </a>
    </div>

    <button class="hamburger" id="hamburgerBtn" aria-label="メニューを開く">
      <span></span>
      <span></span>
      <span></span>
    </button>

    <?php if ( !is_front_page() ) : ?>
  <?php get_template_part('template-parts/site-header'); ?>
<?php endif; ?>
  </div>

<?php endif; ?>