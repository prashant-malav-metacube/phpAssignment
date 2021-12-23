<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Reverse string...</h2>
    <?php
        $message ="Welcome in Metacube";
        function reverseWords($message){
            $res="" ;
            $message1 =explode(" ",$message) ;
            foreach($message1 as $val){
                $res.=strrev($val)." " ;
            }
            return $res ;
        }
        echo reverseWords($message) ;
    ?>
    <h3>Call by value or Call by Reference</h3>
    <?php
        $a =3 ;
        $b =4 ;
        function multiple($a ,$b){
            return $a*$b ;
        }
        echo $z =multiple($a,$b) ;
        echo "<br>" ;
        function multipleCallByReference(&$a,&$b){
            return $a*$b ;
        }
        echo $res =multipleCallByReference($a,$b) ;

    ?>
    <h3>Recursion</h3>
    <?php
    $n=6 ;
    function factorial($n){
        if($n<0){
            return -1 ;
        }
        if($n==0){
            return 1 ;
        }
        return ($n*factorial($n-1));
    }
    echo "factorial of $n is :".factorial($n) ;
?>
    
</body>
</html>