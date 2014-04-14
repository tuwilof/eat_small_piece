<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8>
		<title>Eat small piece</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>		
<?php
		header('Content-Type: text/html; charset=utf-8');
	$res = mysql_connect('localhost','root','vagrant') or die("Could not connect: " . mysql_error());
	mysql_select_db('esp', $res) or die("Could not select DB: " . mysql_error());
	mysql_query('SET NAMES utf8');	

	
	if(isset($_GET['id'])) {
		$id = $_GET['id'];
		$result = mysql_query("SELECT * FROM task WHERE id ='$id'");
		$item = mysql_fetch_array($result);
		$string = $item['subtasks'];
		$array = unserialize( $string );
	?>
		<?=$item['title']?><br />
		<script>var n="<? echo count($array) ?>"; var arr = []</script>
		<form name='dim' method='post' action='../engine/addpiece.php?id=<?=$item['id']?>&n=4'>
			<div id="divf">
			<?php
				for ($i = 1; $i < count($array); $i++) {
					?>
						<?=$i?> <input type='text' name='title<?=$i?>' id='title<?=$i?>' value='<?=$array[$i]?>'><br />
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
	for (var i = 1; i < n; i++) {
		arr[i] = document.getElementById('title'+i).value;
	}

	document.getElementById('divf').innerHTML+=n+' <input type=text name="title'+n+'" id="title'+n+'" value="<?=$array['+n+']?>"><br />'
	n++
	document.dim.action='../engine/addpiece.php?id=<?=$item['id']?>&n='+n

	for (var i = 1; i < n-1; i++) {
		document.getElementById('title' + i).value = arr[i];
	}
}
</script>
	</body>
</html>