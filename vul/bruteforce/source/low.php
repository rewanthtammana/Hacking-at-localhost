<?php

	if(isset($_GET['Login'])){
		$name = $_GET['username'];

		$pass = $_GET['password'];
		//$pass = md5($pass);

		$qry  = "SELECT * FROM `user` WHERE `username`='$name' AND `pass`='$pass';";
		$result = mysql_query($qry) or die(mysql_error());
		if( $result && (mysql_num_rows($result))==1 ) {
		    //getting the user details
		    $i = 0;
		  //  $final = mysql_result($result,$i,"final");
		    echo "Welcome buddy!!!This site welcomes creative brains like you Mr.".$name;
	  	}
	    else {
	    	echo "Username/password is incorrect";
	    }

	}

?>
