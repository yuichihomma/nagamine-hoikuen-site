<?php get_header(); ?>
<main class="download-page">
    <!--　タイトル　-->
    <section class="page-title fade-in">
        <div class="inner">
            <h1>書式のダウンロード</h1>
        </div>
    </section>

    <!-- 書式のダウンロード -->
     <div class="download-list fade-in">
        <div class="download-item">
            <a href="<?php echo get_template_directory_uri(); ?>/docs/登園許可証（長岡市）.pdf" download>
                登園許可書（PDF）
            </a>
        </div>
        <div class="download-item">投薬依頼書（未設定）</div>
        <div class="download-item">
            <a href="<?php echo get_template_directory_uri(); ?>/docs/療養解除届（インフルエンザ）.pdf" download>療養解除届（インフルエンザ）
            </a>
        </div>
        <div class="download-item">
            <a href="<?php echo get_template_directory_uri(); ?>/docs/療養解除届（新型コロナ）.pdf" download>療養解除届（新型コロナ）
            </a>
        </div>
     </div>
</main>
<?php get_footer(); ?>