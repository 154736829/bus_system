<?php
	class model_multipoint
	{
		/**
		 *$db 数据库
		 */
		var $db;
		
		/**
		 *构造函数
		 */
		function model_multipoint()
		{
			global $db;
			$this->db = $db;
		}
		/**
		 *查询表的所有数据
		 *
		 *$tb 数据表
		 */
		function search_tb($tb)
		{
			$sqlStr = "select * from $tb";
			return $this->db->select($sqlStr);
		}
		/**
		 *根据一项数据查询ID
		 *
		 *$tb 数据表，$dc 数据列名，$dt 数据
		 */
		function search_dt($tb,$dc,$dt)
		{
			$sqlStr = "select * from $tb where $dc = $dt";
			return $this->db->select($sqlStr);
		}
		
		/**
		 *查询所有站点名称
		 *
		 *$tb 数据表
		 */
		function search_station($city_name)
		{
			$sqlStr = "select station_name from $tb";
			return $this->db->select($sqlStr);
		}
	}
?>