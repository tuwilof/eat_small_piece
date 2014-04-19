<?php 
	if (isset($_COOKIE['EatSmallPieceCookie'])) {
	require_once("template/header.tpl");
?>
<div class="container">
	<div class="page-header">
		<h1>Task list</h1>
	</div>
	<form action="" method="post"><input type='submit' name='exit' value='Выйти'/></form>
<?php
if($_REQUEST['exit']) 
  {
        setcookie('EatSmallPieceCookie', '', time() - 60 * 60 * 24 * 30, '/'); 
		header('Location: /index.php'); exit();
  }
?>
	<p><a href="../index.php?page=add">Добавить задачу</a></p>
	<?php foreach ($data as $row) {	?>
	<p><?=$row[1]?> <a href='../index.php?page=piece&id=<?=$row[0]?>'> редактировать</a> <a href='../engine/deletetask.php?id=<?=$row[0]?>'> удалить</a></p>
	<?php } ?>
</div>
<?php 
	require_once("template/footer.tpl"); 
	} else {
		header('Location: /index.php');
	}
?>