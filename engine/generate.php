<?php
	require_once("../engine/connect.php");
	$result = mysql_query("SELECT * FROM task");
	$data = array();
	while(($item = mysql_fetch_array($result))!=false){
		$id = $item['id'];
		$title = $item['title'];
		$resultTwo = mysql_query("SELECT * FROM task WHERE id ='$id'");
		$itemTwo = mysql_fetch_array($resultTwo);
		$string = $itemTwo['subtasks'];
		$taken = unserialize( $string );//массив под задач
		$subtaskId = "null";
		$subtask = "null";
		//echo "count = ".count($taken)."<br />";
		for ($j = 1; $j < count($taken); $j++) {
			if ($taken[$j][1] == 0) {
				$subtaskId = $j;
				$subtask = $taken[$j][0];
				break;
			}
			else if ($j == count($taken) - 1) {
				$datep = date("Y-m-d H:i:s");
				$query = "INSERT INTO performed (title,datep) VALUES ('$title','$datep')";
				$res = mysql_query($query);
				$query = "DELETE FROM task WHERE id ='$id'";
				$res = mysql_query($query);
			}
		}
		$data[] = array($id,$subtask,$subtaskId);
		//echo $id." "." ".$subtask." [".$subtaskId."]<br />";
	}
	$string = serialize($data);
	$query = "INSERT INTO getsubtask (taken) VALUES ('$string')";
	$res = mysql_query($query);
	header("Location: /index.php?page=getsubtask");
?>