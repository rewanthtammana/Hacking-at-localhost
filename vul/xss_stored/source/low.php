<?php

   if(isset($_POST['btnSign']))
   {

      $message = trim($_POST['mtxMessage']);
      $name    = trim($_POST['txtName']);
      //echo $message;
      if($message == "" || $name == "" )
      die('Please comment a valid data input');
      // Sanitize message input
      $message = stripslashes($message);
      $message = mysql_real_escape_string($message);

      // Sanitize name input
      $name = mysql_real_escape_string($name);

      $query = "INSERT INTO guestbook (comment,name,logged_by) VALUES ('$message','$name','$x');";

      $result = mysql_query($query) or die('<pre>' . mysql_error() . '</pre>' );
      $ret = "SELECT * FROM `guestbook` WHERE  `name`='$name' AND `logged_by`='$x' ";
      $ret1 = mysql_fetch_array(mysql_query($ret));
     /* echo "Name: ".$ret1['name'];
      echo "<br>";
      echo "Comment: ".$ret1['comment'];
      echo "<br>";*/
   }
   
   $ret = "SELECT * /*`comment`*/ FROM `guestbook` WHERE `logged_by`='$x'";
   $ret1 = /*mysql_fetch_array*/mysql_query($ret) or die(mysql_error());
   //echo $ret1."count is printed<br>";
   $i = 0;
   $num = mysql_numrows($ret1);
   //echo $num."echoed";
   while($i < $num){
      //  echo "<div class=\"side\">";
      //echo "Name: ".$ret1['name'];
      echo "<br>";
      $out_name = mysql_result($ret1,$i,"name");
      echo "Name :  ".$out_name;
      $out_comment = mysql_result($ret1,$i,"comment");
      $out_comment1 = $out_comment;
      $out_comment2 = str_replace("<script>","<script type = 'text/javascript'>",$out_comment1);
      $out_comment2 = str_replace("</script>",";",$out_comment1);
      //echo "<br>".$out_comment1;

      /*echo "

      <script type = \"text/javascript\">
       $out_comment2
      </script>

      ";*/
      echo "<br>";
      echo "Comment :  ".$out_comment;
      echo "<br>";
      echo "

      ";
      //echo "Comment: ".$ret1['comment'];

      $i++;
      //echo "</div>";
   }

?>
