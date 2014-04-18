<?php
	require_once("../engine/connect.php");
	$text = $_POST['title'];
	echo $text;
	echo '|';
	echo $type;			
	$query = "INSERT INTO task (title) VALUES ('$text')";
	$res = mysql_query($query);
	echo '|';
	echo $res;
	header("Location: /index.php?page=pies");
	//mysql_close();
?>