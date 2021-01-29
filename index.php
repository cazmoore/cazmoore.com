<?php include 'header.php'; ?>

<body>

  <!-- ======= Navbar ======= -->
  <nav id="main-nav">
    <div class="container d-lg-flex justify-content-between align-items-center">

      <div class="d-flex justify-content-between">
        <div class="logo me-auto">
          <a href="index.html"><img src="assets/img//logo.png" alt="logo"></a>
        </div>
        <div class="responsive"><i data-icon="m" class="ion-navicon-round"></i></div>
      </div>

      <ul class="nav-menu list-unstyled">
        <li><a href="index.html" class="smoothScroll">Home</a></li>
        <li><a href="#about" class="smoothScroll">About</a></li>
        <li><a href="#portfolio" class="smoothScroll">Portfolio</a></li>
        <!--<li><a href="#journal" class="smoothScroll">Blog</a></li>-->
        <li><a href="#contact" class="smoothScroll">Contact</a></li>
      </ul>

    </div>
  </nav><!-- End Navbar -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="home">

    <div class="container">
      <div class="hero-content">
        <h1>I<span class="typed"></span></h1>
        <p class="typed-items" data-typed-person="'m Caz Moore">'m a Developer,'m a Freelancer,'m an Accountant, love to help small businesses</p>

        <ul class="list-unstyled list-social">
          <!--<li><a href="#"><i class="ion-social-facebook"></i></a></li>-->
          <li><a href="https://twitter.com/9to5refugee" target="_blank"><i class="ion-social-twitter"></i></a></li>
          <!--<li><a href="#"><i class="ion-social-instagram"></i></a></li>
          <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
          <li><a href="#"><i class="ion-social-tumblr"></i></a></li>
          <li><a href="#"><i class="ion-social-dribbble"></i></a></li>-->
        </ul>
      </div>
    </div>
  </div><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <div id="about" class="paddsection">
      <div class="container">
        <div class="row justify-content-between">

          <div class="col-lg-4 ">
            <div class="div-img-bg">
              <div class="about-img">
                <img src="assets/img/about-pic.jpg" class="img-responsive" alt="About">
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="about-descr">

              <p class="p-heading">After a career as an accountant, I finally decided to turn my enthusiasm for code and design into my day-to-day life. I'm passionate about helping entrepreneurs and small businesses achieve their dreams online and offline.</p>
              <p class="separator">Having owned and worked on the financial side of businesses, I understand the work that it takes to start and make a success of something you love, and I'm now able to fulfil my dream of helping other entrepreneurs and small business owners to do the same, using all of my skills from the accounting world, and my knowledge of design and development.</p>

            </div>

          </div>
        </div>
      </div>
    </div><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <div id="services">
      <div class="container">

        <div class="services-carousel owl-theme">

          <div class="services-block">

            <i class="fas fa-pencil-alt"></i>
            <span>UI/UX DESIGN</span>
            <p class="separator">Clean design, so your visitors can find exactly what they want, quickly.</p>

          </div>

          <div class="services-block">

            <i class="fas fa-mobile-alt"></i>
            <span>RESPONSIVE</span>
            <p class="separator">Your site will adapt to look its best on any device.</p>

          </div>

          <div class="services-block">

            <i class="fas fa-hand-holding-usd"></i>
            <span>BUSINESS FIRST</span>
            <p class="separator">I want to understand what you do and how you do it, so I can help you best.</p>

          </div>

          <div class="services-block">

            <i class="fas fa-code"></i>
            <span>CLEAN CODE</span>
            <p class="separator">I don't like unnecessary code, it makes things messy. Let's keep everything clean.</p>

          </div>

          <div class="services-block">

            <i class="fas fa-search"></i>
            <span>SEO</span>
            <p class="separator">SEO is at the back of my mind with everything I do.</p>

          </div>

          <div class="services-block">

            <i class="fas fa-laptop-house"></i>
            <span>HOSTING</span>
            <p class="separator">No idea what host to use, or how to buy a domain? Let me help.</p>

          </div>

          <div class="services-block">

            <i class="fas fa-wrench"></i>
            <span>MAINTENANCE</span>
            <p class="separator">Every so often, you'll want to make changes, or upgrade. I'll still be here when you do.</p>

          </div>

          <div class="services-block">

            <i class="fas fa-balance-scale"></i>
            <span>LEGAL</span>
            <p class="separator">Don't get into trouble using images and content you aren't allowed to. I can advise the best sources for your content.</p>

          </div>

        </div>

      </div>

    </div><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <div id="portfolio" class="paddsection">

      <div class="container">
        <div class="section-title text-center">
          <h2>My Portfolio</h2>
        </div>
      </div>

      <div class="container">

        <!-- div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div -->

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/vine-and-tap-portfolio.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Vine & Tap</h4>
              <p>E-commerce site</p>
              <a href="assets/img/portfolio/vine-and-tap-portfolio.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Vine & Tap"><i class="bx bx-plus"></i></a>
              <a href="portfolio/vine-and-tap.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/cbc-portfolio.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Caribbean Beverages</h4>
              <p>Business website</p>
              <a href="assets/img/portfolio/cbc-portfolio.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Caribbean Beverages"><i class="bx bx-plus"></i></a>
              <a href="portfolio/caribbeanbeverages.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/caviar-portfolio.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Cayman caviar</h4>
              <p>Business website</p>
              <a href="assets/img/portfolio/caviar-portfolio.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Cayman Caviar"><i class="bx bx-plus"></i></a>
              <a href="portfolio/caviar.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
