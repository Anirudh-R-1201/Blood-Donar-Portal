<?php
$server="localhost";
$dbun="root";
$dbpwd="";
$dbname="loginsystem";

$conn = new mysqli($server,$dbun,$dbpwd,$dbname);

if(!$conn){
    die("CONNECTION FAILED...".mysqli_connect_error());
}
?>