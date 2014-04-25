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
		
		for ($i = 0; $i < count($array); $i++) {
			$id = $array[$i][0];
			//echo "id = ".$id."<br />";
			$result = mysql_query("SELECT * FROM task WHERE id ='$id'");
			$item = mysql_fetch_array($result);
			$string = $item['subtasks'];
			$taken = unserialize( $string );//массив под задач
			$subtask = "null";
			//echo "count = ".count($taken)."<br />";
			for ($j = 1; $j < count($taken); $j++) {
				if ($taken[$j][1] == 0) {
					$subtask = $taken[$j][0];
					break;
				}
			}
			//echo $subtask."<br />";
			//echo "<br /><br />";
			$data[] = array($item['title'], $subtask, $array[$i][1]); 
		}
		return $data; 
	}
?>