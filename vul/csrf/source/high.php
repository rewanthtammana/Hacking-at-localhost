<?php

  if(isset($_GET['Change'])){
    //echo $n;
    $pass_old = $_GET['password_current'];
    $pass_new = $_GET['password_new'];
    $pass_conf = $_GET['password_conf'];

    $pass_old = stripslashes($pass_old);
    $pass_old = mysql_real_escape_string($pass_old);

    $qry = "SELECT * FROM `user` WHERE `username`='$x';";
    $result = mysql_fetch_array(mysql_query($qry));

    if($result[1] == $pass_old){
        if( $pass_new == $pass_conf )
            {

              $pass_new = mysql_real_escape_string($pass_new);
              $insert = "UPDATE `user` SET `pass` = '$pass_new' WHERE `username`= '$x'; ";
              $result = mysql_query($insert) or die(mysql_error());
              echo "Password changed sucessfully.";

            }
          else
            {
              echo "<pre>Passwords not matched.</pre>";
            }
      }
      else
      {
        echo '<pre>Current password is incorrect.</pre>';
      }
  }

 ?>
