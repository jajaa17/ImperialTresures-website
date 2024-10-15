<?php

use CodeIgniter\Database\BaseUtils;
?>
<?= $this->extend('layout/main_layout') ?>

<?= $this->section('title') ?>
<title>products</title>
<?= $this->endSection('title') ?>

<?= $this->section('title') ?>
<title>Collectibles</title>
<?= $this->endSection('title') ?>
<?= $this->section('css') ?>
<?= $this->include('css/products_css') ?>
<?= $this->endSection('css') ?>

<?= $this->section('content') ?>
  <section>
    <div class="album py-5">
      <div class="container testimonial">
        <div class="text-box t1">
          <img class="icon" src="https://m.media-amazon.com/images/I/61h54+OMLuL._AC_UF1000,1000_QL80_.jpg" alt="">
          <h5>Figurines</h5>
        </div>
        <div class="text-box t1">
          <img class="icon" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDHaBL2KkVNwYrABS4fjLnB7U4dEExdHC5NQ&s" alt="">
          <h5>Books</h5>
        </div>
        <div class="text-box t1">
          <img class="icon" src="https://i.ebayimg.com/images/g/~hAAAOSweBdkH391/s-l1200.jpg" alt="">
          <h5>Game Packs</h5>
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
          <img class="" src="<?= base_url('assets/images/ultramarine.jpg') ?>">
          <br>

          <div class="bottomPart border-top pt-2">

            <br>
            <div class="container-btn justify-content-center">
              <a class="viewProducts" href="shop">
                <button>BUY NOW</button>
              </a>
            </div>
          </div>
        </div>


        <div class="card">
          <img class="" src="<?= base_url('assets/images/prospero.jpg') ?>">
          <br>
          <div class="bottomPart border-top pt-2">

            <br>
            <div class="container-btn justify-content-center">
              <a class="viewProducts" href="shop">
                <button>BUY NOW</button>
              </a>
            </div>
          </div>
        </div>

        <div class="card">
          <img class="" src="<?= base_url('assets/images/fireandjade.jpg') ?>">
          <br>
          <div class="bottomPart border-top pt-2">

            <br>
            <div class="container-btn justify-content-center">
              <a class="viewProducts" href="shop">
                <button>BUY NOW</button>
              </a>
            </div>
          </div>

        </div>
        <div class="container-btn justify-content-center">
          <a class="viewProducts" href="shop">
            <button>VIEW ALL PRODUCTS</button>
          </a>
        </div>
  </section>
<?= $this->endSection('content') ?>
