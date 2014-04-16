<?php require_once("template/header.tpl"); ?>
<div class="container">
	<div class="page-header">
		<h1>Task list</h1>
	</div>
	<p><a href="../index.php?page=add">Добавить задачу</a></p>
	<?php foreach ($data as $row) {	?>
	<p><?=$row[1]?> <a href='../index.php?page=piece&id=<?=$row[0]?>'> редактировать</a></p>
	<?php } ?>
</div>
<?php require_once("template/footer.tpl"); ?>