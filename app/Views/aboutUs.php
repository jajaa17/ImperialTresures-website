<?= $this->extend('layout/main_layout') ?>

<?= $this->section('title') ?>
<title>About Us</title>
<?= $this->endSection('title') ?>
<?= $this->section('css') ?>
<?= $this->include('css/about_css') ?>
<?= $this->endSection('css') ?>

<?= $this->section('content') ?>
<section>
  <div class="about-us">
    <div class="container">
      <p>About Us</p>
    </div>
  </div>
</section>

<section>
  <div class="container col-xxl-8 px-4 py-5">
    <div class="row row1 flex-lg-row align-items-center g-5 py-5 ml-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="alagodsLogo.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700"
          height="500" loading="lazy">
      </div>
      <div class=" coming-soon col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Alagods Aesthetics</h1>
        <p class="lead">At Alagods Aesthetics, we are passionate about crafting exceptional accessories that inspire
          self-expression. With our captivating range of button pins, keycaps, and ID laces, we offer you the means to
          showcase your unique personality and make a statement. We are committed to delivering quality, innovation,
          and attention to detail, empowering you to embrace your individuality and celebrate your passions.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-12 text-center">
          <img src="piyuMartLogo.png" alt="techcrunch" width="50">
        </div>
      </div>
  </section> -->

<section>
  <div class="album py-2">
    <div class="container testimonial">
      <div class="text-box t1">
        <img class="icon" src="mission.png" alt="">
        <h5>Mission</h5>
        <p>Empowering self-expression and individuality through unique and high-quality accessories.</p>
      </div>
      <div class="text-box t1">
        <img class="icon" src="vision.png" alt="">
        <h5>Vision</h5>
        <p>Unleashing boundless self-expression through captivating accessories.
        </p>
      </div>
      <div class="text-box t1">
        <img class="icon" src="quote.png" alt="">
        <h5>Motto</h5>
        <p>Wear your story, make a statement with our artfully crafted pins that embody your unique personality.</p>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1 text-body-emphasis">Our Journey</h1>
        <p class="lead">Alagods Aesthetics was founded in 2023 by a group of friends who shared a passion for style
          and creativity.
          We began as a small online store selling handmade accessories. Today, we've grown into a reputable brand,
          offering an extensive range of products and shipping worldwide.</p>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
        <img class="rounded-lg-3 journeyImg" src="ourJourney.JPG">
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
      <a href="https://www.facebook.com/profile.php?id=100091766002668&mibextid=ZbWKwL" class="facebook-button">
        <img src="facebook.png" height="60px"> </a>
    </div>
  </div>
</div>
</section>

<section>
  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="col-md-4 mb-0 text-body-secondary">© 2023 Company, Inc</p>

      <a href="index.html"
        class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <img src="blackLogo.png" alt="Alagods Logo" height="60px">
      </a>

      <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="index.html" class="nav-link px-2 text-body-secondary">Home</a></li>
        <li class="nav-item"><a href="aboutUs.html" class="nav-link px-2 text-body-secondary">About us</a></li>
        <li class="nav-item"><a href="product.html" class="nav-link px-2 text-body-secondary">Product & Services</a>
        </li>
        <li class="nav-item"><a href="meetTheTeam.html" class="nav-link px-2 text-body-secondary">Our Team</a></li>
      </ul>
    </footer>
  </div>
</section>
<?= $this->endSection('content') ?>