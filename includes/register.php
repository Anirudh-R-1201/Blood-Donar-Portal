<?php
session_start();

function registeruser(){
    
    require 'dbh.php';

    $username = $_SESSION['uid'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $weight = $_POST['weight'];
    $blood = $_POST['blood'];

    if($age == NULL)
    {
        header('Location: ../registration.php?error=ageempt');               
        exit();
    }
    else if($gender == NULL){
        header('Location: ../registration.php?error=geneempt');               
        exit();
    }
    else if($weight == NULL){
        header('Location: ../registration.php?error=wgtempt');               
        exit();
    }
    else if($blood == NULL){
        header('Location: ../registration.php?error=bldempt');               
        exit();
    }

    $sql = " INSERT INTO info (username, age, gender, weight, bloodtype) VALUES (?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt,$sql);
                    mysqli_stmt_bind_param($stmt, "sssss", $username, $age, $gender,$weight,$blood);
                    mysqli_stmt_execute($stmt);
                    header('Location: ../index.php?regis=success');
                    exit();

}

if(isset($_POST['register-submit'])){
registeruser();
}

else{
    
header('Location: ../index.php?');               
exit();
}
?>