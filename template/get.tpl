<div class="container">
	<p><a href="../engine/generate.php">сгенерировать новый список заданий</a></p>
	<?php $i = 0; ?>
	<form name='dim' method='post' action='../engine/todone.php' class="form-inline" role="form">
<?php foreach ($data as $row) {	?>
		<p><?=$row[0]?>: <?=$row[1]?> <input type='text' name='check<?=$i?>' size="1" id='check<?=$i?>' value='<?=$row[2]?>' onclick="check(<?=$i?>)" class="form-control"></p>
<?php $i++;} ?>
		<p><input type="submit" value="Send" class="btn btn-default"></p>
	</form>
</div>