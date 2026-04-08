<?php get_header(); ?>

<main class="news-page">
    <section class="news-section fade-in">
        <div class="inner">
            <h1>ニュース一覧</h1>

            <ul class="news-list">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <li class="news-item">
                    <a href="<?php the_permalink(); ?>">
                        <span class="news-date"><?php echo get_the_date('Y.m.d'); ?></span>
                        <span class="news-title"><?php the_title(); ?></span>
                    </a>
                </li>
                <?php endwhile; endif; ?>
            </ul>
            <div class="pagination">
                <?php the_posts_pagination(); ?>
            </div>
        </div>

    </section>
</main>

<?php get_footer(); ?>