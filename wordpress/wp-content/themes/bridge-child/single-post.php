<?php get_header() ?>
<div class="page-wrap pb-5 pt-3 bubble-bg-3">
    <div class="container">
    <?php $data =get_post(get_the_ID());?>
        <div class="blog-single bx-shadow">
            <p class="post-meta"><i class="far fa-calendar-alt"></i><span><?=get_the_date('d/m/Y',get_the_ID())?></span> <i class="far fa-clock"></i><span><?php the_time( 'h:i A' ); ?></span></p>
            <h1><?=get_the_title()?></h1>
            <figure class="text-center">


            <?php 
            global $wpdb;
			$image_url= get_the_post_thumbnail_url(get_the_ID());
            $query_arr  = $wpdb->get_col( $wpdb->prepare( "SELECT ID FROM {$wpdb->posts} WHERE guid='%s';", strtolower( $image_url ) ) );
            $image_id   = ( ! empty( $query_arr ) ) ? $query_arr[0] : 0;
            $alt=get_post_meta( $image_id, '_wp_attachment_image_alt', true );

            if(is_single(347)){ ?>
            	<a href="https://www.flashyflyers.com/flyer-details.php?productId=20&title=HALLOWEEN+PARTY">
            	<img src="<?=get_the_post_thumbnail_url(get_the_ID())?>" class="img-fluid" alt="<?php echo $alt; ?>"></a>
            <?php } else { ?>
            	<img src="<?=get_the_post_thumbnail_url(get_the_ID())?>" class="img-fluid" alt="<?php echo $alt; ?>">
            <?php }	 ?>
            </figure>
            <p><?=$data->post_content?></p>
        </div>
    </div>
</div>
<?php get_footer() ?>