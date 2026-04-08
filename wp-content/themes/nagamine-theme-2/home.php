<?php get_header(); ?>

<main class="blog-page">
    <!--タイトル-->
    <section class="blog-page-title fade-in">
        <h1>BLOG</h1>
    </section>

    <!--　ブログ一覧 -->
    <section class="blog-list-section fade-in">
        <div class="inner">
            <div class="blog-list-bg">
                <?php if (have_posts()) : ?>
                    <div class="blog-list">
                        <?php while (have_posts()) : the_post(); ?>
                        <article class="blog-card">
                            <a href="<?php the_permalink(); ?>" class="blog-card-link">
                                    <div class="blog-card-image">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('medium_large'); ?>
                                        <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.jpg" alt="写真はありません">
                                        <?php endif; ?>
                                    </div>
                                <div class="blog-card-body">
                                    <time class="blog-card-date">
                                        <?php echo get_the_date('Y.m.d'); ?>
                                    </time>
                                    <h2 class="blog-card-title"><?php  the_title(); ?></h2>
                                </div>
                            </a>
                        </article>
                        <?php  endwhile; ?>
                    </div>
                    <div class="blog-pagination">
                        <?php the_posts_pagination(); ?>
                    </div>
                <?php else : ?>
                    <p>記事がありません</p>
                <?php  endif; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>