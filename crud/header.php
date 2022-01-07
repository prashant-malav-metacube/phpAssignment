<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CRUD</title>
  <style>
      #headline{
          color:cadetblue ;
          font-size: 30px;
      }
      #menu {
          font-size:25px ;
          padding: auto;
      }
      button{
          cursor: pointer;
          font-size: 15px;
          padding: 15px;
          margin: 10px;
          background-color: blue;
          border-radius: 5px;
        
      }
     
      a{
          text-decoration: none;
          color: white;
      }
  </style>
</head>
<body>
    <div id="top">
        <div id="headline">
            <h1>Student Record Table</h1>
        </div>
        <div id="menu">
            <p>Add a new student</p> 
           <button onclick="adddata()">Add</button>
        </div>
    </div>
    <script>
        function adddata(){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
        
                document.body.innerHTML = xhttp.responseText;
            }
            };
            xhttp.open("GET", "add.php", true);
            xhttp.send();
        }
       
    </script>
</body>
    


