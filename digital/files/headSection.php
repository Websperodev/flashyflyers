<?php /* ?><title><?=$PageTitle;?> | Flashy Flyers</title> <?php */ ?>
<meta name="p:domain_verify" content="fc1748bd0fa875c0a01b377810aed73b"/>  
<meta name="keywords" content="" />
<!--<meta name="description" content="" /> -->
<link rel="icon" href="<?=SITEURL;?>images/favicon.ico">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="stylesheet" href="<?=SITEURL;?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?=SITEURL;?>css/fontello.css">
<link rel="stylesheet" href="<?=SITEURL;?>css/slick.css">
<link rel="stylesheet" href="<?=SITEURL;?>css/plyr.css">
<link rel="stylesheet" href="<?=SITEURL;?>css/style.css?v232125">

<script src="<?=SITEURL;?>js/jquery.js"></script>
<script defer="defer" src="<?=SITEURL;?>plugins/sweetalert2/sweetalert2.js"></script>
<link rel="stylesheet" href="<?=SITEURL;?>plugins/sweetalert2/sweetalert2.css">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124007293-1"></script>
<script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'UA-124007293-1'); </script>
<script> function gtag_report_conversion(url) { var callback = function () { if (typeof(url) != 'undefined') { window.location = url; } }; gtag('event', 'conversion', { 'send_to': 'AW-123211233/A0WLCJKb6JkBEMv-k-YC', 'event_callback': callback }); return false; } </script>


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
<?php
$uri = $_SERVER['REQUEST_URI'];
if($uri != '/'){
	?>
	<link rel="canonical" href="https://www.flashyflyers.com<?php echo $uri;  ?>" />
	<?php
}
?>
