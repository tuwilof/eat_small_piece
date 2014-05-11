<?php
	$page = trim($_GET['page']);
	if ($page == "3") {
		$user = $_POST['user'];
		$pass = md5(md5($_POST['pass']));

		require_once("engine/connect.php");

		$query = "INSERT INTO user (name,pass) VALUES ('$user','$pass')";
		$res = mysql_query($query);
/*
********************************

		PAGE 3 START

********************************
*/
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $titlePage; ?></title>
	<!-- Bootstrap -->
	<link href="../template/css/bootstrap.min.css" rel="stylesheet">
	<link href="../template/css/style.css" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div class="container">
	<div class="page-header">
		<h1>Install</h1>
	</div>
	<p>Thank you. Registration is completed. Please delete the file "install.php".</p>
</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="template/js/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="template/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="template/js/script.js"></script>
</body>
</html>
<?php
/*
********************************

		PAGE 3 FINISH

********************************
*/
	}
	else if ($page == "2") {
		$servdb = $_POST['servdb'];
		$userdb = $_POST['userdb'];
		$passdb = $_POST['passdb'];
		$namedb = $_POST['namedb'];

		$s1 = "header('Content-Type: text/html; charset=utf-8');";
		$s2 = "\$res = mysql_connect('".$servdb."','".$userdb."','".$passdb."') or die(\"Could not connect: \" . mysql_error());";
		$s3 = "mysql_select_db('".$namedb."', \$res) or die(\"Could not select DB: \" . mysql_error());";
		$s4 = "mysql_query('SET NAMES utf8');";
		$text = "<?php\n\t".$s1."\n\t".$s2."\n\t".$s3."\n\t".$s4."\n?>";
		$fp = fopen("engine/connect.php", "w");
		fwrite($fp, $text);
		fclose($fp);

		require_once("engine/connect.php");

		$query = "
		CREATE TABLE IF NOT EXISTS `getsubtask` (
		  `id` int(8) NOT NULL AUTO_INCREMENT,
		  `taken` text CHARACTER SET utf8 NOT NULL,
		  PRIMARY KEY (`id`)
		) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;
		";
		$res = mysql_query($query);

		$query = "
		CREATE TABLE IF NOT EXISTS `performed` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `title` text CHARACTER SET utf8 NOT NULL,
		  `datep` text CHARACTER SET utf8 NOT NULL,
		  PRIMARY KEY (`id`)
		) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;
		";
		$res = mysql_query($query);

		$query = "
		CREATE TABLE IF NOT EXISTS `task` (
		  `id` int(4) NOT NULL AUTO_INCREMENT,
		  `title` text CHARACTER SET utf8 NOT NULL,
		  `subtasks` text CHARACTER SET utf8 NOT NULL,
		  PRIMARY KEY (`id`)
		) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;
		";
		$res = mysql_query($query);

		$query = "
		CREATE TABLE IF NOT EXISTS `user` (
		  `id` int(4) NOT NULL AUTO_INCREMENT,
		  `name` text CHARACTER SET utf8 NOT NULL,
		  `pass` text CHARACTER SET utf8 NOT NULL,
		  PRIMARY KEY (`id`)
		) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;
		";
		$res = mysql_query($query);
/*
********************************

		PAGE 2 START

********************************
*/
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $titlePage; ?></title>
	<!-- Bootstrap -->
	<link href="../template/css/bootstrap.min.css" rel="stylesheet">
	<link href="../template/css/style.css" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div class="container">
	<div class="page-header">
		<h1>Install</h1>
	</div>
	<form method='post'  action="install.php?page=3" class="form-horizontal" role="form">
		<p><b>User settings</b></p>
		<div class="form-group">
			<label class="col-sm-2 control-label">User</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="user">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Password</label>
			<div class="col-sm-4">
				<input type="password" class="form-control" name="pass">
			</div>
		</div>
		<p><input type="submit" value="Send" class="btn btn-default"></p>
	</form>
</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="template/js/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="template/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="template/js/script.js"></script>
</body>
</html>
<?php 
/*
********************************

		PAGE 2 FINISH

********************************
*/
	} else { 
/*
********************************

		PAGE 1 START

********************************
*/
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $titlePage; ?></title>
	<!-- Bootstrap -->
	<link href="../template/css/bootstrap.min.css" rel="stylesheet">
	<link href="../template/css/style.css" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div class="container">
	<div class="page-header">
		<h1>Install</h1>
	</div>
	<form method='post'  action="install.php?page=2" class="form-horizontal" role="form">
		<p><b>Database configuration</b></p>
		<div class="form-group">
			<label class="col-sm-2 control-label">Server</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="servdb">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">User</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="userdb">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Password</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="passdb">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Database</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="namedb">
			</div>
		</div>
		<p><input type="submit" value="Send" class="btn btn-default"></p>
	</form>
</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="template/js/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="template/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="template/js/script.js"></script>
</body>
</html>
<?php 
	}
/*
********************************

		PAGE 1 FINISH

********************************
*/
?>