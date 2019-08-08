<?php
session_start();

function signupuser() {
    require 'dbh.php';
    
    $username=$_POST['username'];
    $email =$_POST['email'];
    $pwd=$_POST['pwd'];
    $pwdr=$_POST['pwd-repeat'];
 
    
        $sql = "SELECT uidusers FROM users WHERE uidusers=?";
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt,$sql);
        

            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt);

            if($email==NULL){$email = " ";}

            if($username == NULL&&$pwd == NULL){
                header('Location: ../index.php?error=feildsempty');               
                exit();
            }
            else if($username == NULL){
                header('Location: ../index.php?error=uidempty');               
                exit();
            }
            else if($pwd == NULL|| $pwdr==NULL){
                header('Location: ../index.php?error=pwdempty&username='.$username);               
                exit();
            }
            if($resultcheck > 0){
                
                header('Location: ../index.php?error=uidtaken');               
                exit();
            }

            if($pwd == $pwdr){
               
                $sql = " INSERT INTO users (uidusers, emailusers, pwdusers) VALUES (?,?,?)";
               
                mysqli_stmt_prepare($stmt,$sql);
                    $password = password_hash($pwd, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);
                    mysqli_stmt_execute($stmt);
                    $_SESSION['uid'] = $username;
                    header('Location: ../registration.php?signup=success');
                    exit();
                }
            else{
             
                header('Location: ../index.php?error=pwdnotequal');
                exit();
            }
      
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}
if(isset($_POST['signup-submit'])){
    signupuser();
    }
    
    else{
        
    header('Location: ../index.php?');               
    exit();
    }


?>

