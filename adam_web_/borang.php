<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IN TIME </title>
 <!-- style sheet -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css
" rel="stylesheet" integrity="sha384-
EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLAS
jC" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
<script src="https://kit.fontawesome.com/5a53d05429.js" crossorigin="anonymous"></script>
</body>
</head>

<!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img src="gambar/IN time.png" width="3%">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="nav justify-content-end" id="navbarSupportedContent" >
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
                <a class="nav-link active" href="aboutus.html">About Us</a>
              </li>
              
               <!--Contact us-->
               <li class="nav-item">
                <a class="nav-link active" href="#">Borang</a>
              </li>
              
          </div>
        </div>
      </nav>
      <!--End Navbar-->
      
      <hr class="my-5" />

      <!--Section: Content-->
      <form action="proses.bilanganjam.php" method="POST" class="row g-3">
  <div class="col-md-12">
    <label for="inputname" class="form-label">Nama</label>
    <input type="text" class="form-control"  name="nama" id="inputnama">
  </div>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="inputEmail4">
  </div>
  <div class="col-md-12">
    <label for="inputbilangan" class="form-label">bilangan</label>
    <select name="bilangan" class="form-select">
      <option selected>0</option>
      <option>1</option>
      <option>2</option>
    </select>
  </div>
  <!-- end section-->
  
  
 
  <div class="col-12">
    <button type="submit" name="tempah" class="btn btn-primary">Tempah</button>
    <a href="read.php">jumlah jam</a>
    <br>
</div>

    

      <div class="container-fluid">
        <!-- Footer -->
        <footer
                class="text-center text-lg-start text-white"
                style="background-color: #a0a0a0"
                >
          <!-- Grid container -->
          <div class="container p-1 pb-0">
            <!-- Section: Links -->
            <section class="">
              <!--Grid row-->
              <div class="row">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-0">
                  <img src="gambar/IN time.png" class="rounded float-start" width="70%" >
                </div>
                <!-- Grid column -->
      
                <hr class="w-100 clearfix d-md-none" />
      
                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                  <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                  <p>
                    <a class="text-white">Rolex</a>
                  </p>
                  <p>
                    <a class="text-white">G-Shock</a>
                  </p>
                  <p>
                    <a class="text-white">Casio</a>
                  </p>
                 
                </div>
                <!-- Grid column -->
      
                <hr class="w-100 clearfix d-md-none" />
      
                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none" />
      
                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                  <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                  <p1><i class="fas fa-home mr-3"></i> Kuala Lumpur, 43200 </p>
                  <p1><i class="fas fa-envelope mr-3"></i> INTIME@gmail.com</p>
                  <p1><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                  <p1><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                </div>
                <!-- Grid column -->
      
                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                  <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>
      
                  <!-- Facebook -->
                  <a
                     class="btn btn-primary btn-floating m-1"
                     style="background-color: #3b5998"
                     href="#!"
                     role="button"
                     ><i class="fab fa-facebook-f"></i
                    ></a>
      
                  <!-- Twitter -->
                  <a
                     class="btn btn-primary btn-floating m-1"
                     style="background-color: #55acee"
                     href="#!"
                     role="button"
                     ><i class="fab fa-twitter"></i
                    ></a>
      
                  <!-- Google -->
                  <a
                     class="btn btn-primary btn-floating m-1"
                     style="background-color: #dd4b39"
                     href="#!"
                     role="button"
                     ><i class="fab fa-google"></i
                    ></a>
      
                  <!-- Instagram -->
                  <a
                     class="btn btn-primary btn-floating m-1"
                     style="background-color: #ac2bac"
                     href="#!"
                     role="button"
                     ><i class="fab fa-instagram"></i
                    ></a>
      
                  <!-- Linkedin -->
                  <a
                     class="btn btn-primary btn-floating m-1"
                     style="background-color: #0082ca"
                     href="#!"
                     role="button"
                     ><i class="fab fa-linkedin-in"></i
                    ></a>
                  <!-- Github -->
                  <a
                     class="btn btn-primary btn-floating m-1"
                     style="background-color: #333333"
                     href="#!"
                     role="button"
                     ><i class="fab fa-github"></i
                    ></a>
                </div>
              </div>
              <!--Grid row-->
            </section>
            <!-- Section: Links -->
          </div>
          <!-- Grid container -->
      
          <!-- Copyright -->
          <div
               class="text-center p-3"
               style="background-color: rgba(0, 0, 0, 0.2)"
               >
            © 2021 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/"
               >INTIME.com</a
              >
          </div>
          <!-- Copyright -->
        </footer>
        <!-- Footer -->
      </div>
      <!-- End of .container -->
      

</body>
</head>