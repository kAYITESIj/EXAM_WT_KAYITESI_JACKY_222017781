<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mm</title>
</head>
  <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .order-section {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin: 50px auto;
            max-width: 600px;
        }
        .order-section h2 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }
        .order-form {
            background-color: #f9f9f9;
            padding: 30px;
            border-radius: 8px;
            border: 1px solid #ddd;
        }
     
      input[type="text"]
      
     
      {
            width: 40%;
            margin: 10px;
            padding: 18px;
            border: 2px solid black;
            border-radius: 5px;
            font-size: 16px;
            color: #555;
            transition: border-color 0.3s ease;

        }
       input[type="text"]:focus
    
       {
            outline: none;
            border-color: #4CAF50;
        }
     
       
    button[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            margin: 10px;
            padding: 18px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }
       input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
<body> <li><a href="index.php">home</a></li>
    <form action="" method="POST">
        <h1>register materials</h1><br>
<input type="text" name="name" placeholder="enter matrial name"><br>
<input type="text" name="unit" placeholder="enter unit"><br><br>
<button type="submit" name="send">register</button></form>
</body>
</html>
<?php
$db=new mysqli('localhost','root','','landscape_design_service');
if (isset($_POST['send'])) {

$name=$_POST['name'];
$unit=$_POST['unit'];
$insert="INSERT INTO materials VALUES('','$name','$unit')";
$c=mysqli_query($db,$insert);
if ($c) {
    // code...
    echo "registered successful";
}
else{
    echo "jk";
}}

?>