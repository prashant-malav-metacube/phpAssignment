<?php
    
    include('header.php');
    $sqlconnection =mysqli_connect("localhost","root","","crud") or die("connection failed");
    $sql_for_record ="select * from student join student_class where student.s_class = student_class.c_id ";
    $res =mysqli_query($sqlconnection,$sql_for_record);
    $total_record =mysqli_num_rows($res) ;
    //echo "total:".$total_record."<br>" ;
    $pages =ceil($total_record/5);
    // echo "pages".$pages."<br>";
    $start=0;
    $curr=1 ;
    if(isset($_GET['start'])){
        $start =$_GET['start'] ;
        //echo "start".$start."<br>" ;
        //echo "curr".$curr."<br>" ;
        if($start>$pages){
            $start=$pages ;
            $curr=1;
        }
        if($start<=0){
            $start=0 ;
            $curr=1 ;
        }
        else{
        $curr =$start ;
        $start-- ;
        $start =$start*5 ;
        }
    }
    // echo $start ;
    $sql ="select * from student join student_class where student.s_class = student_class.c_id limit $start,5" ;
    $result =mysqli_query($sqlconnection,$sql)  or die("query unsuccessful.");

    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <style>
        a{
            color:black;
        }
        .record{
            font-size: 20px;
            border: 5px solid black;
            text-align: center;
            margin-left: auto;
            margin-right: auto;            
        }
        .record table{
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }
        th,tr,td {
            padding: 15px;
            margin:20px;
            /* border: 1px solid black; */
        }
        td{
            font-size:20px;    
            }
        .pagintation{
            font-size: 25px;
            text-align:  center;
            margin: 5px;
            padding: 15px;
        }

    </style>
</head>

<body>
    <?php 
    if(mysqli_num_rows($result)>0)
    {
     ?>
    <div class="record">
        <h1>Student Record</h1>
        <table>
            <thead>
                <th>S_id</th>
                <th>S_name</th>
                <th>S-address</th>
                <th>S_class</th>
                <th>S_contact</th>
                <th>options</th>
            </thead>
            
            <tbody>
                <?php
                while($row =mysqli_fetch_array($result))
                {
            ?>
                <tr>
                    <td>
                        <?php echo $row['s_id']; ?>
                    </td>
                    <td>
                        <?php echo $row['s_name']; ?>
                    </td>
                    <td>
                        <?php echo $row['s_address']; ?>
                    </td>
                    <td>
                        <?php echo $row['c_name']; ?>
                    </td>
                    <td>
                        <?php echo $row['s_contact']; ?>
                    </td>
                    
                    <td>
                       <?php $dummy=$row['s_id'] ?> 
                        
                        <button onclick="update( <?php echo $dummy ;?>)">update</button>
                        <button onclick="deletedata(<?php echo $dummy;?>)">Delete</button>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody> 
        </table>
    </div>
    <?php }
    else{
        echo "<h1 style='text-align:center'>No more records...Go on previous pages..</h1>";
    }
 ?>
    <div class="pagintation">
    <a href="?start=<?php echo $curr-1 ;?>">Prev</a>
    <?php
        for($i = 1; $i<=$pages; $i++) 
        { ?>  
            <a href ="?start=<?php echo $i;?>"><?php echo $i;?></a>
        <?php
        } 
    ?>
    <a href="?start=<?php echo $curr+1;?>">Next</a>
    
 </div>
 <script>
         function update($dummy){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.body.innerHTML = xhttp.responseText;
            }
            };
            alert($dummy) ;
            xhttp.open("GET", "update.php?id="+$dummy, true);
            xhttp.send();
        }
        function deletedata($dummy){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.body.innerHTML = xhttp.responseText;
            }
            };
            alert($dummy) ;
            xhttp.open("GET", "delete.php?del_id="+$dummy, true);
            xhttp.send();
        }
    </script>
</body>

</html>