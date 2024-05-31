<?php

include_once 'header.php';?>

<div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">Mes projets</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Projet n°1: <br> Réservation de voyage</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
             <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Projet n°2: <br> Site ecommerce</h3>
           </div>
          </div>
      </div>
    </div>
</div>


<?php include_once 'footer.php';?>
