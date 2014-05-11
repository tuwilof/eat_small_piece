<?php
	require_once("engine/connect.php");
	$result2 = mysql_query("SELECT * FROM user ORDER BY id DESC LIMIT 1");
	$item2 = mysql_fetch_array($result2);
	$passin = $item2['pass'];

	$page = trim($_GET['page']);
	if ($page == "pies") {
		require_once("engine/model.php");
		$data = retrievesTaskListInArray();
		if ($_COOKIE['EatSmallPieceCookie'] == $passin) {
			$titlePage = "Task list";
			$scriptPage = "<script>document.getElementById('p1').classList.add('active');</script>";
			require_once("template/header.tpl");
			require_once("template/tasklist.tpl");
			require_once("template/footer.tpl");
		} else {
			header('Location: /index.php');
		}
	}
	else if ($page == "add") {
		if ($_COOKIE['EatSmallPieceCookie'] == $passin) {
			$titlePage = "Add task";
			require_once("template/header.tpl");
			require_once("template/add.tpl");
			require_once("template/footer.tpl");
		} else {
			header('Location: /index.php');
		}
	}
	else if ($page == "piece") {
		if ($_COOKIE['EatSmallPieceCookie'] == $passin) {
			if(isset($_GET['id'])) {
				$id = $_GET['id'];
				$result = mysql_query("SELECT * FROM task WHERE id ='$id'");
				$item = mysql_fetch_array($result);
				$string = $item['subtasks'];
				$array = unserialize( $string );
				$titlePage = "Subtask list";
				require_once("template/header.tpl");
				require_once("template/piece.tpl");
				require_once("template/footer.tpl");
			} else {
				header('Location: /index.php?page=pies');	
			}
		} else {
			header('Location: /index.php');
		}
	}
	else if ($page == "getsubtask") {
		require_once("engine/model.php");
		$data = retrievesSubtaskListAndTitleTaskInArray();
		if ($_COOKIE['EatSmallPieceCookie'] == $passin) {
			$titlePage = "Get subtask";
			$scriptPage = "<script>document.getElementById('p2').classList.add('active');</script>";
			require_once("template/header.tpl");
			require_once("template/get.tpl");
			require_once("template/footer.tpl");
		} else {
			header('Location: /index.php');
		}
	}
	else if ($page == "performed") {
		require_once("engine/model.php");
		$data = retrievesPerfomedListInArray();
		if ($_COOKIE['EatSmallPieceCookie'] == $passin) {
			$titlePage = "Performed";
			$scriptPage = "<script>document.getElementById('p3').classList.add('active');</script>";
			require_once("template/header.tpl");
			require_once("template/performed.tpl");
			require_once("template/footer.tpl");
		} else {
			header('Location: /index.php');
		}
	}
	else if ($page == "settings") {
		if ($_COOKIE['EatSmallPieceCookie'] == $passin) {
			$titlePage = "Settings";
			$scriptPage = "<script>document.getElementById('p4').classList.add('active');</script>";
			require_once("template/header.tpl");
			require_once("template/settings.tpl");
			require_once("template/footer.tpl");
		} else {
			header('Location: /index.php');
		}
	}
	else {
		if ($_COOKIE['EatSmallPieceCookie'] == $passin) {
			header('Location: /index.php?page=pies');
		} else {
			$titlePage = "Eat small piece";
			require_once("template/authorization.tpl");
			require_once("template/footer.tpl");
		}
	}
?>