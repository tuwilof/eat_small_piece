<?php
	require_once("../engine/connect.php");
	$id = $_GET['id'];
	$n = $_GET['n'];
	echo $n;
	for ($i = 0; $i < $n; $i++) {
			$array[] = array($_POST['title'.$i], $_POST['check'.$i]);
	}
	$string = serialize($array);
	//echo $string." ".$id;		
	$query = "UPDATE task SET subtasks = '$string' WHERE id ='$id'";
	$res = mysql_query($query);
	header("Location: /index.php?page=pies");
?>