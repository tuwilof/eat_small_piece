<?php
	require_once("../engine/connect.php");
	$result = mysql_query("SELECT * FROM getsubtask ORDER BY id DESC LIMIT 1");
	$item = mysql_fetch_array($result);
	$string = $item['taken'];
	$array = unserialize( $string );
	//idTask, title, idSubtask
	for ($i = 0; $i < count($array); $i++) {
		$idTask = $array[$i][0];
		$idSubtask = $array[$i][2];
		//echo $idTask." ".$idSubtask."<br />";

		$result = mysql_query("SELECT * FROM task WHERE id ='$idTask'");
		$item = mysql_fetch_array($result);
		$stringTwo = $item['subtasks'];
		$taken = unserialize( $stringTwo );
		echo "было:".$taken[$idSubtask][1]."    стало:".$_POST['check'.$i]."<br />";
		$taken[$idSubtask][1] = $_POST['check'.$i];

		$stringThree = serialize($taken);
		$query = "UPDATE task SET subtasks = '$stringThree' WHERE id ='$idTask'";
		$res = mysql_query($query);
	}

	header("Location: /index.php?page=getsubtask");
?>