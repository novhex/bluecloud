<?php

// Namespace for Controller -Important
namespace controllers;

// namespace for controller -Important
use \Core\Controller\Controller;
//namespace for views - Important
use \Core\View\View;




class Home extends Controller{

	public function __construct(){
		//don't forget this construct
		parent::__construct();
	}


	public function index(){

		$data['page_title'] = 'Welcome - BlueCloud &ndash; Another Micro PHP MVC ';
		View::show('default',$data);
		
	}

	
}
