<?php get_header(); ?>

<main id="main" class="site-main">
    <div class="container">

        <?php $author_id = get_queried_object_id(); ?>

        <header class="page-header author-header">
            <?php echo get_avatar( $author_id, 96 ); ?>
            <div class="author-header__text">
                <p class="page-label">Reviewer</p>
                <h1 class="page-title"><?php echo esc_html( get_the_author_meta( 'display_name', $author_id ) ); ?></h1>
                <p class="page-description"><?php echo esc_html( get_the_author_meta( 'description', $author_id ) ); ?></p>
            </div>
        </header>

        <?php get_template_part( 'template-parts/review-list' ); ?>

    </div>
</main>

<?php get_footer(); ?>