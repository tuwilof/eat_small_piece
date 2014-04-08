<?php
	include('connect.php');
	$id = $_GET['id'];
	$text1 = $_POST['title1'];
	$text2 = $_POST['title2'];
	$text3 = $_POST['title3'];
	$text4 = $_POST['title4'];
	//echo $text1." | ".$text2." | ".$text3." | ".$text4;
	$array = array($text1,$text2,$text3,$text4);
	$string = serialize($array);
	/*for ($i = 0; $i < count($array); $i++) {
		echo $array[$i]." ";
	}*/
	echo $string." ".$id;			
	$query = "UPDATE task SET subtasks = '$string' WHERE id ='$id'";
	$res = mysql_query($query);
	//mysql_close();
?>