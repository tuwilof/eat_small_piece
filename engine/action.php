<?php 
	if (($_POST['login'] == "username") & ($_POST['password'] == "password")) {
		setcookie("EatSmallPieceCookie", 'test', time() + 60 * 60 * 24 * 30, "/");
		header('Location: /index.php?page=pies');
	} else {
		header('Location: /index.php');
	}
 ?> 