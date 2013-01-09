<?php
class controller_multipoint
{	
	function test()
	{
		$test = stripslashes(isset($_POST["value"])? trim($_POST["value"]) : 'shit');
		$db = new DB();
		$citys = $db->exeSql($test);
		echo 成功;
	}
	//multipoint页面默认
	function multipoint(){
		$cities = "";
		$tb = "";
		$ms = "";
		//实例化数据库操作
		$ms = getSingleton('model_multipoint');
		//初始化城市
		$tb = city;
		$cities = $ms->search_tb($tb);
		include(DIR.'/view/multipoint.php');
	}
	
	function search(){
		$city_id = "";
		$info = isset($_GET['info'])?$_GET['info']:-1;
		$ms = getSingleton('model_multipoint');
		$cities = $ms->search_tb(city);
		foreach($cities as $city){
			if($city[city_name] == $info){
				$city_id = $city[city_id];
			}
		}
		var_dump($city_id);
		$routes = $ms->search_dt(route,city_id,$city_id);
		var_dump($routes);
		foreach($routes as $route){
			$stations = $ms->search_dt(station,station_id,$route[route_id]);
		}
		var_dump($stations);
		exit;
	}
	
	function se_order()
	{
		
	}
	
	function se_unorder()
	{
		
	}
}
?>