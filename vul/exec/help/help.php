<?php

	session_start();
	if(empty($_SESSION['UserName']))
		die('Not logged in.<br> <a href="/my website/index.php">Login</a> to continue.');

	echo "

	  <h3>Short note on Command Execution attack</h3>

		<p>The purpose of the command injection attack is to inject and execute commands specified by the attacker in the vulnerable application.
		In situation like this, the application, which executes unwanted system commands, is like a pseudo system shell, and the attacker may use it
		as any authorized system user. However, commands are executed with the same privileges and environment as the application has. Command injection
		attacks are possible in most cases because of lack of correct input data validation, which can be manipulated by the attacker (forms, cookies, HTTP headers etc.). </p>

	  <a href = '../'>Back</a>

	";

 ?>
