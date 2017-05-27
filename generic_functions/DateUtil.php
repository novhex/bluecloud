<?php

	/*
	* BlueCloud PHP MVC
	* Bluecloud is a simple PHP MVC app made using PHP
	* MIT Licensed Project
	* Copyright (c) 2017 Vhexzhen Lei
	* vhexzhenlei.tk
	*/

	/*
	* Date Util  of BlueCloud
	* Do not delete this file or modify the contents of it unless you know what you are doing!
	*/


	/*
	* List of dates between two dates
	* Example 2016-08-18 to 2016-08-21
	* Outputs: array(2016-08-19,2016-08-20)
	*/
	function datelist_between_dates($start_date,$end_date){

	    $array_of_dates=array();

	    $iDateFrom = mktime(1,0,0,substr($start_date,5,2),   substr($start_date,8,2),substr($start_date,0,4));
	    $iDateTo   = mktime(1,0,0,substr($end_date,5,2),     substr($end_date,8,2),substr($end_date,0,4));

	    if ($iDateTo>=$iDateFrom){

	        array_push($array_of_dates,date('Y-m-d',$iDateFrom));

	        while ($iDateFrom<$iDateTo){
	            $iDateFrom+=86400;
	            array_push($array_of_dates,date('Y-m-d',$iDateFrom));
	        }
	    }

	    return $array_of_dates;
	}

	

	/*
	* Converts date(Y-m-d) to words
	* Example 2016-08-18
	* Outputs: Fri August 18 , 2016
	*/
	function date_to_words($date){
		return date('D F j ,Y',strtotime($date));
	}



	/*
	* Subtract $no_of_days from the $start_date:
	* Example: Subtract 40 days from the 15th of March, 2013:
	* Outputs: 2013-02-03
	* param: date(Y-m-d) format for $start_date , int($no_of_days)
	*/
	function subtract_days_from_date($start_date,$no_of_days){

		$result_date=date_create($start_date);
		date_sub($result_date,date_interval_create_from_date_string($no_of_days." days"));
		return date_format($result_date,"Y-m-d");
	}


	/*
	* Subtract 2 dates from $start_date given up to $end_date given
	* Example: 2015-08-18 - 2016-08-18
	* Outputs: +366 days ago
	* param: date(Y-m-d) format for $start_date , date(Y-m-d) format for $end_date
	*/
	function subtract_date($start_date,$end_date){

		$date1= date_create($start_date);
		$date2= date_create($end_date);
		$diff= date_diff($date1,$date2);
		return $diff->format("%R%a days ago");

	}