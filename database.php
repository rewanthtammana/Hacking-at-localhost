<?php

	session_start();
	$c=mysql_connect("localhost","root","","my website") or die(mysql_error());
	$x = mysql_escape_string($_SESSION['UserName']);
	//$s = mysql_escape_string($_SESSION['Security']);
	mysql_select_db('my website');

 ?>
