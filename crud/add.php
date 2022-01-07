
<?php
    include('header.php') ;
    $sqlconnection =mysqli_connect("localhost","root","","crud") or die("connection failed");
    $sql ="select * from student_class";
    $result =mysqli_query($sqlconnection,$sql)  or die("query unsuccessful.");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add data into database</title>
    <style>
        label ,input{
            padding :10px ;
            margin :10px ;
        }
    </style>
</head>
<body>
        <form action="save_data.php" method="post">
            <label for="name">Name:</label>
                <input type="text" name ="name"><br>
            <label for="address">Address:</label>
                <input type="text" name ="address"><br>
            <label for="course">Student Course:</label>
            <select name="class" id="">
            <?php
           
                while($row =mysqli_fetch_array($result))
                {
                ?>
                    <option value="<?php echo $row['c_id'];?>">
                        <?php echo $row['c_name'] ; ?>
                        </option>

                <?php
                  }
               ?> 
               </select> <br>
            
            <label for="contact">Mobile Number:</label>
                <input type="text" name ="contact"> <br>
           
            <input type="submit" value ="submit" name ="submit">
        </form>


</body>
</html>