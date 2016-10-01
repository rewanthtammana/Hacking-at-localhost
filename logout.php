<?php
	error_reporting(0);
	include 'database.php';
	//$x = mysql_escape_string($_SESSION['UserName']);

	if(empty($_SESSION['UserName']))
	die('Not logged in.<br> <a href="/my website/index.php">Login</a> to continue.');

	$sql =  mysql_query("UPDATE `user` SET `security`= 'low' WHERE `username` = '$x' ") or die(mysql_error());
	$result = mysql_query($sql,$c);


	session_unset();

	session_destroy();

	if(!$_SESSION['UserName']){

	echo "logged out successfully!!!<br />";
	echo "<a href=\"index.php\">Go back to login page</a>";}
?>
