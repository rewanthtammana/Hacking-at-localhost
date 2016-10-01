<?php

	session_start();
	$string = '';

	for ($i = 0; $i < 6; $i++)
	{
		$string .= chr( rand( 65, 122) );
	}

	$_SESSION['rand_code'] = $string;
	 /*
	//$fontFile = 'openSans.ttf';
	$image = imagecreatetruecolor( 1700, 600 );
	$white = imagecolorallocate( $image, 255, 255, 255 );
	$green = imagecolorallocate( $image, 0, 100, 0 );

	imagefilledrectangle( $image, 0, 0, 200, 100, $white );
	imagettftext( $image, 30, 0, 10, 40, $green, $fontFile, $_SESSION['rand_code'] );

	header( 'Content-type: image/png' );
	imagepng( $image );
	 */
	//echo $_SESSION['rand_code'];
?>
