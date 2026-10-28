<?php get_header(); ?>

<main id="main" class="site-main">
    <div class="container">

        <header class="page-header">
            <h1 class="page-title">Pagina niet gevonden</h1>
            <p class="page-description">Deze pagina bestaat niet (meer). Misschien vind je hieronder wat je zoekt.</p>
            <a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>">Terug naar home</a>
        </header>

        <h2 class="section-title">Laatste reviews</h2>
        <?php get_template_part( 'template-parts/latest-reviews' ); ?>

    </div>
</main>

<?php get_footer(); ?>