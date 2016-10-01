<?php //echo "medium"; ?>
<?php
	//error_reporting(0);
	if(isset($_GET['Submit'])){

		// Fetching data from the database

		$id = $_GET['id'];
	    $id = stripslashes($id);
	    $id = mysql_real_escape_string($id);
		if (is_numeric($id)){
			$getid = "SELECT `username` FROM `user` WHERE `ID` = '$id'";
			mysql_query($getid);
			mysql_error();
			$result = mysql_query($getid) or die( mysql_error());

			$num = mysql_numrows($result);

			$i = 0;

			while ($i < $num) {

				$first = mysql_result($result,$i,"username");
				echo "Your id is ".$id."<br>";
			    echo "Username is ".$first;
				echo "<br><br>";
			    $i++;
			}
		}
	}

?>
