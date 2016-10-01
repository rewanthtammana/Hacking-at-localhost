
<?php

if( isset( $_POST[ 'submit' ] ) ) {

    $target = $_POST["ip"];

    $target = stripslashes( $target );


    // Split the IP into 4 parts
    $part = explode(".", $target);

    // Check IF each part is an integer
    if ((is_numeric($part[0])) && (is_numeric($part[1])) && (is_numeric($part[2])) && (is_numeric($part[3])) && (sizeof($part) == 4))

    {

    // If all 4 parts are int's put the IP back together.
    $target = $part[0].'.'.$part[1].'.'.$part[2].'.'.$part[3];


        // Determine OS and execute the ping command.
        if (stristr(php_uname('s'), 'Windows NT')) {

            $cmd = shell_exec( 'ping  ' . $target );
            echo '<pre>'.$cmd.'</pre>';

        } else {

            $cmd = shell_exec( 'ping  -c 3 ' . $target );
            echo '<pre>'.$cmd.'</pre>';

        }

    }

    else {
        echo '<pre>Enter a valid IP</pre>';
    }


}

?>
