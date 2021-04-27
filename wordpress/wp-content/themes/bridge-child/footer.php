<?php global $qode_options_proya, $wp_query; 
session_start();
?>
 <footer class="footer">
        <div class="container">
            <div class="footer-logo text-center mb-5">
                <a href="<?=get_site_option('home')?>"><img src="<?php echo esc_url($qode_options_proya['logo_image_light']); ?>" class="img-fluid" alt=""></a>
            </div>
            <div class="footer-lists">
                <?php dynamic_sidebar('footer_column_1'); ?>
            </div>
            <div class="socket mt-4">
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
   <script>
   	jQuery(document).ready(function(e) {
		
		 
			jQuery("#menu-footer-menu #menu-item-178").hide();
			
					jQuery("#menu-footer-menu #menu-item-33, #menu-footer-menu #menu-item-34").show();
		<?php 
		if(isset($_SESSION['userId']) && !empty($_SESSION['userId'])) {
					?>
					jQuery("#menu-footer-menu #menu-item-33, #menu-footer-menu #menu-item-34").hide();
					jQuery("#menu-footer-menu #menu-item-178").show();
					<?php 
						if($_SESSION['userType'] == "admin") {
					?>
					jQuery("#menu-footer-menu #menu-item-178 a").attr("href","<?=home_url('/');?>superadmin/profile.php");
				
				<?php }else if( $_SESSION['userType'] != "admin"){ ?>
					jQuery("#menu-footer-menu #menu-item-178 a").attr("href","<?=home_url('/');?>profile.php");
				<?php } ?>	
		<?php } ?>
		
    });
   </script>
<style>
.footer_telphone{text-align: center;font-size: 16px;color: #787878;display: block;margin-top: 17px;}
.footer_telphone i{transform: rotate(450deg);font-size: 20px;vertical-align: text-top;}
.footer_telphone a,.footer_telphone a:hover{ text-decoration:none;color: #787878;margin-left: 10px;}
</style>
</body>

</html>