<?php 
/**
* 
*/
class Database
{
	
	protected static $connection;
	public function connect ()
	{
		$config=parse_ini_file('config.ini');
		self::$connection = new mysqli($config['host'],$config['user'],$config['password'],$config['database']);
		if ( self::$connection === false) {
			return false;
		}
		
		return self::$connection;
		
	}

	public function query($query) 
	{
		$connection = $this -> connect();
		$result = $connection ->query($query);
		return $result;
	}
	public function select($colms,$table,$condition='')
	{
		$rows = array();
		$query = "SELECT ".$colms;
		$query = $query." from ".$table." ".$condition;
		//echo $query;
		$result = $this ->query($query);
		//var_dump($result);
		if ($result === false) {
			return false;
		}
		while ($row = $result -> fetch_assoc()) {
			$rows[]= $row;
		}
		return $rows;
	}
}
 ?>