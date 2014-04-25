<?php 
	require_once("template/header.tpl");
?>
<div class="container">
	<div class="page-header">
		<h1>Get subtask</h1>
	</div>
	<p><a href="../engine/generate.php">сгенерировать новый список заданий</a></p>
	<?php foreach ($data as $row) {	?>
	<p><?=$row[0]?>: <?=$row[1]?> <?=$row[2]?></p>
	<?php } ?>
</div>
<?php 
	require_once("template/footer.tpl"); 
?>