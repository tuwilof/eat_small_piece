<div class="container">
	<p><a href="../index.php?page=add">Добавить задачу</a></p>
<?php foreach ($data as $row) {	?>
	<p><?=$row[1]?> <a href='../index.php?page=piece&id=<?=$row[0]?>'> редактировать</a> <a href='../engine/deletetask.php?id=<?=$row[0]?>'> удалить</a></p>
<?php } ?>
</div>