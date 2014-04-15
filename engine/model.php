<?php
	function methodName()
	{
		$result = mysql_query("SELECT * FROM task");
		$data = array();
		while(($item = mysql_fetch_array($result))!=false):
			$data[] = array($item['id'],$item['title']);
		endwhile;
		return $data; 
	}
	$data = methodName();
?>