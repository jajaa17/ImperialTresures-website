<?php

use CodeIgniter\Database\BaseUtils;
?>
<?= $this->extend('layout/main_layout') ?>
<?= $this->section('title') ?>
<title>Products & Services</title>
<?= $this->endSection('title') ?>
<?= $this->section('css') ?>
<?= $this->include('css/products_css') ?>
<?= $this->endSection('css') ?>

<?= $this->section('content') ?>
  <section>
    <div class="album py-5">
      <div class="container testimonial">
        <div class="text-box t1">
          <img class="icon" src="radio-button.png" alt="">
          <h5>Pins</h5>
        </div>
        <div class="text-box t1">
          <img class="icon" src="lanyard.png" alt="">
          <h5>Lanyards</h5>
        </div>
        <div class="text-box t1">
          <img class="icon" src="keyboard-key-a.png" alt="">
          <h5>Keycaps</h5>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <h2 class="pb-2 border-bottom text-center">Explore Our Products</h2>
    </div>
  </section>

  <section>
    <div class="boxes solo">
      <div class="container card-container">
        <div class="card">
          <img class="" src="gising.png">
          <br>

          <div class="bottomPart border-top pt-2">

            <br>
            <div class="container-btn justify-content-center">
              <a class="viewProducts" href="shop.html">
                <button>BUY NOW</button>
              </a>
            </div>
          </div>
        </div>


        <div class="card">
          <img class="" src="love.png">
          <br>
          <div class="bottomPart border-top pt-2">

            <br>
            <div class="container-btn justify-content-center">
              <a class="viewProducts" href="shop.html">
                <button>BUY NOW</button>
              </a>
            </div>
          </div>
        </div>

        <div class="card">
          <img class="" src="insomnia.png">
          <br>
          <div class="bottomPart border-top pt-2">

            <br>
            <div class="container-btn justify-content-center">
              <a class="viewProducts" href="shop.html">
                <button>BUY NOW</button>
              </a>
            </div>
          </div>

        </div>
        <div class="container-btn justify-content-center">
          <a class="viewProducts" href="shop.html">
            <button>VIEW ALL PRODUCTS</button>
          </a>
        </div>
  </section>
<?= $this->endSection('content') ?>
