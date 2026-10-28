<?php if ( have_posts() ) : ?>

    <div class="review-grid">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'template-parts/review-card' ); ?>
        <?php endwhile; ?>
    </div>

    <?php the_posts_pagination(); ?>

<?php else : ?>

    <p>Geen reviews gevonden.</p>

<?php endif; ?>