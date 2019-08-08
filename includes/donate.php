<?php

if(isset($_POST['donate-submit'])){
session_start();


$oneyr=$_POST['oneyr'];
$sxm = $_POST['sixm'];
$thm= $_POST['threem'];
$onm= $_POST['onem'];
$sth= $_POST['72h'];
$fth= $_POST['48h'];
$tfh = $_POST['24h'];
$cond= $_POST['cond'];
$pre= $_POST['pre'];
$preg= $_POST['preg'];
$menstrual= $_POST['menstrual'];


if($oneyr=="no"&&$sxm=="no"&&$thm=="no"&&$onm=="no"&&$sth=="no"&&$fth=="no"&&$tfh=="no"&&$cond=="no"&&$pre=="no"&&$preg=="no"&&$menstrual=="no"){
    $_SESSION['check'] ="clear";
    $_SESSION['donorphone'] = $_POST['phone'];
    header('Location: ../donation.php?request=success');               
    exit();;
}

else{
    header('Location: ../index.php?error=poisn');               
    exit();
}


}

else{
    header('Location: ../index.php?');               
    exit();
}
?>