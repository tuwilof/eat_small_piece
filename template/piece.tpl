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
		<script>var n="<? echo count($array) ?>"; var arr = []; var arrcheck = []</script>
		<form name='dim' method='post' action='../engine/addpiece.php?id=<?=$item['id']?>&n=<? echo count($array) ?>'>
			<div id="divf">
			<?php
				for ($i = 1; $i < count($array); $i++) {
					?>
						<p id="<?=$i?>"><?=$i?> <input type='text' name='check<?=$i?>' size="1" id='check<?=$i?>' value='<?=$array[$i][1]?>' onclick="check(<?=$i?>)"> <input type='text' name='title<?=$i?>' size="70"  id='title<?=$i?>' value='<?=$array[$i][0]?>'> <input type="button" onclick="minus(<?=$i?>)" value="-"><p>
					<?php
				}
			?>
			</div>
			<p><input type="button" onclick="plus()" value="+"></p>
			<p><input type="submit" value="Отправить"></p>
		</form>
	<?php
	}
?>
<script>
function plus(){
	for (var i = 1; i < n; i++) {
		arr[i] = document.getElementById('title'+i).value;
	}
	for (var i = 1; i < n; i++) {
		arrcheck[i] = document.getElementById('check' + i).value;
	}

	document.getElementById('divf').innerHTML+='<p id="'+n+'">'+n+' <input type="text" name="check'+n+'" size="1" id="check'+n+'" value="0" onclick="check('+n+')"> <input type="text" name="title'+n+'" size="70" id="title'+n+'" value="<?=$array['+n+'][0]?>"> <input type="button" onclick="minus('+n+')" value="-"></p>'
	n++
	document.dim.action='../engine/addpiece.php?id=<?=$item['id']?>&n='+n

	for (var i = 1; i < n-1; i++) {
		document.getElementById('title' + i).value = arr[i];
	}
	for (var i = 1; i < n-1; i++) {
		document.getElementById('check' + i).value = arrcheck[i];
	}
}
function minus(myIndex){
	for (var i = 1; i < n; i++) {
		arr[i] = document.getElementById('title'+i).value;
	}
	for (var i = 1; i < n; i++) {
		arrcheck[i] = document.getElementById('check' + i).value;
	}
	arr.splice(myIndex,1);
	arrcheck.splice(myIndex,1);
	n--
	var el = document.getElementById(n);
	el.parentNode.removeChild(el);

	//n--
	document.dim.action='../engine/addpiece.php?id=<?=$item['id']?>&n='+n



	for (var i = 1; i < n-1; i++) {
		document.getElementById('title' + i).value = arr[i];
	}
	for (var i = 1; i < n-1; i++) {
		document.getElementById('check' + i).value = arrcheck[i];
	}
}
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
</div>
<?php require_once("template/footer.tpl"); ?>