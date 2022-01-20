<?php
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
        .data{
            display: flex;
            justify-content: space-between;
            margin-left: 100px;
        }
        button{
            padding: 15px;
            margin-left: 10px;
        }
    </style>
</head>
<body>
<div>
    <h1 style="text-align: center;">Admin Pannel</h1>
    <h2>Add new page</h2>
    <button><a href="add-page.php">Add</a></button>
</div>
<?php
    while($row =mysqli_fetch_assoc($result))
    {
    ?>
    <div class="data">
        <div>
            <h2>Title:<?php echo $row['title']?></h2>
        </div>
        <div>
            <button><a href="update.php?id=<?php echo $row['id'];?>">Update</a></button>
            <button><a href="delete.php?id=<?php echo $row['id'];?>">delete</a></button>
        </div>
    </div>
        
    <?php
     }
    ?>
<div>

</div>
</body>
</html>
