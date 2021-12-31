<?php
    session_start();
    include('header.html');
    include("check_for_login.php") ;
    $sqlconnection = mysqli_connect("localhost","root","","login") or die("Connection failed.") ;
    if($_SERVER['REQUEST_METHOD']=='POST'){
       $user_name = $_POST['name'] ;
       $user_email = $_POST['email'];
       $password = $_POST['password'];

       if(!empty($user_name)&& !empty($user_email) && !empty($password)){
    
           $sql ="select * from user where email = '$user_email' " ;
           $result =mysqli_query($sqlconnection,$sql)or die("Error") ;
           $row =mysqli_fetch_assoc($result);
           if($row['email']!= $user_email){ 
            $query = "insert into user(name,email,password) values('$user_name','$user_email','$password')" ;
            mysqli_query($sqlconnection , $query) ;
            
            header("Location: index.php") ;
            die ;
           }
           else{
            $message = "Already registered...";
            echo "<script type='text/javascript'>alert('$message');</script>";
            //    header("Location: signup.php") ;
               die ;
           }
        
       }
       else{
           echo "enter valid information" ;
       }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <style>
        .login-form{
            background-color :grey ;
            margin:auto ;
            margin-top:50px ;
            width:400px ;
            padding :20px ;
        }
        #in{
            width:90% ;
            padding:10px ;
        }
       
    </style>
</head>
<body>
    <div class="login-form">
        <form action="" method="post">
            <div style="font-size:30px ; margin:10px; color:white">Sign Up</div>
            <label for="">User Name:</label>
                <input type="text" name="name" id="in"> <br> <br>
            <label for="">Email: </label>
                <input type="email" name ="email" id="in"><br><br>
            <label for="">Password: </label>
                <input type="password" name ="password" id="in"><br> <br>
            <input type="submit" name="signup" value="signup"> <br> <br>

            <button><a href="login.php">Click to Login</a></button>
        </form>
    </div>
</body>
</html>