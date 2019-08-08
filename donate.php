<?php
require 'header.php';

if(isset($_POST['submit'])){

    echo '<main>
    <div class="container-fluid bg-6 text-center">
    <h2>Please Fill the following form honestly : </h2>
    <h4>(questionaire is as per Government regulations)</h4>
    ';
    require('includes/que.php');
    echo' 
     <form action="index.php?">
     <button type="submit" class="btn btn-success" > CANCEL </button></div><br><br>
     </form></div>
     </main>
     ';
    
    
}

else{
    header('Location: index.php?');
    exit();
}
?>


<?php
require 'footer.php';

?>