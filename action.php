<?php 
	if (($_POST['login'] == "username") & ($_POST['password'] == "password")) {
		header('Location: pies/');
	} else {
		header('Location: index/');
	}
 ?> 