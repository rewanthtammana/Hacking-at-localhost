<?php
    error_reporting(0);
    $logged = false;
    if($_COOKIE['c_salt'] && $_COOKIE['c_result'])
    {
      $cresult = mysql_real_escape_string($_COOKIE['c_result']);
      $csalt = mysql_real_escape_string($_COOKIE['c_salt']);
      $user = mysql_fetch_array(mysql_query("SELECT * FROM `user` WHERE `Salt`=`$csalt`"));
      if($user != 0)
      {
        if(hash("sha512",$user['username']) == $cresult){
          $logged == true;
        }
      }
    }

?>
