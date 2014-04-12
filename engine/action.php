<?php 
	if (($_POST['login'] == "username") & ($_POST['password'] == "password")) {
		header('Location: /engine/pies.php');
	} else {
		header('Location: /index.php');
	}
 ?> 