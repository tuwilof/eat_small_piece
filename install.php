<?php
	require_once("template/header.tpl");
?>
<div class="container">
	<div class="page-header">
		<h1>Install</h1>
	</div>
	<form method='post'  action="install.php">
		<p><b>Настройки базы данных</b></p>
		<p>Сервер 		<input type='text' name="servdb"></p>
		<p>Пользователь <input type='text' name="userdb"></p>
		<p>Пароль 		<input type='text' name="passdb"></p>
		<p>База данных 	<input type='text' name="namedb"></p>
		<br />
		<p><b>Настройки пользователя</b></p>
		<p>Имя 		<input type='text' name="user"></p>
		<p>Пароль 	<input type='text' name="pass"></p>
		<p><input type="submit" value="Отправить"></p>
	</form>
</div>
<?php 
	if (isset($_POST['servdb'])) {
		$servdb = $_POST['servdb'];
		$userdb = $_POST['userdb'];
		$passdb = $_POST['passdb'];
		$namedb = $_POST['namedb'];

		$user = $_POST['user'];
		$pass = $_POST['pass'];

		$s1 = "header('Content-Type: text/html; charset=utf-8');";
		$s2 = "\$res = mysql_connect('".$servdb."','".$userdb."','".$passdb."') or die(\"Could not connect: \" . mysql_error());";
		$s3 = "mysql_select_db('".$namedb."', \$res) or die(\"Could not select DB: \" . mysql_error());";
		$s4 = "mysql_query('SET NAMES utf8');";
		$text = "<?php\n\t".$s1."\n\t".$s2."\n\t".$s3."\n\t".$s4."\n?>";
		$fp = fopen("engine/connect.php", "w");
		fwrite($fp, $text);
		fclose($fp);

		require_once("engine/connect.php");
		$query = "INSERT INTO user (name,pass) VALUES ('$user','$pass')";
		$res = mysql_query($query);
	}
?>
<?php
	require_once("template/footer.tpl");
?>