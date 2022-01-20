<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email =$_POST['email'] ;
    $password =$_POST['password'] ;
    $con =mysqli_connect("localhost","root","","crm")or die('connection failed');
    $sql ="select * from admin" ;
    $result =mysqli_query($con,$sql)or die("query failed") ;
    $row =mysqli_fetch_assoc($result);
    if($row['email']==$email && $row['password']==$password){
        header("Location: http://localhost/phpAssignment/cms/admin/home.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .admin{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            width: 100%;   
            
        }
        form{
         /* border: 2px solid lightslategray; */
           
        }
        .form-group{
            padding: 15px;
            margin-bottom: 10px;
            
        }label{
            padding: 10px;
        }
        .form-group,input,label{
            width: 100%;
            
            padding: 10px;
            font-size: 20px;
        }
        button{
            margin: 10px;
            width: 95%;
            padding: 10px;
        }
        button:hover{
            cursor: pointer;
        background-color: lightblue;
        }


    </style>
</head>

<body>
    <div class="admin">
        <form action="" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </div>

            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>