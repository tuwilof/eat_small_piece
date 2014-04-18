<?php
	require_once("../engine/connect.php");
	$id = $_GET['id'];
	$query = "DELETE FROM task WHERE id ='$id'";
	$res = mysql_query($query);
	header("Location: /index.php?page=pies");
?>