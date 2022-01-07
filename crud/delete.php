<?php
    include('header.php');
    $id =$_GET['del_id'];
    echo $id ;
$sqlconnection =mysqli_connect("localhost","root","","crud") or die("connection failed");
$sql =" delete from student where s_id=$id" ;
$result =mysqli_query($sqlconnection,$sql)  or die("query unsuccessful.");
header("Location: http://localhost/phpAssignment/crud/index.php");
?>