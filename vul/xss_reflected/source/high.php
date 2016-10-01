<?php

	if(!array_key_exists("data", $_GET) || $_GET['data']==NULL || $_GET['data']=="")
	{
	 //echo "Enter some valid data .";
	}
	else {

	  echo 'Data you entered is:<br> ' . htmlspecialchars($_GET['data']);

	}

?>
