<?php get_header(); ?>

<main class="single-page">
    <!--詳細記事-->
    <section class="single-content-section">
        <div class="inner single-layout">
            <div class="single-main">
                 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                 <article class="single-article">
                    <h1 class="single-article-title"><?php the_title(); ?></h1>

                    <?php if (has_post_thumbnail()) : ?>
                        <div class="single-thumbnail">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="single-content">
                        <?php the_content(); ?>
                    </div>
                 </article>
                 <?php endwhile; endif; ?>
            </div>
    <!--サイドバー　-->
            <aside class="single-sidebar">
                <section class="sidebar-box recent-posts">
                    <h2>最近の記事</h2>
                    <ul>
                        <?php
                        $recent_posts = new WP_Query(array(
                            'post_type' =>'post',
                            'posts_per_page' =>3,
                            'post__not_in' =>array(get_the_ID())
                            ));

                            if($recent_posts->have_posts()) :
                                while ($recent_posts->have_posts()) : $recent_posts->the_post();
                             ?>
                            <li class="recent-post-item">
                                <a href="<?php the_permalink(); ?>" class="recent-post-link">
                                    <div class="recent-post-thumb">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    <?php else : ?>
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/no-image.jpg'); ?>" alt="写真はありません">
                                    <?php endif; ?>
                                    </div>

                                <div class="recent-post-body">
                                    <p class="recent-post-title"><?php the_title(); ?></p>
                                </div>
                                  </a>
                            </li>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                            endif;
                        ?>
                    </ul>
                </section>

                <section class="sidebar-box back-box">
                    <a href="<?php echo home_url('/blog'); ?>" class="back-box-to-blog">ブログ一覧に戻る</a>
                </section>
            </aside>
        </div>
    </section>
</main>

<?php get_footer(); ?>