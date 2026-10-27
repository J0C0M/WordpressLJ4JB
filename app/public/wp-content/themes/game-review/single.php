<?php get_header(); ?>

<main id="main" class="site-main">
    <div class="container">

        <?php while ( have_posts() ) : the_post(); ?>
            <article class="entry">
                <h1 class="entry__title"><?php the_title(); ?></h1>
                <p class="entry__meta">
                    <span class="entry__date"><?php echo esc_html( get_the_date() ); ?></span>
                    <span class="entry__author">door <?php the_author_posts_link(); ?></span>
                </p>
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="entry__image">
                        <?php the_post_thumbnail( 'large' ); ?>
                    </div>
                <?php endif; ?>
                <p class="entry__terms">
                    <span class="entry__genre">Genre: <?php the_category( ', ' ); ?></span>
                    <?php the_tags( '<span class="entry__platforms">Platform: ', ', ', '</span>' ); ?>
                </p>
                <div class="entry__content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>

    </div>
</main>

<?php get_footer(); ?>