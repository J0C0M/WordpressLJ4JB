<?php get_header(); ?>

<main id="main" class="site-main">
    <div class="container">

        <header class="page-header">
            <p class="page-label">Genre</p>
            <h1 class="page-title"><?php single_cat_title(); ?></h1>
            <?php the_archive_description( '<div class="page-description">', '</div>' ); ?>
        </header>

        <?php get_template_part( 'template-parts/review-list' ); ?>

    </div>
</main>

<?php get_footer(); ?>