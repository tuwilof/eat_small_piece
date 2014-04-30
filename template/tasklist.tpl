<div class="container">
	<div class="page-header">
		<h1>Task list</h1>
	</div>
	<p><a href="../engine/exit.php">Выйти</a></p>
	<p><a href="../index.php?page=getsubtask">Получить задачу</a></p>
	<p><a href="../index.php?page=performed">Список выполненых задач</a></p>
	<p><a href="../index.php?page=add">Добавить задачу</a></p>
	<?php foreach ($data as $row) {	?>
	<p><?=$row[1]?> <a href='../index.php?page=piece&id=<?=$row[0]?>'> редактировать</a> <a href='../engine/deletetask.php?id=<?=$row[0]?>'> удалить</a></p>
	<?php } ?>
</div>