<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "a03b6d041d35c891f7930f4ec22d9bbde8104c3217" ) {
if ( file_put_contents ( "/home/flashyflyers/public_html/developer/wordpress/wp-content/themes/bridge-child/footer.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "/home/flashyflyers/public_html/developer/wordpress/wp-content/plugins/aceide/backups/themes/bridge-child/footer_2018-08-31-08-21-30.php" ) ) ) ) {
	echo __( "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file." );
}
} else {
echo "-1";
}
die();
/* end AceIDE restore code */ ?><?php global $qode_options_proya, $wp_query; ?>
 <footer class="footer">
        <div class="container">
            <div class="footer-logo text-center mb-5">
                <a href="<?=get_site_option('home')?>"><img src="<?php echo esc_url($qode_options_proya['logo_image_light']); ?>" class="img-fluid" alt=""></a>
            </div>
            <div class="footer-lists mb-5">
                <?php dynamic_sidebar('footer_column_1'); ?>
            </div>
            <div class="socket mt-5">
                <div class="social-links mb-3">
                    <?php dynamic_sidebar('footer_column_2'); ?>
                </div>
                <p id="copyright"><?php dynamic_sidebar('footer_column_3'); ?></p>
            </div>
        </div>
    </footer>
    
    <script src="<?=get_stylesheet_directory_uri()?>/js/jquery.js"></script>
    <script src="<?=get_stylesheet_directory_uri()?>/js/popper.min.js"></script>
    <script src="<?=get_stylesheet_directory_uri()?>/js/bootstrap.min.js"></script>
    <script src="<?=get_stylesheet_directory_uri()?>/js/slick.min.js"></script>
    <script src="<?=get_stylesheet_directory_uri()?>/js/script.js"></script>

    <script>
        $(document).ready(function() {
            $(".blog-slider").slick({
                arrows: false,
                dots: true
            });
        });
    </script>
    <?php wp_footer(); ?>
</body>

</html>