<?php /* Template Name: Blog Page Template */ ?>
<?php get_header(); 
function get_excerpt($limit, $source = null){

    $excerpt = $source == "content" ? get_the_content() : get_the_excerpt();
    $excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $limit);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
    $excerpt = $excerpt.'...';
    return $excerpt;
}
?>

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
            <div class="blog-post-slide clearfix bx-shadow div_blogpage">
                <a href="<?=get_the_permalink();?>"  onclick="return gtag_report_conversion('<?=get_the_permalink() ?>')"><img src="<?=get_the_post_thumbnail_url(get_the_ID()) ?>" alt=""></a>
                <div class="blog-post-content">
                    <h2><a href="<?=get_the_permalink();?>"  onclick="return gtag_report_conversion('<?=get_the_permalink() ?>')"><?php echo get_the_title(get_the_ID()); ?></a></h2>
                    <p><?php echo substr(get_the_content(),0,250); ?>....</p>
                    <a href="<?=get_the_permalink();?>"  onclick="return gtag_report_conversion('<?=get_the_permalink() ?>')" class="read-more">Read more</a>
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
      <div class="col-md-4 col-sm-6 mb-4 divpost<?php echo get_the_ID();  ?>">
          <article class="post-item">
            <figure class="text-center"><a href="<?=get_the_permalink() ?>"  onclick="return gtag_report_conversion('<?=get_the_permalink() ?>')"> <img class="img-fluid" src="<?=get_the_post_thumbnail_url(get_the_ID()) ?>" alt="" /> </a></figure>
            <p class="post-meta"><?=get_the_date('m/d/Y',get_the_ID())?></p>
            <h3><a href="<?=get_the_permalink() ?>"  onclick="return gtag_report_conversion('<?=get_the_permalink() ?>')"><?=get_the_title() ?></a></h3>
           <p class="theContent"><?php echo get_excerpt(100); ?></p>
            <a class="read-more" href="<?=get_the_permalink() ?>" onclick="return gtag_report_conversion('<?=get_the_permalink() ?>')">Read more</a> </article>
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

