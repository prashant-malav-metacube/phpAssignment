<!-- <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $text = $_POST['text'];
    $cat = $_POST['cat'];

    $con = mysqli_connect("localhost", "root", "", "crm") or die("connection failed");
    $query = "insert into post (title,text,category)values('{$title}','{$text}','{$cat}')";
    $result = mysqli_query($con, $query) or die("failed query");
    header("Location: http://localhost/phpAssignment/cms/admin/home.php");
}
?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form input,
        textarea {
            padding: 10px;
            margin: 10px;
        }

        textarea {
            margin-left: 50px;
        }

        button {
            margin: 10px;
            padding: 10px;
        }
    </style>
</head>

<body>
    <h2>Add new Post Here.....</h2>
    <div class="add-form">

        <form action="#" method="post">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title"> <br>
                <h5 class="addtitle"></h5>
            </div>
            <div class="form-group"><label for="Content">Post content:</label> <br>
                <textarea name="text" id="content" cols="30" rows="10"></textarea> <br>
            </div>

            <div class="form-group">
                <label for="cat">Category:</label>
                <input type="text" name="cat"> <br>
            </div>
            <button type="submit">Add</button>

        </form>
    </div>
    <script>
       $(document).ready(function(){
           $('#addtitle').hide();
           $('#title').keydown(function()
           {
            alert("title") ;
           });
       });
    </script>
</body>

</html>