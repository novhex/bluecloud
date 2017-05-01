<?php


/*
* BlueCloud PHP MVC
* Bluecloud is a simple PHP MVC app made using PHP
* MIT Licensed Project
* Copyright (c) 2017 Vhexzhen Lei
* vhexzhenlei.tk
*/



namespace Routes;


class Routes {

	private static $routes = array
	(
	
	'GET|/|Controllers\home@index'

	);

	

	public static function routeList(){

		return self::$routes;
	}

}

