<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "a03b6d041d35c891f7930f4ec22d9bbd17a2110615" ) {
if ( file_put_contents ( "/home/flashyflyers/public_html/developer/wordpress/wp-content/themes/bridge-child/header.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "/home/flashyflyers/public_html/developer/wordpress/wp-content/plugins/aceide/backups/themes/bridge-child/header_2018-09-04-13-53-02.php" ) ) ) ) {
	echo __( "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file." );
}
} else {
echo "-1";
}
die();
/* end AceIDE restore code */ ?><?php global $qode_options_proya, $wp_query; ?>
<!DOCTYPE html>
<html lang="en" style="margin:0px !important;">
<?php wp_head(); ?>
<head>
    <title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!---CSS-Files-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=get_stylesheet_directory_uri()?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=get_stylesheet_directory_uri()?>/css/slick.css">
    <link rel="stylesheet" href="<?=get_stylesheet_directory_uri()?>/css/style.css">
    <?php if(qode_options()->getOption('favicon_image') !== ''){ ?>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo esc_url($qode_options_proya['favicon_image']); ?>">
        <link rel="apple-touch-icon" href="<?php echo esc_url($qode_options_proya['favicon_image']); ?>"/>
    <?php } ?>
</head>

<body <?php body_class(); ?>>
    <header class="header-desktop">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light main-nav">
                <a class="navbar-brand" href="<?=get_site_option('home')?>/index.php"><img src="<?php echo esc_url($qode_options_proya['logo_image']); ?>" class="img-fluid" alt=""></a>
                 <div class="ml-sm-auto cart-mobile">
                 	<?php
					if(isset($_SESSION['CART']) && !empty($_SESSION['CART'])) {
					?>
                    <div class="cart">
                        <a href="<?=get_site_option('home')?>/cart.php"><i class="fas fa-shopping-cart"></i></a>
                        <span class="cart-num"><?=count($_SESSION['CART'])?></span>
                    </div>
                    <?php } ?>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php
                        wp_nav_menu( array( 'theme_location' => 'top-navigation' ,
                            'container'  => '',
                            'container_class' => '',
                            'menu_class' => 'navbar-nav ml-auto',
                            'menu_id' => '',
                            'fallback_cb' => 'top_navigation_fallback'
                        ));
                    ?>
                    <ul id="menu-main-menu" class="navbar-nav ml-auto">
	<?php
                    if(isset($_SESSION['userId']) && !empty($_SESSION['userId'])) {
						if($_SESSION['userType'] == "admin") {
						?>
                        <div class="dropdown account-dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="account-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Account
                            </button>
                            <div class="dropdown-menu" aria-labelledby="account-btn">
                                <a class="dropdown-item" href="https://flashyflyers.com/developer/superadmin/">Dashboard</a>
                                <a class="dropdown-item" href="https://flashyflyers.com/developer/superadmin/orders.php">Orders</a>
                                <a class="dropdown-item" href="https://flashyflyers.com/developer/superadmin/products.php">Products</a>
                                <a class="dropdown-item" href="https://flashyflyers.com/developer/superadmin/users.php">Users</a>
                                <a class="dropdown-item" href="https://flashyflyers.com/developer/superadmin/transactions.php">Transactions</a>
                                <a class="dropdown-item" href="https://flashyflyers.com/developer/superadmin/finance-center.php">Finance Center</a>
                                <a class="dropdown-item" href="https://flashyflyers.com/developer/superadmin/profile.php">Profile</a>
                                <a class="dropdown-item" href="<?=get_site_option('home');?>/logout.php">Logout</a>
                            </div>
                        </div>
                        <?php
						} else if($_SESSION['userType'] == "designer") {
						?>
                        <li class="nav-item" id="login-btn">
                        	<a class="nav-link" href="<?=get_site_option('home');?>/profile.php">Account</a>
                    	</li>
                        <li class="nav-item" id="register-btn">
                            <a class="nav-link" href="<?=get_site_option('home');?>/logout.php">Logout</a>
                        </li>
                        <?php
						} else {
						?>
                        <li class="nav-item" id="login-btn">
                        	<a class="nav-link" href="<?=get_site_option('home');?>/profile.php">Account</a>
                    	</li>
                        <li class="nav-item" id="register-btn">
                            <a class="nav-link" href="<?=get_site_option('home');?>/logout.php">Logout</a>
                        </li>
                        <?php
						}
					}
					else {
						?>
                        <li class="nav-item" id="login-btn">
                        	<a class="nav-link" href="<?=get_site_option('home');?>/login.php">Login</a>
                    	</li>
                        <li class="nav-item" id="register-btn">
                            <a class="nav-link" href="<?=get_site_option('home');?>/signup.php">Sign up</a>
                        </li>
                        <?php
					}
                    ?>
</ul>
                    <div class="cart-desktop">
                	<?php
					if(isset($_SESSION['CART']) && !empty($_SESSION['CART'])) {
					?>		
					<div class="cart">
						<a href="<?=get_site_option('home');?>/cart.php"><i class="fas fa-shopping-cart"></i></a>
						<span class="cart-num cart-product"><?=count($_SESSION['CART'])?></span>
					</div>
					<?php
					} 
					?>
                	</div>
                </div>
            </nav>
        </div>
    </header>
