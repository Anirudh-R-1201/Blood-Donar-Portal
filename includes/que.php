<?php
echo'<form  action="../que.php " method="post" name="donate" style="width:70%;padding:10%;">
    <div class="form-group">
    <label for="temp" >Body Temperature (inner mouth) : </label>
    <input type="number" class="form-control" min=22 max=35 required name ="temp" required placeholder="in degree Celcius.."></div>
    <div class="form-group">
    <label for="pulse">Pulse : </label>
    <input type="number" class="form-control" min=50 max=100 name ="pulse" required placeholder="per minute..."></div>
    <div class="form-group">
    <label for="bp">Blood Pressure : </label>
    <input type="number" class="form-control" min= 120 max=180 name ="bps" required placeholder="Systolic in mm Hg...">
    <input type="number" class="form-control" min=50 max=100 name ="bpd" required placeholder="Diastolic in mm Hg..."></div>
    <div class="form-group"><br>
    <label for="heamo">Haemoglobin Count : </label>
    <input type="number" class="form-control" min=12  name ="heamo" required placeholder="in g/dL..."></div><br><br>
     
     <button type="submit" class="btn btn-success" name="submit" class="text-center"> PROCEED </button>
     </form>';