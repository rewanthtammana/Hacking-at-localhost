<?php

if (isset($_GET['Submit'])) {

    // Retrieve data

    $id = $_GET['id'];
    $id = mysql_real_escape_string($id);

    $getid = "SELECT username FROM user WHERE ID = $id";
  	$result = mysql_query($getid);

    $num = @mysql_numrows($result); // The '@' character suppresses errors making the injection 'blind'

    $i = 0;

    while ($i < $num) {

  		$first = mysql_result($result,$i,"username");
  		echo "<pre>Your id is ".$id."<br>";
      echo "Username is ".$first."</pre>";

      $i++;
  	}
}
?>
