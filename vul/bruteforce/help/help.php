<?php

	session_start();
	if(empty($_SESSION['UserName']))
	die('Not logged in.<br> <a href="/my website/index.php">Login</a> to continue.');

	echo "

		<h3>Short note on Bruteforce attack</h3>

		<p>Password cracking is the process of recovering passwords from data that has been stored in or transmitted by a computer system. A common approach is to repeatedly try guesses for the password.</p>

		<p>Users often choose weak passwords. Examples of insecure choices include single words found in dictionaries, given and family names, any too short password
		(usually thought to be 6 or 7 characters or less), or any password meeting a too restrictive and so predictable, pattern (eg, alternating vowels and consonants).</p>

		<p>A last resort is to try every possible password, known as a brute force attack. In theory, if there is no limit to the number of attempts, a brute force attack will always
		be successful since the rules for acceptable passwords must be publicly known; but as the length of the password increases, so does the number of possible passwords.</p>

		<a href = '../'>Back</a>

	"; 

?>
