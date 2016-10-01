 <?php
	$c=mysql_connect("localhost","root","","my website") or die(mysql_error());
	mysql_select_db("my website",$c);
    echo "<h1 style='color:green'>success</h1>";
?>
