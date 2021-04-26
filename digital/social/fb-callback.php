<?php
ob_start();
require_once '../function/constants.php';
require_once '../function/configClass.php';
require_once '../function/siteFunctions.php';

require_once __DIR__ . '/facebook/vendor/autoload.php'; // change path as needed

if(!session_id()) {
    session_start();
}

$fb = new \Facebook\Facebook([
  'app_id' => FACEBOOK_APP_ID,
  'app_secret' => FACEBOOK_APP_SECRET,
  'default_graph_version' => 'v3.1'
]);

$helper = $fb->getRedirectLoginHelper();

try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  $_SESSION['ERROR'] = 'Graph returned an error: ' . $e->getMessage();
  //exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  $_SESSION['ERROR'] = 'Facebook SDK returned an error: ' . $e->getMessage();
  //exit;
}

if (! isset($accessToken)) {
  if ($helper->getError()) {
    header('HTTP/1.0 401 Unauthorized');
    /*echo "Error: " . $helper->getError() . "\n";
    echo "Error Code: " . $helper->getErrorCode() . "\n";
    echo "Error Reason: " . $helper->getErrorReason() . "\n";
    echo "Error Description: " . $helper->getErrorDescription() . "\n";*/
	$_SESSION['ERROR'] = "Error: " . $helper->getError();
  } else {
    header('HTTP/1.0 400 Bad Request');
    echo 'Bad request';
  }
  exit;
}

// Logged in
/*echo '<h3>Access Token</h3>';
var_dump($accessToken->getValue());*/

// The OAuth 2.0 client handler helps us manage access tokens
$oAuth2Client = $fb->getOAuth2Client();

// Get the access token metadata from /debug_token
$tokenMetadata = $oAuth2Client->debugToken($accessToken);

/*var_dump($tokenMetadata);
echo '<pre>';
print_r($tokenMetadata);*/
//get required data
$response = $fb->get('/me?fields=id,name,email,first_name,last_name,picture,link', $accessToken->getValue());

// Get the response typed as a GraphUser
$userData = $response->getGraphUser()->asArray();
	
	if(!empty($userData)){
		//Check whether user data already exists in database
		
		$prevQuery = "oauth_provider = 'facebook' AND oauth_uid = '".$userData['id']."'";
		$profileImage = "http://graph.facebook.com/".$userData['id']."/picture?width=9999";
		if(GetNumOfRcrdsOnCndi(USERS,$prevQuery)>0){
			//Update user data if already exists
			UpdateRcrdOnCndi(USERS,"FName = '".$userData['first_name']."', LName = '".$userData['last_name']."', Email = '".$userData['email']."'", "oauth_provider = 'facebook' AND oauth_uid = '".$userData['id']."'");
			unset($_SESSION['SUCCESS']);
			$getData = GetSglRcrdOnCndi(USERS,$prevQuery);
			$_SESSION['userId'] = $getData['UserID'];
			$_SESSION['userType'] = "user";
			$_SESSION['loginType']="user";
			$fileName = "../uploads/profileImages/profile_image_".$getData['UserID'].".jpg";
			grab_image($profileImage,$fileName);
			UpdateRcrdOnCndi(USERS, "ProfilePhoto = '$imageName'", "UserID = '".$getData['UserID']."'");
			unset($_SESSION['SUCCESS']);
		}else{
			$prevQuery2 = "Email = '".$userData['email']."'";
		
			if(GetNumOfRcrdsOnCndi(USERS,$prevQuery2)>0){
				//Update user data if already exists
				UpdateRcrdOnCndi(USERS,"FName = '".$userData['first_name']."', LName = '".$userData['last_name']."', oauth_provider = 'facebook', oauth_uid = '".$userData['id']."'", "Email = '".$userData['email']."'");
				unset($_SESSION['SUCCESS']);
				$getData = GetSglRcrdOnCndi(USERS,$prevQuery);
				$_SESSION['userId'] = $getData['UserID'];
				$_SESSION['userType'] = "user";
				$_SESSION['loginType']="user";
				$fileName = "../uploads/profileImages/profile_image_".$getData['UserID'].".jpg";
				
				grab_image($profileImage,$fileName);
				UpdateRcrdOnCndi(USERS, "ProfilePhoto = '$imageName'", "UserID = '".$getData['UserID']."'");
				unset($_SESSION['SUCCESS']);
			}else{
				$password = rand();
				//Insert user data
				
				
				$fn = array("UserType", "Email", "Password", "CreatedDate", "CreatedOn", "Status","FName","LName","oauth_uid","oauth_provider");
				$fv = array("user", $userData['email'], base64_encode($password), time(), date("Y-m-d H:i:s"), 'active',$userData['first_name'],$userData['last_name'],$userData['id'],'facebook');
				$userID = InsertRcrdsGetID($fn,$fv,USERS);
			
				
				$curl = curl_init();
			// Set some options - we are passing in a useragent too here
			curl_setopt_array($curl, array(
				CURLOPT_RETURNTRANSFER => 1,
				CURLOPT_URL => SITEURL.'EmailTemplate/welcome.php?UID='.$userID,
				CURLOPT_USERAGENT => 'Curl Test'
			));
			// Send the request & save response to $resp
			$resp = curl_exec($curl);
			// Close request to clear up some resources
			curl_close($curl);
			
			$mailchimp=syncMailchimp($userData['email'],MAILCHIMP_API_KEY,MAILCHIMP_LIST_ID,$userData['first_name'],$userData['last_name']);
			$status = "success";
			$_SESSION['userId'] = $userID;
			$_SESSION['userType'] = "user";
			$_SESSION['loginType']="user";
				
				
				$getData = GetSglRcrdOnCndi(USERS,$prevQuery);
				$_SESSION['userId'] = $getData['UserID'];
				$_SESSION['userType'] = "user";
				$fileName = "../uploads/profileImages/profile_image_".$getData['UserID'].".jpg";
				grab_image($profileImage,$fileName);
				UpdateRcrdOnCndi(USERS, "ProfilePhoto = '$imageName'", "UserID = '".$getData['UserID']."'");
				unset($_SESSION['SUCCESS']);
				
			}
		}
	}
	





// Validation (these will throw FacebookSDKException's when they fail)
$tokenMetadata->validateAppId(FACEBOOK_APP_ID); // Replace {app-id} with your app id
// If you know the user ID this access token belongs to, you can validate it here
//$tokenMetadata->validateUserId('123');
$tokenMetadata->validateExpiration();

if (! $accessToken->isLongLived()) {
  // Exchanges a short-lived access token for a long-lived one
  try {
    $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
  } catch (Facebook\Exceptions\FacebookSDKException $e) {
    /*echo "<p>Error getting long-lived access token: " . $e->getMessage() . "</p>\n\n";
    exit;*/
	$_SESSION['ERROR'] = "Error getting long-lived access token: " . $e->getMessage();
  }

  /*echo '<h3>Long-lived</h3>';
  var_dump($accessToken->getValue());*/
}

$_SESSION['fb_access_token'] = (string) $accessToken;

// User is logged in with a long-lived access token.
// You can redirect them to a members-only page.
//header('Location: https://example.com/members.php');
if(isset($_SESSION['REQ_SESS']) && $_SESSION['REQ_SESS'] == "checkout") {
	header('Location:'.SITEURL.'info.php');
	exit();
} else {
	header('Location:'.SITEURL.'login.php');
	exit();
}
?>