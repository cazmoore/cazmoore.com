<?php include 'header.php'; ?>

<body>

  <!-- ======= Navbar ======= -->
  <nav id="main-nav" class="subpage-nav">
    <div class="container d-lg-flex justify-content-between align-items-center">

      <div class="d-flex justify-content-between">
        <div class="logo me-auto">
          <a href="index.html"><img src="../assets/img//logo.png" alt="logo"></a>
        </div>
        <div class="responsive"><i data-icon="m" class="ion-navicon-round"></i></div>
      </div>

      <ul class="nav-menu list-unstyled">
        <li><a href="../index.html" class="smoothScroll">Home</a></li>
        <li><a href="../index.html#about" class="smoothScroll">About</a></li>
        <li><a href="../index.html#portfolio" class="smoothScroll">Portfolio</a></li>
        <li><a href="../index.html#journal" class="smoothScroll">Blog</a></li>
        <li><a href="../index.html#contact" class="smoothScroll">Contact</a></li>
      </ul>

    </div>
  </nav><!-- End Navbar -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfolio Details</h2>
          <ol>
            <li><a href="../index.html">Home</a></li>
            <li><a href="../index.html#portfolio">Portfolio</a></li>
            <li>Portfolio Details</li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="../assets/img/portfolio/caviar-portfolio-detail.jpg" class="img-fluid" alt="">
          </div>

          <div class="portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>: Web design</li>
              <li><strong>Client</strong>: Cayman Caviar</li>
              <li><strong>Project date</strong>: November 2019</li>
              <li><strong>Project URL</strong>: <a href="https://www.caviar.ky" target="_blank">caviar.ky</a></li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>Luxury food distributor website</h2>
          <p>
            Cayman Caviar needed a website to showcase their portfolio of caviar and other luxury products, with the facility for visitors to sign up to be notified about the product lines and availability. Built using Wordpress so the client can update as required.
          </p>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->


    <?php include 'footer.php'; ?>
