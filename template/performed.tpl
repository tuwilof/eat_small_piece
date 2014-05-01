<div class="container">
	<div class="page-header">
		<h1>Performed task</h1>
	</div>
<?php foreach ($data as $row) {	?>
	<p><?=$row[0]?> <?=$row[1]?> <?=$row[2]?></p>
<?php } ?>
</div>