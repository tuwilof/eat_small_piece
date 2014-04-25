<?php
	require_once("../engine/connect.php");
	$result = mysql_query("SELECT * FROM task");
	$data = array();
	while(($item = mysql_fetch_array($result))!=false):
		$data[] = array($item['id'],0);
	endwhile;
	print_r($data);
	$string = serialize($data);
	$query = "INSERT INTO getsubtask (taken) VALUES ('$string')";
	$res = mysql_query($query);
	header("Location: /index.php?page=getsubtask");
?>