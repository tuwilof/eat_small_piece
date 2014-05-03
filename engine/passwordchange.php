<?php
	require_once("../engine/connect.php");
	$result = mysql_query("SELECT * FROM user ORDER BY id DESC LIMIT 1");
	$item = mysql_fetch_array($result);
	$passDB = $item['pass'];

	$old = $_POST['oldpass'];
	$pass = $_POST['newpass'];
	$repeat = $_POST['repeatnewpass'];

	if (($passDB == $old) && ($pass == $repeat)) {
		$query = "UPDATE user SET pass = '$pass' ORDER BY id DESC LIMIT 1";
		$res = mysql_query($query);
	}
	//echo $old." ".$pass." ".$repeat;
	header("Location: /index.php?page=pies");
?>