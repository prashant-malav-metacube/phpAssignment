<?php
    include('nav.php') ;
    $con = mysqli_connect("localhost", "root","","crm") or die("connection failed");
    $query = "select * from post" ;
    $result =mysqli_query($con,$query) or die("query unsuccessful") ;
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .admin{
            padding: 15px; 
        }
        a{
            font-size: 20px;
        }
        .content{
            margin: 15px;
        }
        .admin a{
            font-size: 25px;
            color: black;
        }
        .post{
            padding: 10px;
            margin: 10px;
        } 
    </style>
</head>
<body>
    <div class="admin">
        <button><a href="admin/login.php">Admin</a></button>
    </div>
    <div class="content">
        <?php
        while($row =mysqli_fetch_assoc($result))
        {
            ?>
            <div class="post">
             <h2><?php echo $row['title']?></h2> <br>
             <p><?php echo $row['text']?></p> <br>
             <hr>
        </div>
        
        <?php 
        }
        ?>
    </div>
</body>
</html>