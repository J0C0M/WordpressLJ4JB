<footer class="site-footer">
    <div class="container site-footer__inner">

        <?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
            <div class="footer-widgets">
                <?php dynamic_sidebar( 'footer-widgets' ); ?>
            </div>
        <?php endif; ?>

        <p class="site-info">&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?></p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>