﻿<!DOCTYPE html>
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
		$string = $item['subtasks'];
		$array = unserialize( $string );
	?>
		<?=$item['title']?><br />
		<script>var n=5</script>
		<form name='dim' method='post' action='../addpiece.php?id=<?=$item['id']?>&n=4'>
			<div id="divf">
			<?php
				for ($i = 0; $i < count($array); $i++) {
					?>
						<?=$i+1?> <input type='text' name='title<?=$i+1?>' value='<?=$array[$i]?>'><br />
					<?php
				}
			?>
			</div>
			<input type=button onclick=plus()><br />
			<input type="submit" value="Добавить"><br />
		</form>
	<?php
	}
?>
<script>
function plus(){
document.getElementById('divf').innerHTML+=n+' <input type=text name="title'+n+'" value="<?=$array['+n+']?>"><br />'
n++
document.dim.action='../addpiece.php?id=<?=$item['id']?>&n='+n
}
</script>
	</body>
</html>