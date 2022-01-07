
<?php
   include('header.php') ;
   $id =intval($_GET['id']);
   $sqlconnection =mysqli_connect("localhost","root","","crud") or die("connection failed");
   $sql ="select * from student_class";
   $result =mysqli_query($sqlconnection,$sql)  or die("query unsuccessful.");
   $sql1 ="select * from student where s_id=$id" ;
   $ans =mysqli_query($sqlconnection,$sql1) or die("query unsuccesful") ; 
   if($row1=mysqli_fetch_array($ans)){
       $name=$row1['s_name'];
       $address =$row1['s_address'];
       $contact =$row1['s_contact'] ;
   }
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
    <h2>Update data of student....</h2>
        <form action="save_update.php?id=<?php echo $id;?>" method="post">
            <label for="name">Name:</label>
                <input type="text" name ="name" value="<?php echo "$name" ;?>"><br>
            <label for="address">Address:</label>
                <input type="text" name ="address" value="<?php echo "$address"; ?>"><br>
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
                <input type="text" name ="contact" value="<?php echo "$contact" ;?>"> <br>
           
            <input type="submit" value ="update" name ="update">
        </form>

</body>
</html>