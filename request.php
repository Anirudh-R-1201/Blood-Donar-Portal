<?php
require 'header.php';

if(isset($_POST['submit'])){
    
        echo '
        
        <form action="includes/req.php" method="post" style="width:70%; padding:10%;">
        <div class="form-group">
        <label>Enter Contact Details</label><br><br><br>
        <label for="email">Enter Email ID : </label>
        <input type="email" class="form-control" name ="email" placeholder="Email ID..."></div>
        <label for="phno">Enter Phone Number : (xxxxxxxxxx)</label>
        <input type="tel" class="form-control" name ="phno" placeholder="Phone Number..." pattern="[6-9]{1}[0-9]{9}" required></div>
        <br><label for="loc">Address : </label>
        <input type="text" class="form-control" name ="loc" placeholder="Clinc/Hospital..."></div>

        <br><label for="breq">Amount of blood required : </label>
        <input type="number" class="form-control" name ="breq" placeholder="Blood required in Litres..."></div>
        <br><label for="urgency">Input Urgency : </label>
        <input type="number" class="form-control" name ="urgency" placeholder="Urgency time in hrs..."></div>
        <br>
        <button type="submit" class="btn btn-success" name="submit" style="margin:5%;"> SUBMIT REQUEST </button></div><br><br>  
        </form> <form action="index.php">
        <button type="submit" class="btn btn-success " style="margin : 20px"> CANCEL </button></div><br><br>
        </form> ';
    }


else{
    header('Location: index.php?');
    exit();
}
?>



<?php
require 'footer.php';

?>