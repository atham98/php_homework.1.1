<?php 
 $myNname = "Adham";
 $myAge = 18;
 $myMail = "1998atham@gmail.com";
 $mySity = "Нефтеюганск";
 $myData = "Frontend разработчик";
?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		dl {
			display: table-row;
		}
		dt,dd {
			display: table-cell;
			padding: 5px 10px;
		}
	</style>
</head>
<body>
		<h1>Страница пользователя Дима</h1>
	<dl>
		<dt>Имя</dt>
		<dd><?= $myNname ?></dd>
	</dl>
	<dl>
		<dt>Возраст</dt>
		<dd><?= $myAge ?></dd>
	</dl>
	<dl>
		<dt>Электронная почта</dt>
		<dd><a href="mailto:1998atham@gmail.com"><?= $myMail ?></a></dd>
	</dl>
	<dl>
		<dt>Город</dt>
		<dd><?= $mySity ?></dd>
	</dl>
	<dl>
		<dt>О себе</dt>
		<dd><?= $myData ?></dd>
	</dl>
</body>
</html>
