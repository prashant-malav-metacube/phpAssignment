<?php
    $id =$_GET['id'];
    echo $id ;
    $stu_name =$_POST['name'] ;
    $stu_address =$_POST['address'] ;
    $stu_class =$_POST['class'] ;
    $stu_contact =$_POST['contact'] ;


$sqlconnection =mysqli_connect("localhost","root","","crud") or die("connection failed");
$sql ="update student set s_id=$id, s_name='$stu_name',s_address='$stu_address',s_class='$stu_class',s_contact='$stu_contact' where s_id=$id ";
$result =mysqli_query($sqlconnection,$sql)  or die("query unsuccessful.");
echo "<h1>Student Added</h1>" ;
header("Location: http://localhost/phpAssignment/crud/index.php");
mysqli_close($sqlconnection) ;
?>
