<?php get_header(); ?>

<main id="main" class="site-main">

    <section class="hero">
        <div class="container">
            <h1 class="hero__title"><?php bloginfo( 'name' ); ?></h1>
            <p class="hero__tagline"><?php bloginfo( 'description' ); ?></p>

            <?php if ( is_page() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="hero__text"><?php the_content(); ?></div>
                <?php endwhile; ?>
            <?php endif; ?>

            <a class="button" href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ); ?>">Alle reviews</a>
        </div>
    </section>
        <section class="latest">
        <div class="container">
            <h2 class="section-title">Laatste reviews</h2>
            <?php get_template_part( 'template-parts/latest-reviews' ); ?>
        </div>
    </section>
    <section class="genres">
        <div class="container">
            <h2 class="section-title">Kies een genre</h2>
            <ul class="genre-list">
                <?php wp_list_categories( array( 'title_li' => '' ) ); ?>
            </ul>
        </div>
    </section>

</main>

<?php get_footer(); ?>