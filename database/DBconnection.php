<?php
/*
* BlueCloud PHP MVC
* Bluecloud is a simple PHP MVC app made using PHP
* MIT Licensed Project
* Copyright (c) 2017 Kel Novi
* github.com/novhex
*/

namespace Database\DBConnection;

use \PDO;

/*
*------------------------------------------------------------------------------------------------------------
* In sqlite database type, provide the path of the database file and provide also set the $db_type to sqlite
* In mysql database type, the host,dbname,username,password are mandatory 
* Available options for $db_type:
*-------------------------------------------------------------------------------------------------------------
* public static $db_type = 'sqlite' [sqlite database]
* public static $db_type =  'mysql' [mysql database]
*--------------------------------------------------------------------------------------------------------------
*/

class DBConnection {

	public static $db;
	public static $host="127.0.0.1";
	public static $dbname="ajaxdb";
	public static $username="root";
	public static $password="";
	public static $db_type = "mysql";
	public static $charset = "utf8mb4";
	public static $dsn = "";
	public static $pdo_opt = array(PDO::ATTR_EMULATE_PREPARES => false,PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

}
