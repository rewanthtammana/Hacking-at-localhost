<?php
	session_start();
	if(empty($_SESSION['UserName']))
		die('Not logged in.<br> <a href="/my website/index.php">Login</a> to continue.');

	echo "

	<h3>Short note on XSS Reflected attack</h3>

	<p>Cross-Site Scripting attacks are a type of injection problem, in which malicious scripts are injected into the trusted web sites.
	Cross-site scripting (XSS) attacks occur when an attacker uses a web application to send malicious code, generally in the form of a browser side script, to a different end user.
	Flaws that allow these attacks to succeed are quite widespread and occur anywhere, where a web application uses input from a user in the output it generates without validating or encoding it.</P>

	<p>An attacker can use XSS to send a malicious script to an unsuspecting user. The end user's browser has no way to know that the script should not be trusted, and will execute the script.
	Because it thinks the script came from a trusted source, the malicious script can access any cookies, session tokens, or other sensitive information retained by your browser and used with
	that site. These scripts can even rewrite the content of the HTML page. </p>


	<a href = '../'>Back</a>
	";
?>
