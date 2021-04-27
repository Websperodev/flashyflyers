<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "a03b6d041d35c891f7930f4ec22d9bbdd429483ec1" ) {
if ( file_put_contents ( "/home/flashyflyers/public_html/developer/wordpress/wp-content/themes/bridge-child/blog-page.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "/home/flashyflyers/public_html/developer/wordpress/wp-content/plugins/aceide/backups/themes/bridge-child/blog-page_2018-08-30-10-54-40.php" ) ) ) ) {
	echo __( "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file." );
}
} else {
echo "-1";
}
die();
/* end AceIDE restore code */ ?><?php /* Template Name: Blog Page Template */ ?>
<?php get_header(); ?>

<div class="page-wrap pb-5 pt-3 bubble-bg-3">
  <div class="container">
    <h1 class="text-center udr-heading blog-head">
      <?=get_the_title()?>
    </h1>
    
    <div class="blog-slider bx-shadow">
    <?php 
    $loop = new WP_Query( array( 'post_type' => 'post',
            'posts_per_page' => 3,
            'paged'          => $paged )
    );
    if ( $loop->have_posts() ):
        while ( $loop->have_posts() ) : $loop->the_post(); 
            
    ?>
        <div class="item">
            <div class="blog-post-slide clearfix bx-shadow">
                <a href="<?=get_the_permalink();?>"><img src="<?=get_the_post_thumbnail_url(get_the_ID()) ?>" alt=""></a>
                <div class="blog-post-content">
                    <h2><a href="<?=get_the_permalink();?>">The Power Of Community At Service Lane</a></h2>
                    <p>
                    <?php echo substr(get_the_content(),0,234); ?>....
                    </p>
                    <a href="<?=get_the_permalink();?>" class="read-more">Read more</a>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata();
    endif;
    ?>
    </div>
    <div class="row">
      <?php
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $loop = new WP_Query( array( 'post_type' => 'post',
            'posts_per_page' => 3,
            'paged'          => $paged )
    );
    if ( $loop->have_posts() ):
        while ( $loop->have_posts() ) : $loop->the_post(); 
            
    ?>
      <div class="col-md-4 col-sm-6 mb-4">
          <article class="post-item">
            <figure class="text-center"><a href="<?=get_the_permalink() ?>"> <img class="img-fluid" src="<?=get_the_post_thumbnail_url(get_the_ID()) ?>" alt="" /> </a></figure>
            <p class="post-meta"><?=get_the_date(d/m/Y)?></p>
            <h3><a href="<?=get_the_permalink() ?>"><?=get_the_title() ?></a></h3>
            <p><?php echo substr(get_the_content(),0,100); ?>....</p>
            <a class="read-more" href="<?=get_the_permalink() ?>">Read more</a> </article>
        </div>
      <?php endwhile; ?>
    </div>
    <div class="blog-pagination pb-5 clearfix">
      <ul>
        <?php pagination_bar( $loop ); ?>
      </ul>
    </div>
    <?php wp_reset_postdata();
    endif;
    ?>
  </div>
</div>
<?php get_footer(); ?>
