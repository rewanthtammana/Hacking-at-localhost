<?php

  if(isset($_GET['Login'])){
    $name = $_GET['username'];
    //sanitising the input
    $name = stripslashes($name);
    $name = mysql_real_escape_string($name);


    $pass = $_GET['password'];
    //sanitising the input
    $pass = stripslashes($pass);
    $pass = mysql_real_escape_string($pass);

    //$pass = md5($pass);


    $qry  = "SELECT * FROM `user` WHERE `username`='$name' AND `pass`='$pass';";
    $result = mysql_query($qry) or die(mysql_error());
    if( $result && (mysql_num_rows($result))==1 ){
        //getting the user details
        $i = 0;//initialising the value to avoid errors.
        //  $final = mysql_result($result,$i,"final");
        //login successful
        echo "Welcome buddy!!!This site welcomes creative brains like you Mr.".$name;
    }else {
        //login failed
        sleep(6);
        echo "Username/password is incorrect";
    }

  }

?>
