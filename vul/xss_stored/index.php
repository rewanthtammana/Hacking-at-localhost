<html>
<style>


.help{
		margin-left : 465px;
		margin-top: -40px;
}
</style>

</html>
<?php
	error_reporting(0);

	session_start();
	if(empty($_SESSION['UserName']))
		die('Not logged in.<br> <a href="../../index.php">Login</a> to continue.');

	define( 'localhost', '../../' );
	include localhost.'/database.php';

	echo "
		<div class=\"body_padded\">
		<h1>Stored Cross Site Scripting (XSS)</h1>
		<div class = \"help\">
		<a href = 'help/help.php'>Know more about this attack here</a>
		</div>

		<br>

		<div class=\"vulnerable_code_area\">

			<form method=\"post\" name=\"guestform\" onsubmit=\"return validate_form(this)\">
				<table width=\"550\" border=\"0\" cellpadding=\"2\" cellspacing=\"1\">
					<tr>
						<td width=\"100\">Name *</td> <td>
						<input name=\"txtName\" type=\"text\" size=\"30\" maxlength=\"50\"></td>
					</tr>
					<tr>
						<td width=\"100\">Message *</td> <td>
						<textarea name=\"mtxMessage\" cols=\"50\" rows=\"3\" maxlength=\"50\"></textarea></td>
					</tr>
					<tr>
						<td width=\"100\">&nbsp;</td>
						<td>
						<input name=\"btnSign\" type=\"submit\" value=\"Submit\" onClick=\"return checkForm();\"></td>
					</tr>
				</table>
			</form>
		</div>
	  ";

	$vulnerabilityFile = $_SESSION['Security'];

	echo "<pre>Refresh the page after submitting the data inorder to view your XSS result as this is stored XSS Attack</pre>";
	echo "<h4>Want the home page. Here it is...... <a href='../../home.php'>Home</a><br></h4>";
	echo "<h3>Your current security level is ".$vulnerabilityFile;
	echo "<h4>Want to change the security. Here it is......<a href='../../security.php'>Security</a><br></h4><br>";

	//echo "</div>";
	//echo "$vulnerabilityFile";
	require_once localhost."vul/xss_stored/source/{$vulnerabilityFile}.php";

?>
