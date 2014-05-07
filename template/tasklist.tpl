<div class="container">
	<p><a href="../index.php?page=add">Add task</a></p>
<?php foreach ($data as $row) {	?>
	<p><?=$row[1]?> | <a href='../index.php?page=piece&id=<?=$row[0]?>'> edit</a> | <a href='../engine/deletetask.php?id=<?=$row[0]?>'> delete</a></p>
<?php } ?>
</div>