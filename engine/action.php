<?php
	require_once("../engine/connect.php");
	$result = mysql_query("SELECT * FROM user ORDER BY id DESC LIMIT 1");
	$item = mysql_fetch_array($result);
	$name = $item['name'];
	$pass = $item['pass'];
	if (($_POST['login'] == $name) & (md5(md5($_POST['password'])) == $pass)) {
		setcookie("EatSmallPieceCookie", $pass, time() + 60 * 60 * 24 * 30, "/");
		header('Location: /index.php?page=pies');
	} else {
		header('Location: /index.php');
	}
 ?> 