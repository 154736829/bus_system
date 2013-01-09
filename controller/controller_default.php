<?php
class controller_default
{	
	/*
	* 默认页面
	*/
	function index()
	{
		$city = '';
		$route = '';
		$startStation = '';
		$endStation = '';
		include(DIR . '/view/index.php');
	}
}
?>