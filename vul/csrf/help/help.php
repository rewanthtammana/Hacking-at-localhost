<?php

	session_start();
	if(empty($_SESSION['UserName']))
		die('Not logged in.<br> <a href="/my website/index.php">Login</a> to continue.');

	echo "

	<h3>Short note on CSRF attack</h3>

	<p>CSRF is an attack which forces an end user to execute unwanted actions on a web application in which he/she is currently authenticated. With a little help of social
	engineering (like sending a link via email/chat), an attacker may force the users of a web application to execute actions of the attacker's choosing. A successful CSRF exploit
	can compromise end user data and operation in case of normal user. If the targeted end user is the administrator account, this can compromise the entire web application. </p>

	<a href = '../'>Back</a>
	";

 ?>
