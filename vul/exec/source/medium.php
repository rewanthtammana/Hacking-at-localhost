<?php
if(isset($_POST['submit']))
{
    $target = $_POST[ 'ip' ];

    //collecting the characters responsible for the malfuctioning of the given function
    $replace = array(
        '&&' => '',
        ';' => '',
    );
    //replacing the characters responsible for the malfuctioning of the given function
    $target = str_replace( array_keys( $replace ), $replace, $target );

    // Determine OS and execute the ping command.
    if (stristr(php_uname('s'), 'Windows NT')) {

        $cmd = shell_exec( 'ping  ' . $target );
        echo '<pre>'.$cmd.'</pre>';

    } else {

        $cmd = shell_exec( 'ping  -c 3 ' . $target );
        echo '<pre>'.$cmd.'</pre>';

    }

}
 ?>
