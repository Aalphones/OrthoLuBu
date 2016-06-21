<?php wp_footer(); ?>
<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <?php echo get_theme_mod("werbung_text"); ?>
            </div>
            <div class="col l4 offset-l2 s12 contact">
                <h5>Kontakt</h5>
                <?php echo get_theme_mod("kontakt_text"); ?>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <?php
            $defaults = array(
                'theme_location' => 'footer-menu',
                'container' => false,
                'container_class' => 'menu',
                'echo' => false,
                'fallback_cb' => false,
                'items_wrap' => '%3$s',
                'depth' => 0
            );
            echo strip_tags(wp_nav_menu($defaults), '<a>');
            ?>
        </div>
    </div>
</footer>
<script src="js/compressed.js"></script>
</body>
</html>