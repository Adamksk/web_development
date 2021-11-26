<?php

if(isset($_POST["tempah"])){

require_once "database.connect.php";
$Pnama = $_POST['nama'];
$Pemail = $_POST['email'];
$Pbilangan = $_POST['bilangan'];

$query= "INSERT INTO jumlah_jam ( nama , email, bilangan)
VALUE ( '$Pnama' , '$Pemail', '$Pbilangan')";

if (mysqli_query($connection,$query)){
    echo"Rekod disimpan";
}else {
  echo "rekod Tidak Disimpan";
}

}
else {
    echo "tidak berjaya";
}
?>