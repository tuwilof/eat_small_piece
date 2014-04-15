<?php
	require_once("../engine/connect.php");
	$id = $_GET['id'];
	$n = $_GET['n'];
	for ($i = 0; $i < $n; $i++) {
		$array[] = $_POST['title'.$i];
	}
	$string = serialize($array);
	echo $string." ".$id;			
	$query = "UPDATE task SET subtasks = '$string' WHERE id ='$id'";
	$res = mysql_query($query);
?>