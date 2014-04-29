<?php
	function methodName()
	{
		$result = mysql_query("SELECT * FROM task");
		$data = array();
		while(($item = mysql_fetch_array($result))!=false):
			$data[] = array($item['id'],$item['title']);
		endwhile;
		return $data; 
	}
	function getSubtasks()
	{
		$data = array();
		$result = mysql_query("SELECT * FROM getsubtask ORDER BY id DESC LIMIT 1");
		$item = mysql_fetch_array($result);
		$string = $item['taken'];
		$array = unserialize( $string );
		//idTask, title, idSubtask
		
		for ($i = 0; $i < count($array); $i++) {
			$idTask = $array[$i][0];
			$title = $array[$i][1];
			$idSubtask = $array[$i][2];
			//echo "idTask = ".$idTask."<br />";
			$result = mysql_query("SELECT * FROM task WHERE id ='$idTask'");
			$item = mysql_fetch_array($result);

			$titleTask = $item['title'];

			$string = $item['subtasks'];
			$taken = unserialize( $string );//массив под задач
			//titleSubtask, checkSubtask

			$titleSubtask = $taken[$idSubtask][0];
			$checkSubtask = $taken[$idSubtask][1];
			
			//echo $idTask." ".$titleTask.": ".$titleSubtask." ".$checkSubtask."<br />";
			$data[] = array($titleTask, $titleSubtask, $checkSubtask); 
		}
		return $data; 
	}
	function performedList()
	{
		$result = mysql_query("SELECT * FROM performed");
		$data = array();
		while(($item = mysql_fetch_array($result))!=false):
			$data[] = array($item['id'],$item['title'],$item['datep']);
		endwhile;
		return $data; 
	}
?>