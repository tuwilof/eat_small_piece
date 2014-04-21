<?php
	require_once("../engine/connect.php");
	$id = $_GET['id'];
	$n = $_GET['n'];
	echo $n;
	for ($i = 0; $i < $n; $i++) {
		/*if ($_POST['check'.$i] == true) {
			$array[] = array($_POST['title'.$i], checked);
		} else {
			$array[] = array($_POST['title'.$i], '');
		}*/
		if (!empty($_POST['check'.$i])) {
    		echo "1";
		} else {
			echo "0";
		}
	}
	$string = serialize($array);
	//echo $string." ".$id;		
	$query = "UPDATE task SET subtasks = '$string' WHERE id ='$id'";
	$res = mysql_query($query);
	//header("Location: /index.php?page=pies");
?>