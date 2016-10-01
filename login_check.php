<?php
	//session_start();
	$p = $_SESSION['UserName'];
	echo $p."done";
	$qry1 = "SELECT * FROM `user` WHERE `username`='$p' ";
	$final = mysql_query($qry1);
	if($final)
	//if(empty($_SESSION['UserName']))
	    die('Not logged in.<br> <a href="localhost:10000/my website/index.php">Login</a> to continue.');

?>
