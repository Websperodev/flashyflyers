<?php global $qode_options_proya, $wp_query;
session_start();

 ?>
<!DOCTYPE html>
<html lang="en" style="margin:0px !important;">

<head>
   <?php wp_head(); ?>
    <meta name="p:domain_verify" content="fc1748bd0fa875c0a01b377810aed73b"/>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!---CSS-Files-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=get_stylesheet_directory_uri()?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=get_stylesheet_directory_uri()?>/css/slick.css">
    <link rel="stylesheet" href="<?=get_stylesheet_directory_uri()?>/css/style.css?v=18">
    <?php if(qode_options()->getOption('favicon_image') !== ''){ ?>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo esc_url($qode_options_proya['favicon_image']); ?>">
        <link rel="apple-touch-icon" href="<?php echo esc_url($qode_options_proya['favicon_image']); ?>"/>
    <?php } ?>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124007293-1"></script> 
	<script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'UA-124007293-1'); </script>	
	<script> function gtag_report_conversion(url) { var callback = function () { if (typeof(url) != 'undefined') { window.location = url; } }; gtag('event', 'conversion', { 'send_to': 'AW-751107915/A0WLCJKb6JkBEMv-k-YC', 'event_callback': callback }); return false; } </script>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '425703451370470'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=425703451370470&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v6.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="192636631560589"
  theme_color="#ff7e29"
  logged_in_greeting="Hi! How can we help you?"
  logged_out_greeting="Hi! How can we help you?">
      </div>
      
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Flashy Flyers",
  "url": "https://www.flashyflyers.com/",
  "logo": "https://www.flashyflyers.com/images/logo.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "(919) 438-0035",
    "contactType": "customer service"
  },
  "sameAs": [
    "https://www.facebook.com/FlashyFlyers",
    "https://www.instagram.com/flashyflyers/",
    "https://www.pinterest.com/flashyflyers/"
  ]
}
</script>
</head>

<body <?php body_class(); ?>>
    <header class="header-desktop">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light main-nav">
                <a class="navbar-brand" href="<?=get_site_option('home')?>/index.php"><img src="<?php echo esc_url($qode_options_proya['logo_image']); ?>" class="img-fluid" alt=""></a>
                 <div class="ml-sm-auto cart-mobile">
                 	<?php
					if(isset($_SESSION['CART']) && !empty($_SESSION['CART'])) {
						
						 $cartPro = $_SESSION['CART'];
                $totalCart  = 0;
					foreach($cartPro as $key => $product ) {
						if($product['type'] != "main") { continue; }
						$totalCart += 1;
					}
					?>
                    <div class="cart">
                        <a href="<?=get_site_option('home')?>/cart.php"><i class="fas fa-shopping-cart"></i></a>
                        <span class="cart-num"><?=$totalCart?></span>
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
                                <a class="dropdown-item" href="<?=home_url('/');?>superadmin/">Dashboard</a>
                                <a class="dropdown-item" href="<?=home_url('/');?>superadmin/orders.php">Orders</a>
                               
                                <a class="dropdown-item" href="<?=home_url('/');?>superadmin/products.php">View products</a>
                                
                                <a class="dropdown-item" href="<?=home_url('/');?>superadmin/discount.php">Discount Codes</a>
                                <a class="dropdown-item" href="<?=home_url('/');?>superadmin/users.php">Users</a>
                                <a class="dropdown-item" href="<?=home_url('/');?>superadmin/finance-center.php">Finance Center</a>
                                <a class="dropdown-item" href="<?=home_url('/');?>superadmin/setting-variables.php">Settings</a>
                                
                                <a class="dropdown-item" href="<?=home_url('/');?>superadmin/profile.php">Profile</a>
                                <a class="dropdown-item" href="<?=home_url('/');?>logout.php">Logout</a>
                            </div>
                        </div>
                        <?php
						} else if($_SESSION['userType'] == "designer") {
						?>
                        <div class="dropdown account-dropdown">
                        	<button class="btn btn-secondary dropdown-toggle" type="button" id="account-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Account
                            </button>
                            <div class="dropdown-menu" aria-labelledby="account-btn">
                                <a class="dropdown-item" href="<?=get_site_option('home');?>/my-work.php">My Work</a> 
                                   <a class="dropdown-item" href="<?=home_url('/');?>superadmin/products.php">View products</a>
                                <a class="dropdown-item" href="<?=get_site_option('home');?>/profile.php">Profile</a>
                                <a class="dropdown-item" href="<?=get_site_option('home');?>/logout.php">Logout</a>
                            </div>
                    	</div>
                        <?php
						} else {
						?>
                        <div class="dropdown account-dropdown">
                        	<button class="btn btn-secondary dropdown-toggle" type="button" id="account-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Account
                            </button>
                            <div class="dropdown-menu" aria-labelledby="account-btn">
                            <?php if( $_SESSION['userType']!="sale_rep"){ ?>
                             <a class="dropdown-item" href="<?=get_site_option('home');?>/my-bookmarks.php">My Bookmarks</a>
                                <a class="dropdown-item" href="<?=get_site_option('home');?>/my-orders.php"  >My Orders</a>
                                 
                                <?php } ?>
                                <?php if( $_SESSION['userType']=="sale_rep"){ ?>
                                <a class="dropdown-item" href="<?=home_url('/');?>superadmin/orders.php">Orders</a>
                                <a class="dropdown-item" href="<?=home_url('/');?>superadmin/discount.php">Discount Codes</a>
                                <a class="dropdown-item" href="<?=home_url('/');?>superadmin/users.php">Users</a>
                                
                                 <?php } ?>
                                <a class="dropdown-item" href="<?=get_site_option('home');?>/profile.php" >Profile</a>
                                <a class="dropdown-item" href="<?=get_site_option('home');?>/logout.php" >Logout</a>
                            </div>
                    	</div>
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
						<span class="cart-num cart-product"><?=$totalCart?></span>
					</div>
					<?php
					} 
					?>
                	</div>
                </div>
            </nav>
        </div>
    </header>
