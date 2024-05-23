<?php

$db=new mysqli('localhost','root','','landscape_design_service');
if (isset($_POST['send'])) {


$name=$_POST['name'];
$email=$_POST['email'];
$date=$_POST['date'];
$password=$_POST['password'];
$insert="INSERT INTO user VALUES('','$name','$email','$date','$password')";
$check=mysqli_query($db,$insert);
if ($check) {
    header('location:login.php');

}
else
{
    echo "oya bro";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="">

<style type="text/css">
    
      
   .login
   {
    width: 350px;
    height: 460px;
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
    color: white;
    text-transform: uppercase;
       }
       button:hover{
        background-color: #08da3e;
        color: white;
        transition: 1.5s;
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
    

    <form action="" method="POST">
                <div class="login">
             <h1>sign up</h1>
 <div class="input">

    <input type="text" id="name" name="name" placeholder="enter your name">

    <input type="email" id="email" name="email" placeholder="enter your email">


    <input type="date" name="date" placeholder="YY/DD/MM">
    <input type="password" id="password" name="password" placeholder="enter your password">

<br><br>
    <button type="submit" name="send">sign up</button>
<p>have an account&nbsp;&nbsp;&nbsp;&nbsp;<a href="login.php">click me</a></p>
</div></div>

</body>
</html>