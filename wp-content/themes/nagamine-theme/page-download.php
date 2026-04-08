<?php get_header(); ?>
<main class="download-page">
    <!--　タイトル　-->
    <section class="page-title fade-in">
        <div class="download-inner">
            <h1 class="page-download-title">書式のダウンロード</h1>
        </div>
    </section>

    <!-- 書式のダウンロード -->
     <div class="download-list fade-in">
        <div class="download-item">
            <a href="<?php echo get_template_directory_uri(); ?>/docs/attendance-permission.pdf" download>
                登園許可書（PDF）
            </a>
        </div>
        <div class="download-item">投薬依頼書（未設定）</div>
        <div class="download-item">
            <a href="<?php echo get_template_directory_uri(); ?>/docs/cancellation-of-medical-treatment-inful.pdf" download>療養解除届（インフルエンザ）
            </a>
        </div>
        <div class="download-item">
            <a href="<?php echo get_template_directory_uri(); ?>/docs/cancellation-of-medical-treatment-covid.pdf" download>療養解除届（新型コロナ）
            </a>
        </div>
     </div>
</main>
<?php get_footer(); ?>