<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "0e907b4f514a5043122d461c5961c913d429483ec1" ) {
if ( file_put_contents ( "/home/flashyflyers/public_html/developer/wordpress/wp-content/themes/bridge-child/footer.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "/home/flashyflyers/public_html/developer/wordpress/wp-content/plugins/aceide/backups/themes/bridge-child/footer_2018-08-30-06-50-24.php" ) ) ) ) {
	echo __( "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file." );
}
} else {
echo "-1";
}
die();
/* end AceIDE restore code */ ?> <footer class="footer">
        <div class="container">
            <div class="footer-logo text-center mb-5">
                <a href="index.html"><img src="images/footer-logo.png" class="img-fluid" alt=""></a>
            </div>
            <div class="footer-lists mb-5">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About us</a></li>
                    <li><a href="contact.html">Contact us</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="signup.html">Sign up</a></li>
                    <li><a href="terms.html">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="socket mt-5">
                <div class="social-links mb-3">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
                <p id="copyright">Copyright &copy; 2018 Flashy Flyers</p>
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
</body>

</html>