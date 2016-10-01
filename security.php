<!DOCTYPE html>
<html>
<head>
    <style>

        .sec{
        margin-left:400px;
            margin-top:-250px;
        }

        .sec1{
            margin-left:450px;
            margin-bottom:1000px;
        }

        .res{
          marign-left:450px;
        }


    </style>
<body>

<?php

    //error_reporting(0);

    session_start();
    include('algor.php');
    //include 'login_check.php';
    //define ('localhost','');
    include /*localhost.*/('home.php');
    include ('database.php');

    //header('refresh:0','security.php');

    //$c=mysql_connect("localhost","root","","my website") or die(mysql_error());

    /*if($_SESSION['z'] == 0)
    if(isset($_SESSION['Security'])){
          echo "Your previous security level is :";
          echo " ".$_SESSION['Security'];
    $_SESSION['z'] = 1;}*/

    if(isset($_POST['security_submit']))
    {
        //$securityLevel = 'low';

    	switch( $_POST[ 'security' ] ) {
    		case 'high':
    			$securityLevel = 'high';
    			break;
    		case 'medium':
    			$securityLevel = 'medium';
    			break;
            default:
                $securityLevel = 'low';
                break;
        }
        $_SESSION['Security'] = $securityLevel;
        echo "<div class=\"sec1\">";
        echo 'Your current security level is '.$securityLevel;
        echo "<br>";echo "<br>";echo "<br>";
        echo "</div>";

        mysql_select_db('my website');
        $x = $_SESSION['UserName'];
        //echo $x;
        $sql =  mysql_query("UPDATE `user` SET `security`= '$securityLevel' WHERE `username` = '$x' ") or die(mysql_error());

        /*
        $result = mysql_query( $sql, $c );
        if(! $result )
        {
          die('Could not update data: ' . mysql_error());
        }
        echo "Updated data successfully\n";
          */  //echo "</span>";

    }
    echo '<span class=\'res\'>';
    echo 'Your current security level is '.$_SESSION['Security'];
    echo '</span>';
    echo "<div class=\"sec\">";
    echo "<h2>Set your current Security level</h2>";
    echo "<br>";
    //echo "Your current security option is:   ";
    //echo "$security";
    echo "You can set the security level to low, medium or high.";
    echo "<br>";echo "<br>";
    echo "The security level changes the vulnerability checkings while using this website.";echo "<br>";echo "<br>";
    //echo "$security";


    echo "
        <form method=\"POST\" action=\"#\">

        Security Level:
        <select name=\"security\" >
        <option>low</option>
        <option>medium</option>
        <option>high</option>
        </select>
        <br />
        <br>
        <input type=\"submit\" value=\"submit\" name=\"security_submit\" />
        </form>
        </div>
    ";
?>

</body>
</head>
</html>
