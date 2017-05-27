<?php

/*
* BlueCloud PHP MVC
* Bluecloud is a simple PHP MVC app made using PHP
* MIT Licensed Project
* Copyright (c) 2017 Vhexzhen Lei
* vhexzhenlei.tk
*/


namespace Controllers;

use Controller\Controller;

use View\View;



class Home extends Controller{

	public function __construct(){
		
		parent::__construct();
	}


	public function index(){

		$page_data = array('page_title'=>'BlueCloud PHP MVC &middot; Default Page');
		View::show('default',$page_data);
		View::show('footer',$page_data);
		
	}

	
}
