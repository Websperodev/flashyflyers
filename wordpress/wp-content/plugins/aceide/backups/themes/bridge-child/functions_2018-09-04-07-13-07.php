<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "a03b6d041d35c891f7930f4ec22d9bbd4404404009" ) {
if ( file_put_contents ( "/home/flashyflyers/public_html/developer/wordpress/wp-content/themes/bridge-child/functions.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "/home/flashyflyers/public_html/developer/wordpress/wp-content/plugins/aceide/backups/themes/bridge-child/functions_2018-09-04-07-13-07.php" ) ) ) ) {
	echo __( "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file." );
}
} else {
echo "-1";
}
die();
/* end AceIDE restore code */ ?><?php

// enqueue the child theme stylesheet

Function qode_child_theme_enqueue_scripts() {
	wp_register_style( 'childstyle', get_stylesheet_directory_uri() . '/style.css'  );
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


//then remove menu items based on that
function remove_those_menu_items( $menu_order ){
    global $menu;
    // check using the new capability with current_user_can
    if(isset($_SESSION['userId']) && !empty($_SESSION['userId'])) {
        foreach ( $menu as $mkey => $m ) {
            //login menu
            $keyA = array_search( 'login.php', $m );
            //register menu
            $keyB = array_search( 'signup.php', $m );
            if ( $keyA || $keyB )
                unset( $menu[$mkey] );
        }
    } else {
        foreach ( $menu as $mkey => $m ) {
            //profile menu
            $keyC = array_search( 'profile.php', $m );
            if ( $keyC )
                unset( $menu[$mkey] );
        }
    }
    return $menu_order;
}

//Then just Hook that function to "menu_order"
add_filter( 'menu_order', 'remove_those_menu_items' );

