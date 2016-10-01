<?php
	error_reporting(0);
	if(isset($_GET['Submit'])){

		// Fetching data from the database

		$id = $_GET['id'];

		$getid = "SELECT username FROM user WHERE ID = '$id'";
		$result = mysql_query($getid) or die(  mysql_error()  );

		$num = mysql_numrows($result);
		//	echo $num."num is echoed";
		$i = 0;

		while ($i < $num) {

			$first = mysql_result($result,$i,"username");
			echo "Your id is ".$id."<br>";
		    echo "Username is ".$first;
			echo "<br><br>";
		    $i++;
		}
	}
?>
