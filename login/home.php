<?php
    session_start();
    include('header.html');
    include("check_for_login.php") ;
    $sqlconnection =mysqli_connect("localhost","root","","login") ;
    $user_data = check_login($sqlconnection) ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Welcome to the home-page <?php echo "$user_data[name]"?></h1>
    </div>
    <button><a href="logout.php">Log-out</a></button>
</body>
</html>