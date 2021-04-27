<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "a03b6d041d35c891f7930f4ec22d9bbdd429483ec1" ) {
if ( file_put_contents ( "/home/flashyflyers/public_html/developer/wordpress/wp-content/themes/bridge-child/single-post.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "/home/flashyflyers/public_html/developer/wordpress/wp-content/plugins/aceide/backups/themes/bridge-child/single-post_2018-08-30-11-00-08.php" ) ) ) ) {
	echo __( "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file." );
}
} else {
echo "-1";
}
die();
/* end AceIDE restore code */ ?><?php get_header() ?>
<div class="page-wrap pb-5 pt-3 bubble-bg-3">
    <div class="container">

        <div class="blog-single bx-shadow">
            <p class="post-meta"><i class="far fa-calendar-alt"></i><span><?=get_the_date('d/m/Y',get_the_ID())?></span> <i class="far fa-clock"></i><span><?php the_time( 'H:i' ); ?></span></p>
            <h1><?=get_the_title()?></h1>
            <figure class="text-center">
                <img src="<?=get_the_post_thumbnail_url(get_the_ID())?>" class="img-fluid" alt="">
            </figure>
            <p><?php get_the_content()?></p>
        </div>

    </div>
</div>
<?php get_footer() ?>