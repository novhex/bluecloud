<?php
/*
* BlueCloud PHP MVC
* Bluecloud is a simple PHP MVC app made using PHP
* MIT Licensed Project
* Copyright (c) 2017 Vhexzhen Lei
* vhexzhenlei.tk
*/
namespace View;

class View {

	private static $vars 		= array();
	private static $pageVars 	= array();

	public function __construct(){

		
	}

	public static function show($view, $vars=[], $http_headers = array()){

		if($vars != NULL) {

			foreach ($vars as $key => $value) 
			{
				self::$pageVars[$key] = $value;
			}
		}

		if(file_exists(ROOT_DIR .'views/'. $view .'.php')){

			if(sizeof($http_headers)>=1){

				foreach($http_headers as $header_keys =>$header_vals){

					header($header_keys.':'.$header_vals);
				}
			}



			extract(self::$pageVars);
			ob_start();
			require_once(ROOT_DIR .'views/'. $view .'.php');
			echo ob_get_clean();

		}else{
			 
            die('View file : '.'views/'. $view .'.php was not found');
			exit();

		}
	
	}

	private static function set_default_headers(){

	header("Content-Security-Policy:default-src 'self'; img-src 'self'; style-src 'self' 'unsafe-inline'; font-src 'self'; script-src 'self' 'unsafe-inline'; connect-src 'self'");
	header("X-Frame-Options:SAMEORIGIN");
	header("X-XSS-Protection:1; mode=block");

	}
}