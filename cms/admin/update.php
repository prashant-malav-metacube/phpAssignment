<h2>update the post data</h2>
<?php
$id = $_GET['id'];
echo $id ;
$con = mysqli_connect("localhost", "root", "", "crm") or die("connection failed");
$query = "select * from post where id='$id'";
$result = mysqli_query($con, $query) or die("query unsuccessful");
$row = mysqli_fetch_array($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $text = $_POST['text'];
    $cat = $_POST['cat'];
    $sql = "update post set title='$title',text ='$text',category='$cat' where id =$id";
    $ans = mysqli_query($con, $sql) or die("query2 unsuccessful");
    header("Location: http://localhost/phpAssignment/cms/admin/home.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .update-form{
            box-sizing: border-box;
            margin: 20px;
        }
        form input,textarea{
            padding: 10px;
            margin: 10px;
        }
        textarea{
            margin-left: 50px;
        }
        button{
            margin: 10px;
            padding: 10px;     
        }

    </style>
</head>

<body>
    <div class="update-form">
    <form action="" method="POST">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="<?php echo $row['title']; ?>"> <br>
        <label for="cat">Category:</label>
        <input type="text" name="cat" value="<?php echo $row['category']; ?>"> <br>

        <label for="Content">Post content:</label> <br>
        <textarea name="text" id="content" cols="30" rows="10"><?php echo $row['text']; ?></textarea> <br>
    
        <button type="submit">update</button>
        
    </form>
    </div>
    
</body>

</html>