<?php
	function retrievesTaskListInArray()
	{
		$result = mysql_query("SELECT * FROM task");
		$data = array();
		while(($item = mysql_fetch_array($result)) != false):
			$data[] = array($item['id'], $item['title']);
		endwhile;
		return $data; 
	}

	function retrievesSubtaskListAndTitleTaskInArray()
	{
		$data = array();
		$resultOne = mysql_query("SELECT * FROM getsubtask ORDER BY id DESC LIMIT 1");//take the last record od DB
		$itemOne = mysql_fetch_array($resultOne);
		$stringOne = $itemOne['taken'];
		$array = unserialize($stringOne);// array comprises: ID task, title, ID subtask
		
		for ($i = 0; $i < count($array); $i++) {//go through the array of task by ID
			$idTask = $array[$i][0];//ID task
			$title = $array[$i][1];//title task
			$idSubtask = $array[$i][2];//ID of the first unsolved subtask

			$resultTwo = mysql_query("SELECT * FROM task WHERE id ='$idTask'");//connect to the DB by ID subtask for extract its title
			$itemTwo = mysql_fetch_array($resultTwo);

			$titleTask = $itemTwo['title'];

			$stringTwo = $itemTwo['subtasks'];
			$taken = unserialize($stringTwo);//array subtasks comprises: titleSubtask, checkSubtask

			$titleSubtask = $taken[$idSubtask][0];//title of the first unsolved subtask
			$checkSubtask = $taken[$idSubtask][1];//value of the first unsolved subtask
			
			$data[] = array($titleTask, $titleSubtask, $checkSubtask); 
		}
		return $data; 
	}

	function retrievesPerfomedListInArray()
	{
		$result = mysql_query("SELECT * FROM performed");
		$data = array();
		while(($item = mysql_fetch_array($result)) != false):
			$data[] = array($item['id'], $item['title'], $item['datep']);
		endwhile;
		return $data; 
	}
?>