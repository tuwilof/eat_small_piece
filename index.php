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
	else if ($page == "getsubtask") {
		require_once("engine/model.php");
		$data = getSubtasks();
		require_once("template/get.tpl");
	}
	else if ($page == "performed") {
		require_once("engine/model.php");
		$data = performedList();
		require_once("template/performed.tpl");
	}
	else {
		if (isset($_COOKIE['EatSmallPieceCookie'])) {
			header('Location: /index.php?page=pies');
		} else {
			require_once("template/authorization.tpl");
		}
	}
?>