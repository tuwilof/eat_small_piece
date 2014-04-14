<?php
	include('../engine/connect.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8>
		<title>Eat small piece</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<a href="../index.php?page=add">Добавить задачу</a><br />
			<?php foreach ($data as $row) {	?>
				<?=$row[1]?>  <a href='../piece.php?page=piece&id=<?=$row[0]?>'>редактировать</a><br />
			<?php } ?>
	</body>
</html>