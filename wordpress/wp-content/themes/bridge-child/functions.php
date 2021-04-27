<?php

// enqueue the child theme stylesheet

Function qode_child_theme_enqueue_scripts() {
	wp_register_style( 'childstyle', get_stylesheet_directory_uri() . '/style.css?v2'  );
	wp_enqueue_style( 'childstyle' );
}
add_action( 'wp_enqueue_scripts', 'qode_child_theme_enqueue_scripts', 11);

/*-----------Deactivate Theme Default Admin Menu----------------*/
add_action( 'admin_init', 'custom_remove_menu_pages' );

function custom_remove_menu_pages() {
	remove_menu_page( 'qode_options_import_page' );
}
/*-----------Deactivate Theme Default Admin Menu----------------*/




/*-----------Deactivate Theme Default Post Types----------------*/
function deactivate_post_type(){
	unregister_post_type('masonry_gallery');
	unregister_post_type('slides');
	unregister_post_type('carousels');
	unregister_post_type('portfolio_page');
	unregister_post_type('testimonials');
}
add_action("init","deactivate_post_type");
/*-----------Deactivate Theme Default Post Types----------------*/

function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');

/*-----------Pagination----------------*/
function pagination_bar( $custom_query ) {

    $total_pages = $custom_query->max_num_pages;
    $big = 999999999; // need an unlikely integer

    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}
/*-------------------------Pagination------------------------*/

function register_my_session()
{
  if( !session_id() )
  {
    session_start();
  }
}

add_action('init', 'register_my_session');

function wpse31748_exclude_menu_items( $items, $menu, $args ) {
    // Iterate over the items to search and destroy
	
	if(!is_admin()) {
		if($menu->name == "Footer Menu") {
			if(isset($_SESSION['userId']) && !empty($_SESSION['userId'])) {
				foreach ( $items as $key => $item ) {
					if ( $item->object_id == 33 || $item->object_id == 34 ) {
						unset( $items[$key] );	
					}
				}
			} else {
				foreach ( $items as $key => $item ) {
					if ( $item->object_id == 153 ) {
						unset( $items[$key] );	
					}
				}
			}
		}
	}
    return $items;
}

add_filter( 'wp_get_nav_menu_items', 'wpse31748_exclude_menu_items', NULL, 3 );

function my_filter_plugin_updates( $value ) {
	if( isset( $value->response['easy-accordion-free/plugin-main.php'] ) ) {        
      unset( $value->response['easy-accordion-free/acf.php'] );
    }
	
    return $value;
}
add_filter( 'site_transient_update_plugins', 'my_filter_plugin_updates' );

add_shortcode('Faq_list', 'get_faq_list');
function get_faq_list($atts) {
	global $post,$wpdb;
	$faq_postid = $atts['id'];
	$getfaqlist = get_post_meta( $faq_postid, 'sp_eap_upload_options', true );
	
?>
<div class="divserachbox">
<input type="text" id="search" class="form-control" onkeyup="myFunction()" placeholder="F.A.Q. search">
<div class="iconsearch"><i class="fas fa-search"></i></div>
</div>
<div class="accordion div_custom_faqlist" id="accordionExample">
<?php 
$count = 1;
foreach($getfaqlist['accordion_content_source'] as $content_source){ 
	$content_title       = $content_source['accordion_content_title'];
	$content_embed       = $content_source['accordion_content_description'];
	$content_description = wpautop( $content_embed );
?>
        <div class="card">
            <div class="card-header" id="heading<?php echo $count;?>">
                <h2 class="mb-0">
                    <a href="javascript:void(0);" class="collapsed div_acco_title" data-toggle="collapse" data-target="#collapse<?php echo $count;?>"><i class="fa fa-plus"></i><span class="div_number"><?php echo $count.'.' ?></span><?php echo $content_title; ?></a>
                </h2>
            </div>
            <div id="collapse<?php echo $count;?>" class="collapse" aria-labelledby="heading<?php echo $count;?>" data-parent="#accordionExample">
                <div class="card-body">
                    <?php echo $content_description; ?>
                </div>
            </div>
        </div>
 <?php $count++; } ?>       
</div>
<script>
var $ = jQuery;
    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
        	$(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
		
		//search content
		
		$('#search').keyup(function(){
 
	   // Search text
			   var text = $(this).val().toLowerCase();
			 
			   // Hide all content class element
			   if(text == "")
	   			{
		   		//$('.card-body').hide();
		  			$('.collapse').removeClass('show');
					$('.fa').removeClass('fa-minus');
		  			$('.fa').addClass("fa-plus");
	   			}
			   $('.card').hide();
			
			   // Search 
			   $('.card .div_acco_title').each(function(){
			 
				if($(this).text().toLowerCase().indexOf(""+text+"") != -1 ){
				 $(this).closest('.card').show();
				  
				}
			  });
			  
			  /*$('.card:contains("'+text+'")').show();
			  if(text != "")
	   		  {
		   			$('.collapse').addClass('show');
					$('.fa').removeClass('fa-plus');
		   			$('.fa').addClass("fa-minus");
	   		  }*/
 		});
});
</script>
<?php	

}
add_shortcode( 'copy_right_year', 'copy_right_year' );
function copy_right_year() {
    return date("Y");
}

add_filter(‘widget_text’, ‘do_shortcode’); 


