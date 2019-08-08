<?php

require 'header.php';

if(isset($_POST['submit'])){
echo'<main><div class="container-fluid bg-6 ">

<form  action="includes/donate.php " method="post" name="donate" style="width:70%;padding:10%;">
<h2>Please Fill the following form honestly : </h2>
<h4>(questionaire is as per Government regulations)</h4>
<div class="form-group">
<label for="oneyr"> In the past one year have you been treated for Rabies or received Hepatitis B immune
globulin : </label>
<select name = "oneyr">
<option value="yes">Yes, I have</option>
<option value="no">No, I have not</option>
</select><br><br>

<label for="sixm"> In the past six months have you had (any of the following)<br>1. a tattoo, ear or skin piercing or acupuncture,<br>2. received blood or blood products,<br>3. a serious illness or major surgery,<br>4.
contact with a person with hepatitis or yellow jaundice :</label><br> 
<select name = "sixm">
<option value="yes">Yes, I have</option>
<option value="no">No, I have not</option>
</select><br><br>

<label for="threem"> In the past three months have you donated blood or been treated for Malaria : </label>
<select name = "threem">
<option value="yes">Yes, I have</option>
<option value="no">No, I have not</option>
</select><br><br>

<label for="onem"> In the past one month have you had any immunizations : </label>
<select name = "onem">
<option value="yes">Yes, I have</option>
<option value="no">No, I have not</option>
</select><br><br>

<label for="72h"> In the past 72 hours have you  had dental work or taken Aspirin : </label>
<select name = "72h">
<option value="yes">Yes, I have</option>
<option value="no">No, I have not</option>
</select><br><br>

<label for="48h"> In the past 48 hours have you taken any antibiotics or any other medications (Allopathic
or Ayurveda or Sidha or Homeo) : </label>
<select name = "48h">
<option value="yes">Yes, I have</option>
<option value="no">No, I have not</option>
</select><br><br>

<label for="24h"> In the past 24 hours have you  taken alcoholic beverages : </label>
<select name = "24h">
<option value="yes">Yes, I have</option>
<option value="no">No, I have not</option>
</select><br><br>

<label for="cond"> Ever had TB, bronchial asthma or allergic disorder, liver disease, kidney
disease, fits or fainting, blue or purple spots on the skin or mucous
membranes, received human pituitary - growth hormones etc : </label>
<select name = "cond">
<option value="yes">Yes, I have</option>
<option value="no">No, I have not</option>
</select><br><br>

<label for="pre"> Free from Diabetes, not suffering from chest pain, heart disease or high
BP, cancer, blood clotting problem or blood disease, unexplained fever,
weight loss, fatigue, night sweats, enlarged lymph nodes in armpits, neck or
groin, white patches in the mouth etc. : </label>
<select name = "pre">
<option value="yes">Yes, I have</option>
<option value="no">No, I have not</option>
</select><br><br><br><br>

<label>For Women only : </label><br>

<label for="preg"> Are you  pregnant or breast feeding your child : </label>
<select name = "preg">
<option value="no">No, I have not</option>
<option value="yes">Yes, I have</option>
</select><br><br>

<label for="menstrual"> Are you having donating during your menstrual cycle : </label>
<select name = "menstrual">
<option value="no">No, I have not</option>
<option value="yes">Yes, I have</option>
</select><br><br>

<div class="form-group">
<label for="phone" >Contact number : </label>
<input type="tel" class="form-control"  name ="phone" placeholder="xxxxxxxxxx.." pattern="[6-9]{1}[0-9]{9}"></div>
<div class="form-group">

<button type="submit" class="btn btn-success" name="donate-submit"> DONATE </button>
</form><br><br><br>

<form action="index.php?">
<button type="submit" class="btn btn-success" style="float:right;"> CANCEL </button></div><br><br>
</form></div></div>
</main>
';}


else
{    
    header('Location: index.php?');
    exit();
}

require 'footer.php';