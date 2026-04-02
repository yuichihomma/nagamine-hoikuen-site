<?php
/*
Template Name: Login Page
*/
 get_header(); ?>

<main class="login-page">
    <section class="login-section">
        <div class="inner">
            <div class="login-box">
        <div class="login-message">
          <h1 class="login-title">在園者ログイン</h1>
          <p class="login-text">
            保護者専用ページです。IDとパスワードを入力してください。
          </p>
          <p class="login-note">
            ※IDとパスワードは園から配布されています
          </p>
        </div>

        <form class="login-form" method="post" action="<?php echo esc_url(wp_login_url(home_url('/parents'))); ?>">
          <div class="login-form-group">
            <label for="user_login">ユーザーID</label>
            <input type="text" name="log" id="user_login" required>
          </div>

          <div class="login-form-group">
            <label for="user_pass">パスワード</label>
            <input type="password" name="pwd" id="user_pass" required>
          </div>

          <input type="hidden" name="redirect_to" value="<?php echo esc_url(home_url('/parents')); ?>">

          <div class="login-button-wrap">
            <button type="submit" class="login-button">ログイン</button>
          </div>
        </form>
      </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>