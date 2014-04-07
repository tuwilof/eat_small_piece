<?php
	include('connect.php');
	$text = $_POST['title'];
	$type = $_POST['type'];
	echo $text;
	echo '|';
	echo $type;			
	$query = "INSERT INTO task (title,type) VALUES ('$text',$type)";
	$res = mysql_query($query);
	echo '|';
	echo $res;
	//mysql_close();
?>