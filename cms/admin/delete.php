<h2>delete the post</h2>
<?php
    $id =$_GET['id'] ;
    $con =mysqli_connect("localhost","root","","crm")or die('connection failed');
    $sql ="delete from post where id=$id" ;
    $result =mysqli_query($con,$sql)or die("query failed") ;
    header("Location: http://localhost/phpAssignment/cms/admin/home.php");

?>