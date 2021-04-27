<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "0e907b4f514a5043122d461c5961c913d429483ec1" ) {
if ( file_put_contents ( "/home/flashyflyers/public_html/developer/wordpress/wp-content/themes/bridge-child/header.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "/home/flashyflyers/public_html/developer/wordpress/wp-content/plugins/aceide/backups/themes/bridge-child/header_2018-08-30-05-32-23.php" ) ) ) ) {
	echo __( "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file." );
}
} else {
echo "-1";
}
die();
/* end AceIDE restore code */ ?><?php global $qode_options_proya, $wp_query; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog | Flashy Flyers</title>
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

<body>
<?=qode_options();?>
    <header class="header-desktop">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light main-nav">
                <a class="navbar-brand" href="index.html">
                    <?php
                    qode_get_logo(array(
        				'logo_image' => true
                    ));
                    ?>
                </a>
                 <div class="ml-sm-auto cart-mobile">
                    <div class="cart">
                        <a href="cart.html"><i class="fas fa-shopping-cart"></i></a>
                        <span class="cart-num">4</span>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Flyer Templates</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact us</a>
                        </li>
                        <li class="nav-item" id="login-btn">
                            <a class="nav-link" href="login.html">Login</a>
                        </li>
                        <li class="nav-item" id="register-btn">
                            <a class="nav-link" href="signup.html">Sign up</a>
                        </li>
                    </ul>
                    <div class="cart-desktop">
                        <div class="cart">
                            <a href="cart.html"><i class="fas fa-shopping-cart"></i></a>
                            <span class="cart-num">4</span>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
