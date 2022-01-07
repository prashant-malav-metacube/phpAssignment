<?php
    $stu_name =$_POST['name'] ;
    $stu_address =$_POST['address'] ;
    $stu_class =$_POST['class'] ;
    $stu_contact =$_POST['contact'] ;


$sqlconnection =mysqli_connect("localhost","root","","crud") or die("connection failed");
$sql ="insert into student(s_name,s_address,s_class,s_contact) values('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_contact}')";
$result =mysqli_query($sqlconnection,$sql)  or die("query unsuccessful.");
echo "<h1>Student Added</h1>" ;
header("Location: http://localhost/phpAssignment/crud/index.php");
mysqli_close($sqlconnection) ;
?>
