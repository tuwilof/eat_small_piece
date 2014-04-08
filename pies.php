<?php
	include('connect.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8>
		<title>Eat small piece</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
	<table width="100%" height="100%" border="1">
		<tr>
			<td>
				<a href="">Учеба</a><br />
				<a href="">Работа</a><br />
				<a href="">Дом</a><br />
			</td>
			<td>
				<a href="../add/">Добавить задачу</a><br />
			<?php 
				$result = mysql_query("SELECT * FROM task");
				while(($item = mysql_fetch_array($result))!=false):
			?>
				<?=$item['title']?>  <a href='../piece.php?id=<?=$item['id']?>'>редактировать</a><br />
			<?php
				endwhile;
			?>
			</td>
		</tr>
	</table>
	</body>
</html>