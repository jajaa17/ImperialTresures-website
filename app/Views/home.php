<?php

use CodeIgniter\Database\BaseUtils;
?>
<?= $this->extend('layout/main_layout') ?>

<?= $this->section('title') ?>
<title>Imperial Treasures</title>
<?= $this->endSection('title') ?>
<?= $this->section('css') ?>
<?= $this->include('css/index_css') ?>
<?= $this->endSection('css') ?>

<?= $this->section('content') ?>
<section>

  <div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="header col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="headings display-4 fw-bold lh-1 text-body-emphasis">Stand with the emperor and vanquish HERESY!</h1>
        <p class="lead mt-4"> Discover an extensive range of Warhammer 40K
          collectibles and exclusive, limited-edition items like novels and figurines, both in-game and physical.
          Whether you’re searching for the latest miniatures or rare, one-of-a-kind treasures,
          Imperial Treasures has everything you need to showcase
          your dedication to the Warhammer universe and stand out among fellow enthusiasts</p>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden">
        <img class="img-pin rounded-lg-1" src="<?= base_url('assets/images/heroimage.png') ?>">
      </div>
    </div>

    <div class="container mt-5">
      <h2 class="pb-2 border-bottom">Newly Released Collectibles</h2>
      <div class="row designs row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-3">
        <div class="col">
          <div class="card shadow-sm">
            <div class="card shadow">
                <img src="<?= base_url('assets/images/vengeful_spirit.jpg') ?>"
                alt="">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div class="card shadow">
                 <img src="<?= base_url('assets/images/horus_rising.jpg') ?>"
                alt="">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div class="card shadow">
              <img src="<?= base_url('assets/images/born_of_flame.jpg') ?>"
                alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="container-btn text-center mt-4">
        <a class="viewProducts" href="<?= base_url() . 'products' ?>">
          <button>Browse More Collectibles</button>
        </a>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="album py-5 bg-body-tertiary">
    <h2 class="t-title">WHAT COLLECTORS ARE SAYING ABOUT US</h2>
    <div class="container testimonial">
      <div class="text-box t1">"Imperial Treasures is a true paradise for collectors!
        I discovered the perfect miniatures and exclusive collectibles that are
        impossible to find elsewhere. The shopping experience was seamless,
        and the variety is simply unmatched.
        Imperial Treasures has become
        my ultimate destination for rare finds!" <span><br><br>- Mark, Completionist gamer</span></div>
      <div class="text-box t1">

        "I’m absolutely blown away by the limited-edition items at Imperial Treasures. From unique in-game models to
        stunning physical collectibles, they have everything a true enthusiast could wish for.
        Every purchase adds a special piece to my collection, whether it’s for gaming or display!"<span><br><br>- Sarah,
          Happy Customer</span>
      </div>
      <div class="text-box t1">"As a devoted collector of gaming memorabilia, Imperial Treasures’ limited-edition
        releases have transformed my collection. I’ve added exclusive in-game items and physical collectibles that I
        couldn’t find anywhere else. Imperial Treasures has truly leveled up my hobby!" <span><br><br>- Emily, Gaming
          Collector</span></div>
    </div>
  </div>
</section>

<section>
  <div class="container px-4 py-5" id="hanging-icons">
    <h2 class="pb-2 border-bottom">Why Choose Imperial Treasures?</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="col d-flex align-items-start">
        <div
          class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-crosshair" viewBox="0 0 16 16">
  <path d="M8.5.5a.5.5 0 0 0-1 0v.518A7 7 0 0 0 1.018 7.5H.5a.5.5 0 0 0 0 1h.518A7 7 0 0 0 7.5 14.982v.518a.5.5 0 0 0 1 0v-.518A7 7 0 0 0 14.982 8.5h.518a.5.5 0 0 0 0-1h-.518A7 7 0 0 0 8.5 1.018zm-6.48 7A6 6 0 0 1 7.5 2.02v.48a.5.5 0 0 0 1 0v-.48a6 6 0 0 1 5.48 5.48h-.48a.5.5 0 0 0 0 1h.48a6 6 0 0 1-5.48 5.48v-.48a.5.5 0 0 0-1 0v.48A6 6 0 0 1 2.02 8.5h.48a.5.5 0 0 0 0-1zM8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
</svg>
        </div>
        <div>
          <h3 class="fs-2 text-body-emphasis">Curated Warhammer Collectibles</h3>
          <p>Access a premium selection of the latest Warhammer 40K miniatures and collectibles, tailored to suit every
            fan’s taste.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div
          class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-dpad-fill" viewBox="0 0 16 16">
  <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v3a.5.5 0 0 1-.5.5h-3A1.5 1.5 0 0 0 0 6.5v3A1.5 1.5 0 0 0 1.5 11h3a.5.5 0 0 1 .5.5v3A1.5 1.5 0 0 0 6.5 16h3a1.5 1.5 0 0 0 1.5-1.5v-3a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 0 16 9.5v-3A1.5 1.5 0 0 0 14.5 5h-3a.5.5 0 0 1-.5-.5v-3A1.5 1.5 0 0 0 9.5 0zm1.288 2.34a.25.25 0 0 1 .424 0l.799 1.278A.25.25 0 0 1 8.799 4H7.201a.25.25 0 0 1-.212-.382zm0 11.32-.799-1.277A.25.25 0 0 1 7.201 12H8.8a.25.25 0 0 1 .212.383l-.799 1.278a.25.25 0 0 1-.424 0Zm-4.17-4.65-1.279-.798a.25.25 0 0 1 0-.424l1.279-.799A.25.25 0 0 1 4 7.201V8.8a.25.25 0 0 1-.382.212Zm10.043-.798-1.278.799A.25.25 0 0 1 12 8.799V7.2a.25.25 0 0 1 .383-.212l1.278.799a.25.25 0 0 1 0 .424Z"/>
</svg>
        </div>
        <div>
          <h3 class="fs-2 text-body-emphasis">Exclusive Warhammer Items</h3>
          <p>Get your hands on limited-edition miniatures and collectibles, available only at Imperial Treasures.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div
          class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-headset"
            viewBox="0 0 16 16">
            <path
              d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z" />
          </svg>
        </div>
        <div>
          <h3 class="fs-2 text-body-emphasis">Exceptional Support</h3>
          <p>We are committed to providing top-notch service to ensure your Warhammer experience is always first-class.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>


<section>
  <div class="container col-xxl-8 px-4 py-5">
    <div class="row row1 flex-lg-row align-items-center g-5 py-5 ml-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="<?= base_url('assets/images/titus.webp') ?>" class="d-block mx-lg-auto img-fluid"
          alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class=" coming-soon col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Unlock Exclusive Collectibles here in Imperial
          Treasures!</h1>
        <p class="lead">Get ready for the release of exclusive, limited-edition games and rare collectibles, both
          in-game and physical, as we celebrate Warhammer 40K: Space Marine 2! Stay tuned for the launch and be among
          the first to get your hands on these one-of-a-kind items!</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        </div>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection('content') ?>