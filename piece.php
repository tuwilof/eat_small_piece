<?php
	include('connect.php');
	if(isset($_GET['id'])) {
		$id = $_GET['id'];
		$result = mysql_query("SELECT * FROM subtasks WHERE id_task ='$id'");
		//$item = mysql_fetch_array($result);
		while(($item = mysql_fetch_array($result))!=false):
			echo $item['title'];
		endwhile;
	}
?>