<?php
require_once '../function/constants.php';
require_once __DIR__ . '/facebook/vendor/autoload.php'; // change path as needed

if(!session_id()) {
    session_start();
}

if(isset($_REQUEST['request']) && !empty($_REQUEST['request'])) {
	if($_REQUEST['request'] == "checkout") {
		$_SESSION['REQ_SESS'] = "checkout";	
	} else if($_REQUEST['request'] == "login") {
		$_SESSION['REQ_SESS'] = "login";	
	}
}

$fb = new \Facebook\Facebook([
  'app_id' => FACEBOOK_APP_ID,
  'app_secret' => FACEBOOK_APP_SECRET,
  'default_graph_version' => 'v3.1'
]);


$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl(SITEURL.'social/fb-callback.php', $permissions);

header("location:".$loginUrl);
exit();
?>