<?php get_header(); ?>

<main id="main" class="site-main">
    <div class="container">

        <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
            <?php endwhile; ?>

        <?php else : ?>

            <p>Geen reviews gevonden.</p>

        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>