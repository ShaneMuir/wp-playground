<footer>
    <div class="container">
        <div class="row">
            <nav class="col-12 col-md-8">
                <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
            </nav>

            <div class="col-12 col-md-4">
                Copyright &copy;<?php echo date("Y"); ?>
            </div>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>