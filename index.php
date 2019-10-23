<?php
require 'header.php';
    
    if(isset($_SESSION['username'])){
        
        if(isset($_SESSION['donor'])){
            echo ' 
            <div class="text-center">
            
            <label for="clicker" class="bg-7" style="margin-top:10px;">CONGRATS<br>YOU HAVE A WILLING DONOR<br>click to see</label>
            <br><input id="clicker" type="checkbox" />     
        <div class="panel-wrap">
        <div class="panel">
            <div class="panel panel-success">
            <div class="panel-heading">USER - '.$_SESSION['donor'].'<br>CONTACT - '.$_SESSION['phone'].' <h5>CONTACT THEM IMMEDIATELY</h5></div></div>
            </div></div></div>';}
        
        
            if(isset($_GET['error'])){
            echo '<div class="panel panel-danger">
            <div class="panel-heading">';
            if($_GET['error']=="poisn"){echo 'WE APPRECIATE YOUR INTENTIONS</p><p>HOWEVER, UNFORTUNATELY YOU CANNOT DONATE BLOOD NOW';}
            echo '</div></div>';
        }

       
        echo '
        <br><br><br>
        <div class="row"><div class = "col-sm-4 text-center">
        <form action="donate.php" method="post" >
        <button type="submit" name="submit" class = "btn btn-success" style="float : center; margin-bottom:40px;margin-top:20px;">DONATE BLOOD</button>
        </form>       
        </div>
        <div class = "col-sm-4 text-center">
        <form action="request.php" method="post" >
            <button type="submit" name="submit" class = "btn btn-danger" style="float : center; margin-bottom:20px;margin-top:20px;">REQUEST BLOOD</button>
            </form></div>
            <div class = "col-sm-3 text-center">
            <form action="includes/cancelreq.php" method="post" >
                <button type="submit" name="submit" class = "btn btn-danger" style="float : center; margin-bottom:20px;margin-top:20px;">CANCEL REQUEST </button>
                </form></div>';
 
if(isset($_GET['req'])){
    if($_GET['req']=="suc"){echo '<div style="color:green;"><p>REQUEST ACCEPTED</p></div>';}
    elseif($_GET['req']=="cancl"){echo '<div style="color:green;"><p>REQUEST CANCELLED</p></div>';}
    elseif($_GET['req']=="none"){echo '<div style="color:red;"><p>NO REQUEST TO CANCEL</p></div>';}

}   



echo '</div>
                <div class="container-fluid bg-2 text-center">
                <h2>Any healthy adult, both male and female, can donate
                blood. Men can donate safely once in every three months
                .Women can donate every four months.</h2><br>
                <h3>Good health of the donor must be fully ensured.<h4>                
                </div>
                <div class="container-fluid bg-3 text-center"><div style=" padding: 10px;border-radius: 25px;
                border: 2px solid grey;
                background-color: #EDE9EB; opacity:0.8;
                margin: 10px;"> 
                <div class=" bg-5"> 
                <h3>The universally accepted criteria for
                donor selection are:</h3><br><h4 style="text-align:left; padding : 4%;">
                 Age between 18 and 60 years<br><br>
                 Haemoglobin - not less than 12.5 g/dL<br><br>
                 Pulse - between 50 and 100/minute with no irregularities<br><br>
                 Blood Pressure -Systolic 100-180 mm Hg and Diastolic 50 - 100 mm Hg<br><br>
                 Temperature - Normal (oral temperature not exceeding 37.50
                C)<br><br>
                 Body weight - not less than 45 Kg<br><br><br>
                 Health conditions: The donor should be in a healthy state of mind and body.
                </h4>
                </div></div></div>   ';

    
        
    }
    else{       
        
                if(isset($_GET['error'])){
                if($_GET['error']=="feildsempty"){echo '<div style="color:red;"><p>ENTER ALL FEILDS...</p></div>';}
                elseif($_GET['error']=="uidempty"){echo '<div style="color:red;"><p>USERID IS EMPTY...</p></div>';}
                elseif($_GET['error']=="pwdempty"){echo '<div style="color:red;"><p>PASSWORD IS NOT ENTERED...</p></div>';}
                elseif($_GET['error']=="wrngpwd"){echo '<div style="color:red;"><p>WRONG PASSWORD...</p></div>';}
                elseif($_GET['error']=="uidtaken"){echo '<div style="color:red;"><p>USERID IS TAKEN...</p></div>';}
                elseif($_GET['error']=="pwdnotequal"){echo '<div style="color:red;"><p>REENTER PASSWORDS CORRECTLY...</p></div>';}
                elseif($_GET['error']=="nouser"){echo '<div style="color:red;"><p>LOGIN CREDENTIALS WRONG...</p></div>';}
                elseif($_GET['error']=="poisn"){echo '<div style="color:red;"><p>WE APPRECIATE YOUR INTENTIONS</p><p>HOWEVER, UNFORTUNATELY YOU CANNOT DONATE BLOOD NOW</p></div>';}
            
            }if(isset($_GET['regis'])){
                if($_GET['regis']=="success"){echo '<div style="color:green;"><p>SIGNUP SUCCESSFUL<br>Login to continue</p></div>';}
            }
            echo '<div class="row bg-3">
            
            <div class="container-fluid text-center col-sm-7 " style:"float:right;">
            <h3 style="float:left;">Signup here : </h3>
            <br><br><br>
            <form action="includes/signup.php" method="post" style="width:60%;margin:30px;">
            <div class="form-group">
            <input type="text" class="form-control" name ="username" placeholder="Username"></div><br><br>
            <div class="form-group">
            <input type="email" class="form-control" name ="email" placeholder="Email"></div><br><br>
            <div class="form-group">
            <input type="password" class="form-control" name ="pwd" placeholder="Password"></div><br><br>
            <div class="form-group">
            <input type="password" class="form-control" name ="pwd-repeat" placeholder="Repeat Password"></div><br><br>
            <button type="submit" class="btn btn-success" name="signup-submit">Signup</button>
            </form></div><br><br>
            <div class="container-fluid text-center col-sm-4" style="margin:20px;margin-top:0; color:block;">
            <h3 >If you are a registered user,<br>l ogin to proceed</h3>
            </div></div>
            ';
     
}
            
require 'footer.php';
?>

