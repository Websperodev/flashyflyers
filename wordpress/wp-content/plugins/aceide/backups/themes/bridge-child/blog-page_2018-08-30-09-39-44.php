<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "0e907b4f514a5043122d461c5961c913d429483ec1" ) {
if ( file_put_contents ( "/home/flashyflyers/public_html/developer/wordpress/wp-content/themes/bridge-child/blog-page.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "/home/flashyflyers/public_html/developer/wordpress/wp-content/plugins/aceide/backups/themes/bridge-child/blog-page_2018-08-30-09-39-44.php" ) ) ) ) {
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
    <div class="row">
    <?php
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $loop = new WP_Query( array( 'post_type' => 'post',
            'posts_per_page' => 1,
            'paged'          => $paged )
    );
    if ( $loop->have_posts() ):
        while ( $loop->have_posts() ) : $loop->the_post(); 
            echo "title: ".get_the_title()."<br/>";
            echo "title: ".get_the_content()."<br/>";
            echo "title: ".get_the_date('d/m/Y')."<br/>";
            echo "title: ".get_the_ID()."<br/>";
            echo "title: ".get_the_post_thumbnail_url(get_the_ID())."<br/>";
    ?>
    
      <div class="col-md-4 col-sm-6 mb-4">
        <article class="post-item">
          <figure class="text-center"><a href="https://flashyflyers.com/developer/blog-details3.html"> <img class="img-fluid" src="https://flashyflyers.com/developer/images/blog.jpg" alt="" /> </a></figure>
          <p class="post-meta">12/08/2018</p>
          <h3><a href="https://flashyflyers.com/developer/blog-details3.html">The Power Of Community At Service Lane</a></h3>
          The Service Lane platform aspires to add through a dedicated community of people’s lives more options.... <a class="read-more" href="blog-details3.html">Read more</a> </article>
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
