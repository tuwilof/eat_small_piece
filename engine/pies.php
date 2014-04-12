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
		<a href="../engine/add.php">Добавить задачу</a><br />
			<?php 
				$result = mysql_query("SELECT * FROM task");
				while(($item = mysql_fetch_array($result))!=false):
			?>
				<?=$item['title']?>  <a href='../engine/piece.php?id=<?=$item['id']?>'>редактировать</a><br />
			<?php
				endwhile;
			?>
	</body>
</html>