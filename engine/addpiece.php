<?php
	include('../engine/connect.php');
	$id = $_GET['id'];
	$n = $_GET['n'];
	for ($i = 0; $i < $n; $i++) {
		$array[] = $_POST['title'.$i];
	}
	//echo $text1." | ".$text2." | ".$text3." | ".$text4;
	$string = serialize($array);
	/*for ($i = 0; $i < count($array); $i++) {
		echo $array[$i]." ";
	}*/
	echo $string." ".$id;			
	$query = "UPDATE task SET subtasks = '$string' WHERE id ='$id'";
	$res = mysql_query($query);
	//mysql_close();
?>