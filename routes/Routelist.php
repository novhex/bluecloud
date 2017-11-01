<?php


/*
* BlueCloud PHP MVC
* Bluecloud is a simple PHP MVC app made using PHP
* MIT Licensed Project
* Copyright (c) 2017 Kel Novi
* github.com/novhex
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

