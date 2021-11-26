<?php include "proses.readbilanganjam.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css
" rel="stylesheet" integrity="sha384-
EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLAS
jC" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
<script src="https://kit.fontawesome.com/5a53d05429.js" crossorigin="anonymous"></script>

    
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img src="gambar/IN time.png" width="3%">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="nav justify-content-end" id="navbarSupportedContent" >
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>

              <!--dropdown-->
              <!--Collection-->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Collection
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Rolex</a></li>
                  <li><a class="dropdown-item" href="#">G-Shock</a></li>
                  <li><a class="dropdown-item" href="#">Casio</a></li>
                </ul>
              </li>

              <!--about us-->
              <li class="nav-item">
                <a class="nav-link active" href="#">About Us</a>
              </li>
              
               <!--Contact us-->
               <li class="nav-item">
                <a class="nav-link active" href="borang.php">borang</a>
              </li>
              
          </div>
        </div>
      </nav>
      <!--end navbar-->

      <?php if (mysqli_num_rows($result)){?>
      <table class="table table-hover">
  <thead>
  <?php if (mysqli_num_rows($result)) { ?>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nama</th>
      <th scope="col">Email</th>
      <th scope="col">Bilangan</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $i = 0;
       while ($rows = mysqli_fetch_assoc($result)) {
           $i++;
    ?>
    <tr>
      <th scope="row"><?=$i ?></th>
      <td><?=$rows['nama']?></td>
      <td><?=$rows['email']?></td>
      <td><?=$rows['bilangan']?></td>
    </tr>
    <?php }?>
  </tbody>
</table>
<?php }?>
<a href="borang.php">kembali</a>


</body>
</head>
</html>