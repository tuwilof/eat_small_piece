<div class="container">
	<p><a href="../engine/generate.php">Generate a new list of subtasks</a></p>
	<?php $i = 0; ?>
	<form name='dim' method='post' action='../engine/todone.php' class="form-inline" role="form">
<?php foreach ($data as $row) {	
		if ($row[0] != '') { 
?>
		<p><?=$row[0]?>: <?=$row[1]?> <input type='text' name='check<?=$i?>' size="1" id='check<?=$i?>' value='<?=$row[2]?>' onclick="check(<?=$i?>)" class="form-control"></p>
<?php 	} else {
			echo "No tasks";
		}
		$i++; 
	} 
?>
		<p><input type="submit" value="Send" class="btn btn-default"></p>
	</form>
</div>