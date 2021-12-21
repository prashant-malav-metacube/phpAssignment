<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phpAssignment-1</title>
</head>
<body>
 <h1> <?php echo "implode function" ?></h1>
 <h3>Array to string...</h3>
 <p>example: color_array =['Red' ,'yello','White'] <br>
in a string :</p>
 <?php
 $colors =array("Red","Yello","White");
 $res =implode("-",$colors) ;
 echo "Colors are:",$res ;
 echo "<br>" ;
?>
<h1>Explode function</h1>
<h3>is used to split a string by a specified string into pieces..(String into an array)</h3>
<p>Example: string ="My name is prashant"</p>
<?php
$biodata ="My name is prashant" ;
$res =explode(" ",$biodata) ;

var_dump($res) ;
?>
<h1>reverse a string</h1>
<p>String: "Welcome to th world"</p>
<?php
$message ="Welcome to the world" ;
$revMessage="" ;
//for reverse the above string using for loop
for ($i=strlen($message)-1; $i>=0; $i--) { 
    # code...
    $revMessage.= $message[$i] ;
}
echo "Reverse string is: ".$revMessage ;
?>


<h2>using strrev() function </h2> 
<p>String: "Hey Prashant"</p>
<?php
$message1 ="Hey Prashant" ;
$message2= strrev($message1) ;
echo "Reverse string is: ".$message2;

?>
    
</body>
</html>
