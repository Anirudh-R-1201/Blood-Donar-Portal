<?php


require 'header.php';
function donation(){
    require 'includes/dbh.php';
    echo'<div style="float:right;color:green;"><p>YOU ARE ELIGIBLE TO DONATE :)</p></div>
   <div class ="container-fluid text-center bg-4"><h2>HERE ARE SOME COMPATABLE ACCEPTORS</h2><br><h5>PLEASE CONTACT THEM DIRECTLY TO SEE IF YOU COULD HELP</h5></div>    
   ';
   
   
   
  
    $username = $_SESSION['username'];
    $age = $_SESSION['age'];
    $gender = $_SESSION['gender'];
    $blood =$_SESSION['blood']; 
    $curtime = strval(date('Y-m-d H:i:s'));
    if($blood =="O+"){
        $sql = "SELECT * FROM request WHERE blood IN ('O+', 'A+','B+','AB+')  ";
    }
    elseif($blood =="B+"){
        $sql = "SELECT * FROM request WHERE blood IN ('B+','AB+') ";}
        
    elseif($blood =="A+"){
        $sql = "SELECT * FROM request WHERE blood IN ('A+','AB+') ORDER BY urgency";}
        
    elseif($blood =="AB+"){
        $sql = "SELECT * FROM request WHERE blood IN ('AB+')  ORDER BY urgency";}
        
    elseif($blood =="O-"){
        $sql = "SELECT * FROM request  ORDER BY urgency ";}
        
    elseif($blood =="B-"){
        $sql = "SELECT * FROM request WHERE blood IN ('B-', 'B+','AB-','AB+')  ORDER BY urgency";}
        
    elseif($blood =="A-"){
        
        $sql = "SELECT * FROM request WHERE blood IN ('A-', 'A+','AB-','AB+')  ORDER BY urgency";}
        
    elseif($blood =="AB-"){
        $sql = "SELECT * FROM request WHERE blood IN ('AB+','AB-')  ORDER BY urgency";}

        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt,$sql);
        mysqli_stmt_execute($stmt);
        $results = mysqli_stmt_get_result($stmt);
        if (mysqli_num_rows($results) > 0){
            echo'
            <div class="table-responsive" style="margin:10px; ">          
            <table class="table">
              <thead>
                <tr>
                  <th>USER</th><th>BLOOD-GROUP</th>
                  <th>AGE</th>
                  <th>GENDER</th>
                  <th>LOCATION</th>
                  <th>CONTACT MAIL</th>
                </tr>
              </thead>
              <tbody>';
            while($row = mysqli_fetch_assoc($results)){

               if($curtime<$row['dor']){
                echo'<tr>
                <td>'.$row['username'].'</td>
                <td>'.$row['blood'].'</td>
                <td>'.$row['age'].'</td>
                <td>'.$row['gender'].'</td><td>'.$row['location'].'</td>
                <td>'.$row['email'].'</td>
                
                <td>
                ';
                if(isset($_SESSION['checkid'.$row['id'].''])){
                    if($_SESSION['checkid'.$row['id'].'']==$row['id'])
                    {echo '<button class=" btn-success">REQUEST SENT</button>';}
                
                    else{ 
                        echo '<form action="includes/donorreq.php" method="post">
                        <input type="hidden" name="id" value="'.$row['id'].'"/><button class=" btn-danger">SEND REQUEST</button></form>';}
                }
                
                
                else{     echo '
                <form action="includes/donorreq.php" method="post">
                <input type="hidden" name="id" value="'.$row['id'].'"/><button class=" btn-danger">SEND REQUEST</button></form>';}
                
                echo'
                </td>
             </tr>';
             
                }
            }
            echo '   </tbody>
        </table>
        </div>';
        
require 'footer.php';
        }
        else{
            echo '<div style="float:right;color:green;"><p>FORTUNATELY THERE IS NO IMMINENT NEED FOR YOUR BLOOD TYPE</p></div>';
        }
    
       


if(isset($_GET['don'])){
    if($_GET['don']=="suc"){
        echo '<h4 style="margin:20px;">Request Sent :)<br>You will be contacted soon.</h4> ';
    }
}}

if(isset($_SESSION['check'])){
donation();
 
echo '<form action="index.php">
<button type="submit" class="btn btn-success" style="margin:15px;"> RETURN TO HOME PAGE </button></div><br><br>
</form>';

}
else{
    
    header('Location: index.php?');               
    exit();
}
?>
