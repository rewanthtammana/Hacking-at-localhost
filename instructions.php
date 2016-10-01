<!DOCTYPE html>
<head>
	<body class="color">
		<?php
			session_start();
			error_reporting(0);
			//echo "entered instructions in the file";
			echo "<br><br><br><br><br><br><br><br><br><br>";
			echo "This website is exclusively for understanding the concepts of different loop holes that occur in the websites due to the fault of the developer.";
			echo "<br><br>";
			echo "This website must be strictly used only for educational purposes :P";
			echo "<br><br>";
			echo "Hope you can enjoy more than ever in this website after using its features & gaining knowledge";
			echo "<br><br><br>";
			if(empty($_SESSION['Security']))
				echo "Your security level is low";
			else
				echo "Your security level is ".$_SESSION['Security'];

			$vulnerabilityFile = $_SESSION['Security'];
			echo "<br><h4>Want the home page.Here it is...... <a href='home.php'>Home</a><br></h4>";
			echo "<h3>Your current security level is ".$vulnerabilityFile;
			echo "<h4>Want to change the security .Here it is......<a href='security.php'>Security</a><br></h4><br>";
		?>
	</body>
</head>
