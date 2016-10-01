<?php

	session_start();
	if(empty($_SESSION['UserName']))
		die('Not logged in.<br> <a href="/my website/index.php">Login</a> to continue.');

	echo"

		<h3>Short note on Blind SQL Injection attack</h3>


		<p>When an attacker executes SQL Injection attacks, sometimes the server responds with error messages from the database server complaining that the SQL Query's syntax is incorrect.
		Blind SQL injection is identical to normal SQL Injection except that when an attacker attempts to exploit an application, rather then getting a useful error message,
		they get a generic page specified by the developer instead. This makes exploiting a potential SQL Injection attack more difficult but not impossible. An attacker can still steal data
		by asking a series of True and False questions through SQL statements.</p>

		<p>The 'id' variable within this PHP script is vulnerable to SQL injection.</p>

	    <p>Assume that there are 'x' users in the database, with randomly genereated id's from 1 to 'p' ( p >= x ). Your mission is to steal passwords of all available id's.</p>

	    <a href = '../'>Back</a>
	";
?>
