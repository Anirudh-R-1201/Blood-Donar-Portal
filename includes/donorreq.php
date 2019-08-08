<?php
session_start();


if(isset($_POST['id'])){

    require 'dbh.php';

    $id = $_POST['id'];
    $donor = $_SESSION['username'];
    $did = $_SESSION['id'];
    $ph = $_SESSION['donorphone'];
    $_SESSION['checkid'.$id.''] = $id;
   
        $sql = "INSERT INTO `donorreq`(`id`, `username`, `did`, `phone`) VALUES (?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);      
        mysqli_stmt_prepare($stmt,$sql); 
        mysqli_stmt_bind_param($stmt, "ssss", $id, $donor, $did,$ph);
        mysqli_stmt_execute($stmt);
       header('Location: ../donation.php?don=suc&rec='.$id);
        exit();

}

else{
    header("Location: ../index.php?");
    exit();
}