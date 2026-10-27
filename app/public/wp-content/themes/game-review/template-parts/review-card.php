<article class="review-card">
    <?php if ( has_post_thumbnail() ) : ?>
        <a class="review-card__image" href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'medium_large' ); ?>
        </a>
    <?php endif; ?>

    <div class="review-card__body">
        <p class="review-card__genre"><?php the_category( ', ' ); ?></p>
        <h2 class="review-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="review-card__excerpt"><?php the_excerpt(); ?></div>
        <a class="review-card__link" href="<?php the_permalink(); ?>">Lees review</a>
    </div>
</article>