<html>
<style>
.help{
		margin-left : 500px;
		margin-top: -45px;
}
</style>
</html>

<?php

	error_reporting(0);

	session_start();
	if(empty($_SESSION['UserName']))
		die('Not logged in.<br> <a href="../../index.php">Login</a> to continue.');

	define( 'localhost', '../../' );

	echo "

		<h1> Reflected Cross Site Scripting (XSS)</h1>

		<div class = \"help\">
		<a href = 'help/help.php'>Know more about this attack here</a>
		</div>

		<form name=\"XSS\" action=\"#\" method=\"GET\">
			<br><p><b>Enter the data: </b></p>
			<input type=\"text\" name=\"data\">
			<input type=\"submit\" value=\"Submit\">
		</form>

	  ";
	$vulnerabilityFile = $_SESSION['Security'];
	require_once localhost."vul/xss_reflected/source/{$vulnerabilityFile}.php";

	echo "<br><h4>Want the home page.Here it is...... <a href='../../home.php'>Home</a><br></h4>";
	echo "<h3>Your current security level is ".$vulnerabilityFile;
	echo "<h4>Want to change the security .Here it is......<a href='../../security.php'>Security</a><br></h4><br>";


?>
