<?php require_once("template/header.tpl"); ?>	
<div class="container">
	<div class="page-header">
		<h1>Edit task</h1>
	</div>
<?php	
	if(isset($_GET['id'])) {
		$id = $_GET['id'];
		$result = mysql_query("SELECT * FROM task WHERE id ='$id'");
		$item = mysql_fetch_array($result);
		$string = $item['subtasks'];
		$array = unserialize( $string );
	?>
		<p><?=$item['title']?></p>
		<script>var n="<? echo count($array) ?>"; var arr = []</script>
		<form name='dim' method='post' action='../engine/addpiece.php?id=<?=$item['id']?>&n=<? echo count($array) ?>'>
			<div id="divf">
			<?php
				for ($i = 1; $i < count($array); $i++) {
					?>
						<p><?=$i?> <input type='text' name='title<?=$i?>' id='title<?=$i?>' value='<?=$array[$i]?>'><p>
					<?php
				}
			?>
			</div>
			<p><input type=button onclick=plus()></p>
			<p><input type="submit" value="Добавить"></p>
		</form>
	<?php
	}
?>
<script>
function plus(){
	for (var i = 1; i < n; i++) {
		arr[i] = document.getElementById('title'+i).value;
	}

	document.getElementById('divf').innerHTML+='<p>'+n+' <input type=text name="title'+n+'" id="title'+n+'" value="<?=$array['+n+']?>"></p>'
	n++
	document.dim.action='../engine/addpiece.php?id=<?=$item['id']?>&n='+n

	for (var i = 1; i < n-1; i++) {
		document.getElementById('title' + i).value = arr[i];
	}
}
</script>
</div>
<?php require_once("template/footer.tpl"); ?>