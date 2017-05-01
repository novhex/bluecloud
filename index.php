<?php

/*
* BlueCloud PHP MVC
* Bluecloud is a simple PHP MVC app made using PHP
* MIT Licensed Project
* Copyright (c) 2017 Vhexzhen Lei
* vhexzhenlei.tk
*/

session_start();

define('ROOT_DIR', 	realpath(dirname(__FILE__)) .'/');

define('CORE_DIR',ROOT_DIR.'core');

require_once ROOT_DIR.'vendor/autoload.php';

$app = new Bootstrap();

$app::runApp();



