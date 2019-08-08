<?php

session_start();

function loginuser() {

    require 'dbh.php';

    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    if($username == NULL)
    {
        header('Location: ../index.php?error=feildsempty');               
        exit();
    }
    else if($pwd == NULL){
        header('Location: ../index.php?error=pwdempty&Username='.$username);               
        exit();
    }



    $sql = "SELECT * FROM users WHERE uidusers=? ";
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt,$sql);

        mysqli_stmt_bind_param($stmt,"s", $username);
        mysqli_stmt_execute($stmt);
        $results = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_array($results);
        $pwdcheck = password_verify($pwd, $row['pwdusers']);
            if(!$row){
                header("Location: ../index.php?error=nouser");
                    exit(); 
            } 
            else if($pwdcheck){      
                    $_SESSION['username'] = $row['uidusers'];
                    $_SESSION['id'] = $row['idusers'];
                    $dcheck = $row['idusers'];

                    $sql = "SELECT * FROM info WHERE username=? ";
                    $stmt = mysqli_stmt_init($conn);
                    mysqli_stmt_prepare($stmt,$sql);
                    mysqli_stmt_bind_param($stmt,"s", $username);
                    mysqli_stmt_execute($stmt);

                    $results = mysqli_stmt_get_result($stmt);
                    $row = mysqli_fetch_array($results);

                    $_SESSION['age']=$row['age'];
                    $_SESSION['gender']=$row['gender'];
                    $_SESSION['blood']=$row['bloodtype'];
                    

##checking for requests

                    $sql = "SELECT * FROM donorreq WHERE id IN (?) ";
                    $stmt = mysqli_stmt_init($conn);
                    mysqli_stmt_prepare($stmt,$sql);
                    mysqli_stmt_bind_param($stmt,"s", $dcheck);
                    mysqli_stmt_execute($stmt);

                    $results = mysqli_stmt_get_result($stmt);
                    $row = mysqli_fetch_array($results);
                   

                    if($row['id']== NULL){
                        header("Location: ../index.php?login=success");
                        exit();
                    }
                    else{
                        $_SESSION['donor'] = $row['username'];
                        $_SESSION['phone'] = $row['phone'];
                        header("Location: ../index.php?login=success&don=".$row['username']);
                        exit();
                    }
                    
                                       
            
            }
            else{
                header("Location: ../index.php?error=wrngpwd");
            exit();
            }
        }   
        if(isset($_POST['login-submit'])){
            loginuser();
            }
            
            else{
                
            header('Location: ../index.php?');               
            exit();}

?>

