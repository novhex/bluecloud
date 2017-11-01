<?php

namespace Plugins;


class Facebook_login {

	private static $callback_url;
	private static $login_url;
	private static $fb_user_info;


	public function __construct(){


	}

	public static function set_callbackUrl($callback_url){

		self::$callback_url = $callback_url;
	}

	public static function get_callbackUrl(){

		return self::$callback_url;
	}

	public static  function connect(){

		
		$fbPermissions = array('email');  //Optional permissions


		$fb = new \Facebook\Facebook([

		  'app_id' => 		get_config_value('fb_app_id'),
		  'app_secret' => 	get_config_value('fb_app_secret'),
		  'default_graph_version' => 'v2.9',
		  'default_access_token' => get_config_value('fb_app_access_token'),

		]);


				// Get redirect login helper
		$helper = $fb->getRedirectLoginHelper();

		// Try to get access token

		if (get_data('get','state')) {
    		$helper->getPersistentDataHandler()->set('state', get_data('get','state'));
		}


		try {
		    if(get_sessiondata('facebook_access_token')){
		        $accessToken = get_sessiondata('facebook_access_token');
		    }else{
		          $accessToken = $helper->getAccessToken();
		    }
		} catch(FacebookResponseException $e) {
		     echo 'Graph returned an error: ' . $e->getMessage();
		      exit;
		} catch(FacebookSDKException $e) {
		    echo 'Facebook SDK returned an error: ' . $e->getMessage();
		      exit;
		}

		if(isset($accessToken)){

		    if(get_sessiondata('facebook_access_token')){
		        $fb->setDefaultAccessToken(get_sessiondata('facebook_access_token'));
		    }else{
		        // Put short-lived access token in session
		       set_session('facebook_access_token',(string) $accessToken);
		        
		          // OAuth 2.0 client handler helps to manage access tokens
		        $oAuth2Client = $fb->getOAuth2Client();
		        
		        // Exchanges a short-lived access token for a long-lived one
		        $longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken(get_sessiondata('facebook_access_token'));
		       	set_session('facebook_access_token',(string) $longLivedAccessToken);
		        
		        // Set default access token to be used in script
		        $fb->setDefaultAccessToken(get_sessiondata('facebook_access_token'));
		 }
    
	    // Redirect the user back to the same page if url has "code" parameter in query string
	    if(get_data('get','code')){

	        redirect(self::get_callbackUrl());
	    }
	    
	    // Getting user facebook profile info
	    try {

	        $profileRequest = $fb->get('/me?fields=name,first_name,last_name,email,link,gender,locale,picture');
	        $fbUserProfile = $profileRequest->getGraphNode()->asArray();

	    } catch(FacebookResponseException $e) {

	        echo 'Graph returned an error: ' . $e->getMessage();
	        session_destroy();
	        // Redirect user back to app login page
	        redirect(self::get_loginUrl());

	        exit;
	    } catch(FacebookSDKException $e) {
	        echo 'Facebook SDK returned an error: ' . $e->getMessage();
	        exit;
	    }




	   self::$fb_user_info = array(
	        'oauth_provider'=> 'facebook',
	        'oauth_uid'     => $fbUserProfile['id'],
	        'first_name'    => $fbUserProfile['first_name'],
	        'last_name'     => $fbUserProfile['last_name'],
	        'email'         => isset($fbUserProfile['email']) ? $fbUserProfile['email'] : '',
	        'gender'        => isset($fbUserProfile['gender']) ? $fbUserProfile['gender'] : '',
	        'locale'        => isset($fbUserProfile['locale']) ? $fbUserProfile['locale'] : '',
	        'picture'       => $fbUserProfile['picture']['url'],
	        'link'          => isset($fbUserProfile['link']) ? $fbUserProfile['link'] : '',
	    );

    	
    
	}else{


    
		 	$loginURL = $helper->getLoginUrl(self::get_callbackUrl(), $fbPermissions);
		    self::$login_url = htmlspecialchars($loginURL);
		    
	}

	}

	public static function isLogged(){

		if(sizeof(self::$fb_user_info)>=1){

			return TRUE;

		}else{

			return FALSE;
		}

	}

	public static function get_fbloginURL(){

			return self::$login_url;
	}

	public static function getLoggedUserInfo(){

		return self::$fb_user_info;
	}
}