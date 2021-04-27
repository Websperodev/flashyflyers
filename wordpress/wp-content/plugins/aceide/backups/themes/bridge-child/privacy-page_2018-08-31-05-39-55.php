<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "a03b6d041d35c891f7930f4ec22d9bbde8104c3217" ) {
if ( file_put_contents ( "/home/flashyflyers/public_html/developer/wordpress/wp-content/themes/bridge-child/privacy-page.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "/home/flashyflyers/public_html/developer/wordpress/wp-content/plugins/aceide/backups/themes/bridge-child/privacy-page_2018-08-31-05-39-55.php" ) ) ) ) {
	echo __( "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file." );
}
} else {
echo "-1";
}
die();
/* end AceIDE restore code */ ?><?php /* Template Name: Privacy Page Template */ ?>
<?php get_header(); ?>

<div class="page-wrap bubble-bg-2">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="terms-wrap bx-shadow pt--sm-4 pb-sm-2 pl-sm-5 pr-sm-5 mt-5 mb-5">
          <h1 class="udr-heading mb-4"><?=get_the_title()?></h1>
          <?php
           while ( have_posts() ) : the_post();
 				echo get_the_content();
    	   endwhile;
    	   get_sidebar( 'content-bottom' );
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>