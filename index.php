<?php

use class\DestinationManager;
use class\ReviewManager;
use class\ScoreManager;
use class\TourOperatorManager;
use class\CertificateManager;



include_once __DIR__ . DIRECTORY_SEPARATOR . "config" . DIRECTORY_SEPARATOR . "autoload.php";
include_once __DIR__ . DIRECTORY_SEPARATOR . "config" . DIRECTORY_SEPARATOR . "db.php"; 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet">
                
    <title>ComparOperator</title>

</head>
<body style=" font-family: 'SF Pro Display', sans-serif;">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="assets/logo/Logo.png" alt="Logo" width="40" height="40" class="d-inline-block align-text-center">
                    Comperator
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="admin.php">Page Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <section class="offers-section" style="text-align: center;">
      <div class="container-fluid">
         <div class="row justify-content-center">
            <div class="col-12 col-md-8">
              <div class="card" style="margin-top: -15px; background-color: #40514E;">
                <div class="card-body">
                    <form class="row g-3">
                        <div class="col-12 col-md-4">
                            <input class="form-control form-control-lg" type="text" placeholder="De: Ville, gare, aéroport ou port" aria-label=".form-control-lg example">
                        </div>
                        <div class="col-12 col-md-4">
                            <input class="form-control" type="text" placeholder="Vers: Ville, gare, aéroport ou port" aria-label="default input example">
                        </div>
                        <div class="col-6 col-md-2">
                            <input class="form-control" type="date" placeholder="Date de Départ" aria-label=".form-control-sm example">
                        </div>
                        <div class="col-6 col-md-2">
                            <input class="form-control" type="date" placeholder="Date de Retour" aria-label=".form-control-sm example">
                        </div>
                        <div class="col-6">
                            <input class="form-control" type="text" placeholder="Adulte" aria-label=".form-control-sm example">
                        </div>
                        <div class="col-6">
                            <input class="form-control" type="text" placeholder="Jeune" aria-label=".form-control-sm example">
                        </div>
                        <div class="col-12 d-flex align-items-center justify-content-center">
                               <button id="btns" type="button" class="btn btn-sm text-light">
                                   <i class="fas fa-search"></i> Rechercher
                                      </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


       <p class="font-weight-bold" >
       <h3>Nos meilleures offres sélectionées pour vous</h3>
      </p>

       <div class="container" style="margin-top: auto;">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="assets/card_image/img_test.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <!-- les score vont être ici -->
              <p class="card-text"><small class="text-body-secondary">1560€</small></p>

              <div class="col-12 d-flex align-items-center justify-content-center">
                               <button id="btns" type="button" class="btn btn-sm text-light">
                                 Voir Liste
                                      </button>
                        </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="text-center p-4">

<h1>Nos Partenaire</h1>
      
    <img src="assets/logo/partenaire_mobile.png" alt="" class="img-fluid rounded" style="background-color: #40514E;">
</div>


</section>



<div class="container">
  <!-- Footer -->
  <footer class="text-center text-lg-start text-dark " style="background-color: #ECEFF1">
    <!-- Section: Social media -->
    <section
             class="d-flex justify-content-between p-4 text-white"
             style="background-color: #11999E"
             >
      <!-- Left -->
      <div class="me-5">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3  mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold"><img src="assets/logo/Logo.png" alt="Logo" width="40" height="40" class="d-inline-block align-text-center">
                    Comperator</h6>
            <hr
                class="mb-4 mt-0 d-inline-block"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              Here you can use rows and columns to organize your footer
              content. Lorem ipsum dolor sit amet, consectetur adipisicing
              elit.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Products</h6>
            <hr
                class="mb-4 mt-0 d-inline-block "
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-dark">MDBootstrap</a>
            </p>
            <p>
              <a href="#!" class="text-dark">MDWordPress</a>
            </p>
            <p>
              <a href="#!" class="text-dark">BrandFlow</a>
            </p>
            <p>
              <a href="#!" class="text-dark">Bootstrap Angular</a>
            </p>
          </div>
        
         
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div
         class="text-center p-3 text-light"
         style="background-color: #40514E"
         >
      © 2020 Copyright: Rémi & Evgenii.
     
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</div>
<!-- End of .container -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/82dc073821.js" crossorigin="anonymous"></script>
</body>
</html>
