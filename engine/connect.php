<?php
	header('Content-Type: text/html; charset=utf-8');
	$res = mysql_connect('localhost','root','vagrant') or die("Could not connect: " . mysql_error());
	mysql_select_db('esp', $res) or die("Could not select DB: " . mysql_error());
	mysql_query('SET NAMES utf8');
?>