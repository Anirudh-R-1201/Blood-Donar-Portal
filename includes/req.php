<?php
session_start();

function addreq(){
    require 'dbh.php';

    $blood = $_SESSION['blood'];
    $age = $_SESSION['age'];$id = $_SESSION['id'];
    $gender = $_SESSION['gender'];
    $username=$_SESSION['username'];
    $email =$_POST['email'];
    $phno =$_POST['phno'];
    $loc = $_POST['loc'];
    $breq = $_POST['breq'];
    $urgency = $_POST['urgency'];
    $starttime = date('Y-m-d H:i:s');
    $dor = date('Y-m-d H:i:s',strtotime('+'.$urgency.' hour ',strtotime($starttime)));


        $sql = " INSERT INTO request (id,username, blood, email,phone,age,location,gender,breq,urgency) VALUES (?,?,?,?,?,?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt,$sql);
            mysqli_stmt_bind_param($stmt, "ssssssssss",$id ,$username, $blood, $email,$phno,$age,$loc,$gender,$breq,$urgency);
            mysqli_stmt_execute($stmt);
            header('Location: ../index.php?req=suc');               
            exit();
    }

if(isset($_POST['submit'])){
   
addreq();
    }
    
    else{
        
    header('Location: ../index.php?');               
    exit();
    }

