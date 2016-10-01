<?php
include('connection.php');
include('algor.php');
extract($_POST);
if(isset($Login))
  {
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
         if (empty($username))
    	 {
         die("Invalid input.<br>Please enter the username.<br><a href='register.php'>Back</a>");
       }
       if (empty($password))
       {
         die("Password field cant be empty");
       }
       if (!preg_match("/^[a-zA-Z ]*$/",$username))
  		 {

         die('Only letters and white space allowed.Try with a valid username.');
  		 }
     }

    $n = mysql_real_escape_string($username);
    $p = mysql_real_escape_string($password);
    $s = 'low';
    $salt = hash("sha512",rand().rand().rand());
    //mysql_query("INSERT INTO `users` (`username`,`pass`,`security`,`Salt`) VALUES ('$n','$p','$s','$salt')") or die(mysql_error());
    $qry = mysql_query("SELECT * FROM `user` WHERE `username`='$n';") or die("unable to cross check with the database.Please try later.");
    $result = mysql_fetch_array($qry);
    if($result == '0'){
    mysql_query("INSERT INTO user VALUES('$n','$p','$s','$salt','ID')") or die(mysql_error());
    $qry1 = mysql_query("SELECT * FROM `user` WHERE `username`='$n';") or die("unable to cross check with the database.Please try later.");
    $result1 = mysql_fetch_array($qry1);

    echo "<br>Registration successful.<br>*Your id is $result1[4].<br><br>";
    //echo "<br>Registration done with the username: ".$username;
    //echo "<br><a href='index.php'>Login to continue</a>";
    }
    else {
      echo "Username already exists . Try with a different username.";
    }
}
?>
<!DOCTYPE html>
<html>

<form action="register.php" method="post">

    <h2> Enter the registration details </h2>


    <label for="user">Username</label><br> <input type="text"  size="30" name="username"><br><br>


  <label for="pass">Password</label> <br><input type="password" AUTOCOMPLETE="off" size="30" name="password"><br>


    <p class="submit"><input type="submit" value="Register" name="Login"></p>

    <p>Had an account ... <a href="index.php">Login Now!!!</a></p>

</form>
</html>
