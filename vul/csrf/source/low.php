<?php

  if(isset($_GET['Change'])){
    //echo $n;
    $pass_new = $_GET['password_new'];
    $pass_conf = $_GET['password_conf'];
    if( $pass_new == $pass_conf ){
      $pass_new = mysql_real_escape_string($pass_new);
      $insert = "UPDATE `user` SET `pass` = '$pass_new' WHERE `username`= '$x'; ";
      $result = mysql_query($insert) or die(mysql_error());
      echo "Password changed sucessfully.";
    }
    else {
      echo "Passwords not matched";
    }
  }

?>
