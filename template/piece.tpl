<div class="container">
	<div class="page-header">
		<h1>Edit task</h1>
	</div>
	<p><?=$item['title']?></p>
	<script>
		var n="<? echo count($array) ?>"; 
		var arr = []; 
		var arrcheck = [];
		var itemid = <?=$item['id']?>;
	</script>
	<form name='dim' method='post' action='../engine/addpiece.php?id=<?=$item['id']?>&n=<? echo count($array) ?>'>
		<div id="divf">
<?php for ($i = 1; $i < count($array); $i++) { ?>
			<p id="<?=$i?>"><?=$i?> <input type='text' name='check<?=$i?>' size="1" id='check<?=$i?>' value='<?=$array[$i][1]?>' onclick="check(<?=$i?>)"> <input type='text' name='title<?=$i?>' size="70"  id='title<?=$i?>' value='<?=$array[$i][0]?>'> <input type="button" onclick="minus(<?=$i?>)" value="-"><p>
<?php } ?>
		</div>
		<p><input type="button" onclick="plus()" value="+"></p>
		<p><input type="submit" value="Отправить"></p>
	</form>
</div>