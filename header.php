<?php

session_start();

?>

<!DOCTYPE html>
<html lang ="en">

<head>
    <meta charset ="utf-8">
    <meta name=viewport content ="width=devie-width, initial-scale=1">
    <title></title> 
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>

<body>

<div class="navbar navbar-inverse bg-dark">

    <div class="navbar-header -">
      <a class="navbar-brand" href="https://github.com/Anirudh-R-1201">DeltaProject</a>
    </div>
        <ul class="nav navbar-nav">
        <li><a href="index.php">HOME</a></li>
        <li><a href="more.php">KNOW MORE</a></li>
        <li><a href="abtme.php">ABOUT ME</a></li>
        </ul>
    
    
    <?php
        if(isset($_SESSION['username'])){
            
            echo '<form action="includes/logout.php" method="post">
            <button type="submit" name="logout-submit" class = "btn btn-success" style="float : right; margin:10px;">LOGOUT</button>
            </form>';
        }
        else{
            echo '<div style = "float:right;margin:10px"   >
            <form action="includes/login.php" method="post">
            <input type="text" name ="username" placeholder="Username....">
            <input type="password" name ="pwd" placeholder="Password....">
            <button type="submit" name="login-submit" class ="btn">SIGN IN</button>
            </form></div><br><br><br><br>
            ';
        }
       
    ?>
</div>
