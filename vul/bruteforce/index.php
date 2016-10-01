<html>
<style>
.help{
		margin-left : 340px;
		margin-top: -45px;
}
</style>
</html>

<?php

	error_reporting(0);

	session_start();
	if(empty($_SESSION['UserName']))
	die('Not logged in.<br> <a href="../../index.php">Login</a> to continue.');

	define ('localhost','../../');
	include localhost.'database.php';
	echo "

		<h1>Test Brute Force Attack</h1>

		<div class = \"help\">
		<a href = 'help/help.php'>Know more about this attack here</a>
		</div>

			<h2>Login</h2>

			<form action=\"#\" method=\"GET\">
				Username:<br><input type=\"text\" name=\"username\"><br>
				Password:<br><input type=\"password\" AUTOCOMPLETE=\"off\" name=\"password\"><br><br>
				<input type=\"submit\" value=\"Login\" name=\"Login\">
			</form>

	";

	    $vulnerabilityFile = $_SESSION['Security'];
	    require_once localhost."/vul/bruteforce/source/{$vulnerabilityFile}.php";


	    echo "<br><h4>Want the home page.Here it is...... <a href='../../home.php'>Home</a><br></h4>";
	    echo "<h3>Your current security level is ".$vulnerabilityFile;
	    echo "<h4>Want to change the security .Here it is......<a href='../../security.php'>Security</a><br></h4><br>";

?>
