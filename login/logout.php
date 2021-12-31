<?php
include('header.html');
    session_start() ;
    echo "You have been logut {$_SESSION['name']}, please login again" ;
    session_unset();
    session_destroy();

    

?>
<br>
    <a href="login.php">Click to Login</a>