<!--
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>-->

        </div>

      </div>

    </div><!-- End Portfolio Section -->

    <!-- ======= Journal Section =======
    <div id="journal" class="text-left paddsection">

      <div class="container">
        <div class="section-title text-center">
          <h2>journal</h2>
        </div>
      </div>

      <div class="container">
        <div class="journal-block">
          <div class="row">

            <div class="col-lg-4 col-md-6">
              <div class="journal-info">

                <a href="blog-single.html"><img src="assets/img/blog-post-1.jpg" class="img-responsive" alt="img"></a>

                <div class="journal-txt">

                  <h4><a href="blog-single.html">SO LETS MAKE THE MOST IS BEAUTIFUL</a></h4>
                  <p class="separator">To an English person, it will seem like simplified English
                  </p>

                </div>

              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="journal-info">

                <a href="blog-single.html"><img src="assets/img/blog-post-2.jpg" class="img-responsive" alt="img"></a>

                <div class="journal-txt">

                  <h4><a href="blog-single.html">WE'RE GONA MAKE DREAMS COMES</a></h4>
                  <p class="separator">To an English person, it will seem like simplified English
                  </p>

                </div>

              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="journal-info">

                <a href="blog-single.html"><img src="assets/img/blog-post-3.jpg" class="img-responsive" alt="img"></a>

                <div class="journal-txt">

                  <h4><a href="blog-single.html">NEW LIFE CIVILIZATIONS TO BOLDLY</a></h4>
                  <p class="separator">To an English person, it will seem like simplified English
                  </p>

                </div>

              </div>
            </div>

          </div>
        </div>
      </div>-->

    </div><!-- End Journal Section -->

    <!-- ======= Contact Section ======= -->
    <div id="contact" class="paddsection">
      <div class="container">
        <div class="contact-block1">
          <div class="row">

            <div class="col-lg-6">
              <div class="contact-contact">

                <h2 class="mb-30">GET IN TOUCH</h2>

                <ul class="contact-details">
                  <a href="https://twitter.com/9to5refugee" target=_blank /><i class="fab fa-twitter-square"></i></a>
                  <a href="https://github.com/cazmoore" target="_blank" /><i class="fab fa-github"></i></a>
                  <!-- li><span>23 Main, Street</span></li>
                  <li><span>New York, United States</span></li>
                  <li><span>+88 01912704287</span></li>
                  <li><span>example@example.com</span></li -->
                </ul>

              </div>
            </div>

            <div class="col-lg-6">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">

                  <div class="col-lg-6">
                    <div class="form-group contact-block1">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                      <div class="validate"></div>
                    </div>
                  </div>

                  <div class="col-lg-6 mt-3 mt-md-0">
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                      <div class="validate"></div>
                    </div>
                  </div>

                  <div class="col-lg-12 mt-3">
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                      <div class="validate"></div>
                    </div>
                  </div>

                  <div class="col-lg-12 mt-3">
                    <div class="form-group">
                      <textarea class="form-control" name="message" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                      <div class="validate"></div>
                    </div>
                  </div>

                  <div class="col-lg-12 mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>

                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-defeault btn-send" value="Send message">
                  </div>

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php include 'footer.php'; ?>
