<html>
<style>
.help{
		margin-left : 560px;
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
	//$n = $_SESSION['UserName'];
	include localhost.'/database.php';

	echo "

		<div class=\"body_padded\">
		<h1>Test Cross Site Request Forgery (CSRF)</h1>


		<div class = \"help\">
			<a href = 'help/help.php'>Know more about this attack here</a>
		</div>


		<h3>Change your password:</h3>
	    <br>
	    <form action=\"#\" method=\"GET\">";

	$temp = $_SESSION['Security'];

	if ($temp == 'high'){
	    echo "
	   	    Current password:<br>
			<input type=\"password\" AUTOCOMPLETE=\"off\" name=\"password_current\"><br>";
	}

	echo "
	    New password:<br>
	    <input type=\"password\" AUTOCOMPLETE=\"off\" name=\"password_new\"><br>
	    Confirm new password: <br>
	    <input type=\"password\" AUTOCOMPLETE=\"off\" name=\"password_conf\">
	    <br><br>
	    <input type=\"submit\" value=\"Change\" name=\"Change\">
	    </form>
	";

	$vulnerabilityFile = $_SESSION['Security'];
	require_once localhost."vul/csrf/source/{$vulnerabilityFile}.php";

	echo "<h4>Want the home page.Here it is...... <a href='../../home.php'>Home</a><br></h4>";
	echo "<h3>Your current security level is ".$vulnerabilityFile;
	echo "<h4>Want to change the security .Here it is......<a href='../../security.php'>Security</a><br></h4><br>";

?>
