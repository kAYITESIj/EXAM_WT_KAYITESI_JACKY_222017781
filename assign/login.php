<?php

    $db=new mysqli('localhost','root','','landscape_design_service');
if (isset($_POST['send'])) {
 
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sele ="SELECT * FROM user WHERE email = '$email' AND password='$password' ";
    $chks=mysqli_query($db,$sele);
    $row=mysqli_num_rows($chks);
    if ($row==0) {
      header('location:index.php');
    }
    else
    {
        echo "invalid email or password";
    }}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style type="text/css">
        
   .login
   {
    width: 350px;
    height: 400px;
    background-color: #090d09;
    justify-content: center;
    align-items: center;
   margin-left: 450px;
    border-radius:10px;
text-transform: capitalize;
 }
    ::placeholder
    {
        color: white;
        text-transform: uppercase;
        text-align: center;
        font-size: smaller;
    }
   input
   {
    width: 70%;
    padding: 10px;
    margin-left: 50%;
    border-radius: 5px;
    overflow: hidden;
    outline: none;
    margin: 10px;
    color: white;
    background: transparent;
    border-bottom: 2px solid gray;

   }
   button
   {
    width: 250px;
    padding: 10px;
    border: none;
    background-color: #5dbf76;
    margin-left: 10px;
    border-radius: 10px;
    cursor: pointer;
    font-size: larger;
       }
       button:hover{
        background-color: #08da3e;
        color: white;
       }
   h1
   {
    text-align: center;
    text-transform: uppercase;
    color: #fff;
    padding-top: 20px;

   }
.input{
    margin-left: 32px;
}
i{
    color: #fff;
}

 i, a, p {
    font-size: 22px;
    text-transform: capitalize;


 }
 p{
    text-align:center;
    color: white;
 }
 a{
    color: #3fabc7;
 }
    </style>
</head>
<body>
   
    <form action="" method="post">
        <div class="login">
             <h1>Login</h1>
             <form class="login-form" action="login.php" method="POST">
 <div class="input">
    <input type="email" id="email" name="email" placeholder="enter your email">

    <input type="password" id="password" name="password" placeholder="enter your password"><br><br>
    
   &nbsp;&nbsp;&nbsp;&nbsp; <i>forget password</i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="">click me</a><br><br>
<button type="submit" name="send">login</button></div>
<p>create account&nbsp;&nbsp;&nbsp;&nbsp;<a href="register.php">click here</a></p>
</div>
 </form>
</body>
</html>
