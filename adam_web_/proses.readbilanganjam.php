<?php

require_once 'database.connect.php';

$query= "SELECT * FROM jumlah_jam WHERE $Pnama= 'nama' AND $Pemail='email' AND $Pbilangan='bilangan'";

$result= mysqli_query($connection,$query);