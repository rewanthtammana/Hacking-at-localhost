<?php

	if(!array_key_exists ("data", $_GET) || $_GET['data'] == NULL || $_GET['data'] == ''){

	 //echo "Enter some valid data .";
	} else {

	 //echo '<pre>';
	 echo 'Data you entered is:<br> ' . $_GET['data'];
	 //echo '</pre>';

	}

?>
