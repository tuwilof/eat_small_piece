<?php
	header('Content-Type: text/html; charset=utf-8');
	
function methodName()
{
	$res = mysql_connect('localhost','root','vagrant') or die("Could not connect: " . mysql_error());
	mysql_select_db('esp', $res) or die("Could not select DB: " . mysql_error());
	mysql_query('SET NAMES utf8');	

	$result = mysql_query("SELECT * FROM task");
	$data = array();
	while(($item = mysql_fetch_array($result))!=false):
		$data[] = array($item['id'],$item['title']);
	endwhile;
	return $data; 
}

$data = methodName();
	foreach ($data as $row) {
		echo $row[0]." ".$row[1]."<br />";
	}

?>