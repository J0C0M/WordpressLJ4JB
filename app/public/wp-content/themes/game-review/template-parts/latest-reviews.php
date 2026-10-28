<?php
$latest = new WP_Query( array(
    'post_type'           => 'post',
    'posts_per_page'      => 3,
    'ignore_sticky_posts' => true,
) );
?>

<?php if ( $latest->have_posts() ) : ?>
    <div class="review-grid">
        <?php while ( $latest->have_posts() ) : $latest->the_post(); ?>
            <?php get_template_part( 'template-parts/review-card' ); ?>
        <?php endwhile; ?>
    </div>
<?php endif; ?>

<?php wp_reset_postdata(); ?>