<html>
<style>
.help{
		margin-left : 550px;
		margin-top: -43px;
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
		<h1>Test Command Execution Vulnerability</h1>

		<div class = \"help\">
		<a href = 'help/help.php'>Know more about this attack here</a>
		</div>

		  <h2>Ping here</h2>

		  <p>Enter an IP address you want to ping:</p>
		  <form name=\"ping\" action=\"#\" method=\"post\">
		    <input type=\"text\" name=\"ip\" size=\"30\">
		    <input type=\"submit\" value=\"submit\" name=\"submit\">
		  </form>
	";

	$vulnerabilityFile = $_SESSION['Security'];
	require_once localhost."vul/exec/source/{$vulnerabilityFile}.php";


	echo "<br><h4>Want the home page.Here it is...... <a href='../../home.php'>Home</a><br></h4>";
	echo "<h3>Your current security level is ".$vulnerabilityFile;
	echo "<h4>Want to change the security .Here it is......<a href='../../security.php'>Security</a><br></h4><br>";

?>
