<?php
require 'header.php';

if(isset($_SESSION['uid'])){
echo'<div class=" bg-6">
<form action="includes/register.php" method="post" style ="width :70%;margin : 10%;">
    <div class="form-group"><br><br><br><br>
    <label for="age">Age : </label>
    <input type="number" min=19 max =60 class="form-control" name ="age" min=18 placeholder="Enter your age in yrs..."></div>
    <div class="form-group">
    <label for="gender">Gender : </label><br>
    <input type="radio" name="gender" value="Male" checked> Male<br>
    <input type="radio" name="gender" value="Female"> Female<br>
    <input type="radio" name="gender" value="Other"> Other</div>
    <div class="form-group">
    <label for="weight">Weight : </label>
    <input type="number" class="form-control" min=49 max=90 name ="weight" min=70 placeholder="Enter your weight in kgs...."></div>
    <div class="form-group">
    <label for="blood">Select Blood type : </label><br>
    
    <select name = "blood">
    <option value="A+">A-positive</option>
    <option value="A-">A-negative</option>
    <option value="B+">B-positive</option>
    <option value="B-">B-negative</option>
    <option value="AB+">AB-positive</option>
    <option value="AB-">AB-negative</option>
    <option value="O+">O-positive</option>
    <option value="O-">O-negative</option>
    </select></div><br><br>
    <button type="submit" class="btn btn-success" name="register-submit">Register</button>
    </form>
    <form action="index.php?" style="margin:20px;"><button type="submit" class="btn btn-danger" name="regcancelled">CANCEL</button>
    </form></div>
    ';}

    else{
    header('Location: index.php?');               
    exit();
    }

require 'footer.php';
?>