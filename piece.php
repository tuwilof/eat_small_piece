<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8>
		<title>Eat small piece</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>		
<?php
	include('connect.php');
	if(isset($_GET['id'])) {
		$id = $_GET['id'];
		$result = mysql_query("SELECT * FROM task WHERE id ='$id'");
		$item = mysql_fetch_array($result);
	?>
		<?=$item['title']?><br />
		<form method='post' action='../addpiece.php?id=<?=$item['id']?>'>
			1 <input type='text' name='title1'><br />
			2 <input type='text' name='title2'><br />
			3 <input type='text' name='title3'><br />
			4 <input type='text' name='title4'><br />
			<input type="submit" value="Добавить"><br />
		</form>
	<?php
	}
?>
	</body>
</html>