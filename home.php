<?php
  error_reporting(0);
  $logged_in = 0;
  //echo $username;
  session_start();
  //echo "session = ".$_SESSION['rand_code'];
  //echo "captcha = ".$captcha;
  //$_SESSION['Security']='low';
  if($_SESSION['logged']!='1')
  die('Not logged in.<br> <a href="index.php">Login</a> to continue.');
  // if(!(strlen($_SESSION['UserName'])>0))
   //die('Session doesnt exist.<br>Move to <a href="index.php">Login Page</a>');

  //include ('algor.php');
  //include 'captcha.php';
  include('connection.php');
  //include('login_check.php');

  extract($_POST);
  if(isset($submit)){
      //echo $username;
      if($username == '' && $password == '')
          die("<h1>Invalid credentials</h1><br>Try with new account . <a href='register.php'>Register</a><br><p>Already had an account . <a href=\"index.php\">Login Now!!!</a></p>");
          if($captcha != $_SESSION['rand_code']){
             die("<h3>Invalid captcha. Enter it properly.</h3>");
          }
      $n = /*mysql_real_escape_string*/($username);
      $p = /*mysql_real_escape_string*/($password);
      $qry = "SELECT * FROM `user` WHERE username='$n';";
      $result = mysql_fetch_array(mysql_query($qry));
      //echo "<h1 style='color:yellow'>$result</h1>";
      /*  if( $result && mysql_num_rows( $result ) == 1) {
      echo "successful login";
      }*/

    if($result == '0')
      die("<h3>No such user doesnt exist.<br>Try with correct credentials.  </h3> <br>    <a href='index.php'>Back</a>");
    if($result['pass'] != $p)
      die("<h3>Incorrect password.<br>Try with correct credentials.   </h3>  <br>  <a href='index.php'>Back</a>");

    if(!($result == '0' && $result['pass'] != $p)){
      //echo "Logged in as ".$username."<br>";

      //echo "First move to <a href='security.php'>security</a> tab and set the security level so that you could operate the website smoothly.";
      //echo "<br><br>";
      $logged_in = 1;
    }else {
      die('Not logged in.<br> <a href="index.php">Login</a> to continue.');
    }

    $salt = hash("sha512",rand().rand().rand());
    setcookie("c_result",hash("sha512",$n),time() + 24*60*60, "/");
    setcookie("c_salt",$salt,time() + 24*60*60, "/");
    //  $userID = $username['ID'];
    $check = mysql_query("UPDATE `user` SET `Salt` = '$salt' ");
    //die("You are logged in ");
    if($check){
        $_SESSION['UserName'] = $username;
        $_SESSION['Security'] = 'low';
    }

  }

?>


<!DOCTYPE html>
<html>
<head>

</head>
<body>
  <?php
  if(empty($_SESSION['UserName']))
    die('Not logged in.<br> <a href="index.php">Login</a> to continue.');

  ?>
  <p>  Logged in as <?php echo $_SESSION['UserName']; ?> </p>


  <div id="main_menu_padded">


    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="instructions.php">Instructions</a></li>
    </ul>
    <ul><li><a href="vul/bruteforce/.">Brute Force</a></li>
      <li><a href="vul/exec/.">Command Execution</a></li>
      <li ><a href="vul/csrf/.">CSRF</a></li>
      <li><a href="vul/sql/.">SQL Injection</a></li>
      <li><a href="vul/sql_blind/.">SQL Injection (Blind)</a></li>
      <li><a href="vul/xss_reflected/.">XSS reflected</a></li>
      <li ><a href="vul/xss_stored/.">XSS stored</a></li>
    </ul>
    <ul>
      <li ><a href="security.php">Security</a></li>
      <li onclick="window.location='logout.php'" class=""><a href="logout.php">Logout</a></li>
    </ul>


  </div>

</body>
</html>
