<?php get_header(); ?>

<main id="main" class="site-main">
    <div class="container">

        <header class="page-header">
            <h1 class="page-title"><?php the_archive_title(); ?></h1>
            <?php the_archive_description( '<div class="page-description">', '</div>' ); ?>
        </header>

        <?php get_template_part( 'template-parts/review-list' ); ?>

    </div>
</main>

<?php get_footer(); ?>