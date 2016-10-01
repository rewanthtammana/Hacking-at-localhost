<html>
<style>
.help{
		margin-left : 440px;
		margin-top: -43px;
}
</style>
</html>

<?php
	error_reporting(0);
	session_start();
	if(empty($_SESSION['UserName']))
		die('Not logged in.<br> <a href="../../index.php">Login</a> to continue.');

	define( 'localhost', '../../' );

	include localhost.'database.php';

	echo "
		<h1> Test the SQL Injection out here </h1>
		<div class = \"help\">
			<a href = 'help/help.php'>Know more about this attack here</a>
		</div>
		<form action=\"#\" method=\"GET\">
			<p><h3>Enter the user id</h3></p>
			<input type=\"text\" name=\"id\">
			<input type=\"submit\" name=\"Submit\" value=\"Submit\">
		</form>
	";
	$vulnerabilityFile = $_SESSION['Security'];
	require_once localhost."vul/sql/source/{$vulnerabilityFile}.php";
	echo "<h4>Want the home page.Here it is...... <a href='../../home.php'>Home</a><br></h4>";
	echo "<h3>Your current security level is ".$vulnerabilityFile;
	echo "<h4>Want to change the security .Here it is......<a href='../../security.php'>Security</a><br></h4><br>";
?>
