<?php
	require_once("engine/connect.php");
	$page = trim($_GET['page']);
	if ($page == "pies") {
		require_once("engine/model.php");
		$data = methodName();
		require_once("template/tasklist.tpl");
	}
	else if ($page == "add") {
		require_once("template/add.tpl");
	}
	else if ($page == "piece") {
		require_once("template/piece.tpl");
	}
	else {
		require_once("template/authorization.tpl");
	}
?>