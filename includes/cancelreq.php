<?php
session_start();

function canreq(){
    require 'dbh.php';

    $username=$_SESSION['username'];
    $id = $_SESSION['id'];

    $sql = "DELETE FROM `request` WHERE username IN (?)";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_store_result($stmt);mysqli_stmt_execute($stmt);

    $sql = "DELETE FROM `donorreq` WHERE id IN (?)";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_bind_param($stmt, "s", $id);
    mysqli_stmt_store_result($stmt);

    $resultcheck = mysqli_stmt_num_rows($stmt);
    if($resultcheck >0){
        header('Location: ../index.php?req=none');
        exit();
    }
    else{
        mysqli_stmt_execute($stmt);
        header('Location: ../index.php?req=cancl');
        exit();}
}
    
if(isset($_POST['submit'])){
    unset($_SESSION['donor']);unset($_SESSION['phone']);
    canreq();

        }
        
        else{
            
        header('Location: ../index.php?');               
        exit();
        }
    
    