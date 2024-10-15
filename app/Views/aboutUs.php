<?= $this->extend('layout/main_layout') ?>

<?= $this->section('title') ?>
<title>About Us</title>
<?= $this->endSection('title') ?>
<?= $this->section('css') ?>
<link rel="stylesheet" href="app\Views\css\about_css.css">
<?= $this->endSection('css') ?>

<?= $this->section('content') ?>
<section>
  <div class="about-us">
    <div class="container fw-bold" >
      <p>About Us</p>
    </div>
  </div>
</section>

<section>
  <div class="container col-xxl-8 px-4 py-5">
    <div class="row row1 flex-lg-row align-items-center g-5 py-5 ml-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="https://img.freepik.com/premium-vector/black-white-image-game-controller-with-number-3-it_1301270-7281.jpg?semt=ais_hybrid" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700"
          height="500" loading="lazy">
      </div>
      <div class=" coming-soon col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">GameWorld</h1>
        <p class="lead">Welcome to GameWorld, your ultimate destination
          for all things gaming! Dive into an expansive collection of
          the latest games and exclusive, limited-edition collectibles,
          available in both digital and physical formats. Whether you're
          hunting for new releases, iconic classics, or one-of-a-kind treasures,
          GameWorld offers everything you need to fuel your passion and make your
          mark in the gaming community. Our mission is to help gamers stand out
          and express their unique style with curated finds that can't be found
          anywhere else.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="album py-2">
    <div class="container testimonial">
      <div class="text-box t1">
        <img class="icon" src="mission.png" alt="">
        <h5>Mission</h5>
        <p>To provide gamers worldwide with unparalleled access to the latest games and rare, limited-edition collectibles, offering a personalized shopping experience that celebrates and enhances their love for gaming.</p>
      </div>
      <div class="text-box t1">
        <img class="icon" src="vision.png" alt="">
        <h5>Vision</h5>
        <p>To become the leading global platform where passionate gamers can discover, purchase, and collect exclusive gaming products, creating a community where every player can express their individuality and share in the excitement of gaming culture.
        </p>
      </div>
      <div class="text-box t1">
        <img class="icon" src="quote.png" alt="">
        <h5>Motto</h5>
        <p>Fuel Your Passion. Play Your Way.</p>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-9 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-1 fw-bold lh-1 text-body-emphasis">Our Journey</h1>
        <p class="lead">GameWorld was founded in late 2024 by a group of friends who shared a passion for giving the great service
          and products.
          We began as a small online store selling copies of games. Today, we've grown into a reputable brand,
          offering an extensive range of products, services, and shipping worldwide.</p>
      </div>
    </div>
  </div>
</section>

<div class="p-5 text-center mt-5">
  <div class="container py-5">
    <h2 class="text-body-emphasis">Message us on our Facebook page for inquiries!</h2>
    <p class="col-lg-8 mx-auto lead">
      Be a part of our growing community. Connect with us on social media, join our newsletter, or reach out to us
      through our contact page. We'd love to hear from you!
    </p>
    <div class="return-home">
        <img src="https://cdn-icons-png.flaticon.com/256/20/20673.png" height="60px"> </a>
    </div>
  </div>
</div>
</section>
<?= $this->endSection('content') ?>