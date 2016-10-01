<!DOCTYPE html>
<html>

<meta charset = UTF-8 />

<head>

	<title>Hacking@LocalHost</title>

</head>

<style>

	body{
		background-color: black;
	}

	.pos{
		margin : -600px 100px 500px 750px;

	}

	img{width:50%;
		margin: 0px;
		border: 0px;}


	</style>


	<body style=color:yellow>
		<?php

			error_reporting(0);

			echo "

			<div class=img>
				<p><img src=\"logo.jpg\"></p>
			</div>


			<div  class=\"pos\">

				<form action=\"home.php\" method=\"post\">

					<h2> Enter the login credentials </h2>


					<label for=\"user\">Username</label><br> <input type=\"text\"   AUTOCOMPLETE=\"off\" size=\"30\" name=\"username\"><br><br>


					<label for=\"pass\">Password</label> <br><input type=\"password\"  AUTOCOMPLETE=\"off\" size=\"30\" name=\"password\"><br>

					<br>		<label for=\"captcha\"> Human Verification : </label><h1 style='color:red'> "?><?php include 'captcha.php';echo $_SESSION['rand_code'];

					echo "</h1>Enter the verification code to continue : <br>
					<br><input type=\"text\"  AUTOCOMPLETE=\"off\" size=\"30\" name=\"captcha\"><br>


					<p class=\"submit\"><input type=\"submit\" value=\"submit\" name=\"submit\"></p>

					<br><br>
					<h2>No account.Just click on the link below!!!!!!</h2>

					<a href=\"register.php\"><h2>Register</h2></a>



				</form>

			</div>
			";

			session_start();
			$_SESSION['logged']='1';

		?>
	</body>


	</html>
