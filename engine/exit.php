<?php 
	setcookie('EatSmallPieceCookie', '', time() - 60 * 60 * 24 * 30, '/'); 
	header('Location: /index.php');
?>