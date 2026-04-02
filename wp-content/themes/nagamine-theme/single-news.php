<?php get_header(); ?>

<main class="single-news-page">
    <section class="single-news-section fade-in">
        <div class="single-inner">
            <!--お知らせ　詳細ページ -->
            <div class="single-news-main">
             <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
             <article class="single-news-article">
                <time class="single-news-date"><?php echo get_the_date('Y.m.d'); ?></time>
                <h1 class="single-news-title"><?php the_title(); ?></h1>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="single-news-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                 <div class="single-news-content">
                        <?php the_content(); ?>
                </div>
                 
            </article>
            </div>
                <!--お知らせサイドバー-->
                <aside class="single-news-sidebar">
                    <div class="sidebar-box">
                    <h2>最新のニュース</h2>
                    <ul>
                        <?php
                        $recent = new WP_Query([
                        'post_type' => 'news',
                        'posts_per_page' => 5
                        ]);
                        while ($recent->have_posts()) : $recent->the_post();
                        ?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                            <?php endwhile; wp_reset_postdata(); ?>
                    </ul>
                    </div>
                    <div class="single-news-back">
                    <a href="<?php echo get_post_type_archive_link('news'); ?>">お知らせ一覧に戻る</a>
                </div>
                </aside>
             
             <?php endwhile; endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>