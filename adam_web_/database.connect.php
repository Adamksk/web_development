<?php


$serverName = "localhost"; 
$dBursername = "root";
$dBpassword = "" ;
$db_name = "in_time";



$connection = mysqli_connect($serverName, $dBursername, $dBpassword, $db_name);



if (!$connection){
    die("Gagal berhubung:  "  .  mysqli_connect_error());

}
echo "Berjaya berhubung <br>";
?>