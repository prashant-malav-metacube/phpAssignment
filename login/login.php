<?php
    session_start();
    include('header.html');
    include("check_for_login.php") ;
    $sqlconnection = mysqli_connect("localhost","root","","login") or die("Connection failed.") ;
    
    if(!isset($_SESSION['id']))
    {
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
            $user_email = $_POST['email'];
            $password = $_POST['password'];
            if(!empty($user_email) && !empty($password))
            {
                $query = "select * from user where email = '$user_email' and password ='$password' limit 1";
                $result =mysqli_query($sqlconnection,$query) or die("unsuccesful") ;                    
                if(mysqli_num_rows($result)>0)
                {
                    $user_data = mysqli_fetch_assoc($result);
                // if($user_data['password'] == $password)
                // {
                    $_SESSION['id'] =$user_data['id'] ;
                    $_SESSION['name'] =$user_data['name'] ;
                    header("Location: home.php") ;
                    die ;
                }
                else
                {
                    echo " enter valid email or password" ;
                }
            }
        }
    } 
    else{
        $message = " you already login..Logout first...";
        echo "<script type='text/javascript'>alert('$message');</script>";
        die ;
    } 
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        .login-form{
            background-color :grey ;
            margin:auto ;
            margin-top:50px;
            width:400px ;
            padding :20px ;
        }
        label ,p{
            color:white ;
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
            <div style="font-size:30px ; margin:10px; color:white">Login</div>
            <label for="">Email: </label>
                <input type="email" name ="email" id ="in"><br><br>
            <label for="">Password: </label>
                <input type="password" name ="password" id="in"><br> <br>
            <input type="submit" name="login" value="Login"> <br> <br>

           <p>Don't have account?<a href="signup.php">Click to Signup</a></p> 
           <button><a href="logout.php">Logout</a></button>
        </form>
    </div>
</body>
</html>