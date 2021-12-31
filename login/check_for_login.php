<?php
$sqlconnection = mysqli_connect("localhost","root","","login") or die("Connection failed.") ;

    function check_login($sqlconnection){
        if(isset($_SESSION['id'])){
            $id =$_SESSION['id'] ;
            $query ="select * from user where id = $id" ;
            $result =mysqli_query($sqlconnection,$query) ;

            if(mysqli_num_rows($result)>0){
                $row =mysqli_fetch_assoc($result);
                return $row ;  
            }
        }else{
            echo "please Login....." ;
        }
        header("Location: login.php");
        die ;
    }
    
?>