<?php 
	if (($_POST['login'] == "username") & ($_POST['password'] == "password")) {
		header('Location: /index.php?page=pies');
	} else {
		header('Location: /index.php');
	}
 ?> 