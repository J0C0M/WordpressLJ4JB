<?php get_header(); ?>

<main id="main" class="site-main">
    <div class="container">

        <?php while ( have_posts() ) : the_post(); ?>
            <article class="entry">
                <h1 class="entry__title"><?php the_title(); ?></h1>
                <div class="entry__content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>

    </div>
</main>

<?php get_footer(); ?>