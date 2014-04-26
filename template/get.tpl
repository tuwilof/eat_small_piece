<?php 
	require_once("template/header.tpl");
?>
<div class="container">
	<div class="page-header">
		<h1>Get subtask</h1>
	</div>
	<p><a href="../engine/generate.php">сгенерировать новый список заданий</a></p>
	<?php $i = 0; ?>
	<?php foreach ($data as $row) {	?>
	<p><?=$row[0]?>: <?=$row[1]?> <input type='text' name='check<?=$i?>' size="1" id='check<?=$i?>' value='<?=$row[2]?>' onclick="check(<?=$i?>)"></p>
	<?php $i++;} ?>
</div>
<script>
function check(checkIndex) {
	var k = document.getElementById('check' + checkIndex).value;
	if (k == 1) {
		document.getElementById('check' + checkIndex).value = 0;
	} 
	else {
		document.getElementById('check' + checkIndex).value = 1;
	}
}
</script>
<?php 
	require_once("template/footer.tpl"); 
?>