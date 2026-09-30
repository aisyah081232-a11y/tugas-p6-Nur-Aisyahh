<?php get_header(); ?>

<main class="container">

    <div class="main-content">

        <section class="content">

            <h2>Artikel Terbaru</h2>

            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>

                    <article class="post">

                        <h2>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>

                        <p class="post-date">
                            <?php echo get_the_date(); ?>
                        </p>

                        <?php if (has_post_thumbnail()) : ?>

                            <?php the_post_thumbnail('medium'); ?>

                        <?php endif; ?>

                        <div class="post-content">
                            <?php the_excerpt(); ?>
                        </div>

                    </article>

                <?php endwhile; ?>

            <?php else : ?>

                <h2>Belum ada artikel</h2>

                <p>
                    Silakan tambahkan artikel melalui dashboard WordPress.
                </p>

            <?php endif; ?>

        </section>

        <?php get_sidebar(); ?>

    </div>

</main>

<?php get_footer(); ?>