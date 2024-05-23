<?php

$db=new mysqli('localhost','root','','landscape_design_service');
if (isset($_POST['send'])) {

$name= $_POST['name'];
$email= $_POST['email'];
$service= $_POST['service'];
$buy= $_POST['buy'];



$insert= "INSERT INTO ordering VALUES('','$name','$email','$service','$buy')";
$check=mysqli_query($db,$insert);



if ($check) {
    echo "f";
}
else 
{
    echo "gg";
}
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order and Payment</title>
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
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
            color: #555;
        }
        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            color: #555;
            transition: border-color 0.3s ease;
        }
        .form-group input[type="text"]:focus,
        .form-group input[type="email"]:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #4CAF50;
        }
        .form-group select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background: url('https://cdn.jsdelivr.net/gh/FortAwesome/Font-Awesome@4.7.0/assets/font-awesome/fonts/fontawesome-webfont.woff') no-repeat right 10px center;
            background-size: 25px;
        }
        .form-group textarea {
            resize: none;
        }
        .form-group input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 15px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }
        .form-group input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
 
<div class="order-section">
    <li style="text-transform: uppercase;"><a href="index.php"style="text-decoration: none;">home</a></li>
    <li style="text-transform: uppercase;"><a href="login.php" style="text-decoration: none;">logout</a></li>
    <h2>Order and Payment</h2>
    <div class="order-form">
        <form action="" method="POST">
            <div class="form-group">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="service">Select Service:</label>
                <select id="service" name="service" required>
                    <option value="">Select</option>
                    <option value="Garden Design">Garden Design</option>
                    <option value="Garden Installation">Garden Installation</option>
                    <option value="Maintenance Services">Maintenance Services</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="buy">buy:</label>
                <input type="text" name="buy" required>
            </div>
            <div class="form-group">
                <button type="submit" name="send" >buy</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
