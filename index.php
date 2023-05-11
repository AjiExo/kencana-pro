<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="Untree.co" />
  <link rel="shortcut icon" href="favicon.png" />

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap5" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="fonts/icomoon/style.css" />
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css" />


  <link rel="stylesheet" href="css/tiny-slider.css" />
  <link rel="stylesheet" href="css/aos.css" />
  <link rel="stylesheet" href="css/style.css" />

  <title>
    Property &mdash; Free Bootstrap 5 Website Template by Untree.co
  </title>
</head>
<style>
  .property-img {
    height: 400px;
    object-fit: cover;
  }

  .fade-in {
    opacity: 0;
  }

  .fade-in.show {
    opacity: 1;
    transition: opacity 1s ease-in-out;
  }


  .bio {
    color: white;
    font-weight: 1000;
  }
</style>

<body>

  <?php include('inc/inc_nav.html'); ?>

  <div class="hero">
    <div class="hero-slide">
      <div class="img overlay" style="background-image: url('images/dashboard/jt-1.jpg')"></div>
      <div class="img overlay" style="background-image: url('images/dashboard/jt-2.jpg')"></div>
      <div class="img overlay" style="background-image: url('images/dashboard/jt-3.jpeg')"></div>
    </div>

    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-9 text-center fade-in">
          <img src="images/dashboard/logo kencanapro.png" class="img-fluid mx-auto d-block" alt="Responsive Image" style="border-radius: 50%;" width="300px" height="auto">
          <h1 class="bio">KENCANA PROPERTY <br>Berintegritas Tinggi, Terbaik & Terpercaya</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container">
      <div class="row mb-5 align-items-center">
        <div class="col-lg-6">
          <h2 class="font-weight-bold text-primary heading">Our Properties</h2>
        </div>
        <div class="col-lg-6 text-lg-end">
          <p>
            <a href="#" target="_blank" class="btn btn-primary text-white py-3 px-4">View all properties</a>
          </p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="property-slider-wrap">
            <div class="property-slider owl-carousel">
              <div class="property-item">
                <a href="property-single.html" class="img">
                  <img src="images/dashboard/jt-2.jpg" alt="Image" class="img-fluid property-img" />
                </a>
                <div class="property-content">
                  <span class="city d-block mb-3">Nuansa Alam Transyogi</span>
                  <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                </div>
              </div>
              <!-- .item -->
              <div class="property-item">
                <a href="property-single.html" class="img">
                  <img src="images/dashboard/jt-3.jpeg" alt="Image" class="img-fluid property-img" />
                </a>
                <div class="property-content">
                  <span class="city d-block mb-3">Sharia Green Land</span>
                  <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                </div>
              </div>
              <!-- .item -->
              <div class="property-item">
                <a href="property-single.html" class="img">
                  <img src="images/dashboard/nuansa-alam.jpg" alt="Image" class="img-fluid property-img" />
                </a>
                <div class="property-content">
                  <span class="city d-block mb-3">Nuansa Alam Agroeduwisata</span>
                  <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                </div>
              </div>
              <!-- .item -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="features-1">
    <div class="container">
      <div class="row">
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="box-feature">
            <span class="flaticon-house"></span>
            <h3 class="mb-3">Our Properties</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Voluptates, accusamus.
            </p>
            <p><a href="#" class="learn-more">Learn More</a></p>
          </div>
        </div>
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
          <div class="box-feature">
            <span class="flaticon-building"></span>
            <h3 class="mb-3">Property for Sale</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Voluptates, accusamus.
            </p>
            <p><a href="#" class="learn-more">Learn More</a></p>
          </div>
        </div>
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
          <div class="box-feature">
            <span class="flaticon-house-3"></span>
            <h3 class="mb-3">Real Estate Agent</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Voluptates, accusamus.
            </p>
            <p><a href="#" class="learn-more">Learn More</a></p>
          </div>
        </div>
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
          <div class="box-feature">
            <span class="flaticon-house-1"></span>
            <h3 class="mb-3">House for Sale</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Voluptates, accusamus.
            </p>
            <p><a href="#" class="learn-more">Learn More</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- <div class="section sec-testimonials">
    <div class="container">
      <div class="row mb-5 align-items-center">
        <div class="col-md-6">
          <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">
            Customer Says
          </h2>
        </div>
        <div class="col-md-6 text-md-end">
          <div id="testimonial-nav">
            <span class="prev" data-controls="prev">Prev</span>

            <span class="next" data-controls="next">Next</span>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4"></div>
      </div>
      <div class="testimonial-slider-wrap">
        <div class="testimonial-slider">
          <div class="item">
            <div class="testimonial">
              <img src="images/person_1-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4" />
              <div class="rate">
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
              </div>
              <h3 class="h5 text-primary mb-4">James Smith</h3>
              <blockquote>
                <p>
                  &ldquo;Far far away, behind the word mountains, far from the
                  countries Vokalia and Consonantia, there live the blind
                  texts. Separated they live in Bookmarksgrove right at the
                  coast of the Semantics, a large language ocean.&rdquo;
                </p>
              </blockquote>
              <p class="text-black-50">Designer, Co-founder</p>
            </div>
          </div>

          <div class="item">
            <div class="testimonial">
              <img src="images/person_2-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4" />
              <div class="rate">
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
              </div>
              <h3 class="h5 text-primary mb-4">Mike Houston</h3>
              <blockquote>
                <p>
                  &ldquo;Far far away, behind the word mountains, far from the
                  countries Vokalia and Consonantia, there live the blind
                  texts. Separated they live in Bookmarksgrove right at the
                  coast of the Semantics, a large language ocean.&rdquo;
                </p>
              </blockquote>
              <p class="text-black-50">Designer, Co-founder</p>
            </div>
          </div>

          <div class="item">
            <div class="testimonial">
              <img src="images/person_3-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4" />
              <div class="rate">
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
              </div>
              <h3 class="h5 text-primary mb-4">Cameron Webster</h3>
              <blockquote>
                <p>
                  &ldquo;Far far away, behind the word mountains, far from the
                  countries Vokalia and Consonantia, there live the blind
                  texts. Separated they live in Bookmarksgrove right at the
                  coast of the Semantics, a large language ocean.&rdquo;
                </p>
              </blockquote>
              <p class="text-black-50">Designer, Co-founder</p>
            </div>
          </div>

          <div class="item">
            <div class="testimonial">
              <img src="images/person_4-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4" />
              <div class="rate">
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
              </div>
              <h3 class="h5 text-primary mb-4">Dave Smith</h3>
              <blockquote>
                <p>
                  &ldquo;Far far away, behind the word mountains, far from the
                  countries Vokalia and Consonantia, there live the blind
                  texts. Separated they live in Bookmarksgrove right at the
                  coast of the Semantics, a large language ocean.&rdquo;
                </p>
              </blockquote>
              <p class="text-black-50">Designer, Co-founder</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <div class="section section-4 bg-light">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-lg-5">
          <h2 class="font-weight-bold heading text-primary mb-4">
            Let's find home that's perfect for you
          </h2>
          <p class="text-black-50">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
            enim pariatur similique debitis vel nisi qui reprehenderit.
          </p>
        </div>
      </div>
      <div class="row justify-content-between mb-5">
        <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
          <div class="img-about dots">
            <img src="images/hero_bg_3.jpg" alt="Image" class="img-fluid" />
          </div>
        </div>
        <div class="col-lg-4">
          <div class="d-flex feature-h">
            <span class="wrap-icon me-3">
              <span class="icon-home2"></span>
            </span>
            <div class="feature-text">
              <h3 class="heading">2M Properties</h3>
              <p class="text-black-50">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Nostrum iste.
              </p>
            </div>
          </div>

          <div class="d-flex feature-h">
            <span class="wrap-icon me-3">
              <span class="icon-person"></span>
            </span>
            <div class="feature-text">
              <h3 class="heading">Top Rated Agents</h3>
              <p class="text-black-50">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Nostrum iste.
              </p>
            </div>
          </div>

          <div class="d-flex feature-h">
            <span class="wrap-icon me-3">
              <span class="icon-security"></span>
            </span>
            <div class="feature-text">
              <h3 class="heading">Legit Properties</h3>
              <p class="text-black-50">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Nostrum iste.
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="row section-counter mt-5">
        <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="counter-wrap mb-5 mb-lg-0">
            <span class="number"><span class="countup text-primary">3298</span></span>
            <span class="caption text-black-50"># of Buy Properties</span>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
          <div class="counter-wrap mb-5 mb-lg-0">
            <span class="number"><span class="countup text-primary">2181</span></span>
            <span class="caption text-black-50"># of Sell Properties</span>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
          <div class="counter-wrap mb-5 mb-lg-0">
            <span class="number"><span class="countup text-primary">9316</span></span>
            <span class="caption text-black-50"># of All Properties</span>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
          <div class="counter-wrap mb-5 mb-lg-0">
            <span class="number"><span class="countup text-primary">7191</span></span>
            <span class="caption text-black-50"># of Agents</span>
          </div>
        </div>
      </div> -->
    </div>
  </div>

  <div class="section">
    <div class="row justify-content-center footer-cta" data-aos="fade-up">
      <div class="col-lg-7 mx-auto text-center">
        <h2 class="mb-4">Tertarik untuk bergabung menjadi Agen?</h2>
        <p>
          <a href="#" target="_blank" class="btn btn-primary text-white py-3 px-4">Daftar Sekarang</a>
        </p>
      </div>
      <!-- /.col-lg-7 -->
    </div>
    <!-- /.row -->
  </div>

  <div class="section section-5 bg-light">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-lg-6 mb-5">
          <h2 class="font-weight-bold heading text-primary mb-4">
            Our Team
          </h2>
          <p class="text-black-50">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
            enim pariatur similique debitis vel nisi qui reprehenderit totam?
            Quod maiores.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
          <div class="h-100 person">
            <img src="images/dashboard/gb-1.jpg" alt="Image" class="img-fluid" />

            <div class="person-contents">
              <h2 class="mb-0"><a href="#">Dudi Nugraha</a></h2>
              <span class="meta d-block mb-3">Komisaris</span>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
          <div class="h-100 person">
            <img src="images/dashboard/gb-2.jpg" alt="Image" class="img-fluid" />

            <div class="person-contents">
              <h2 class="mb-0"><a href="#">M. Oma Syahputra</a></h2>
              <span class="meta d-block mb-3">Direktur</span>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
          <div class="h-100 person">
            <img src="images/dashboard/gb-3.jpg" alt="Image" class="img-fluid" />

            <div class="person-contents">
              <h2 class="mb-0"><a href="#">Fera Rustandi</a></h2>
              <span class="meta d-block mb-3">Executive Finance</span>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
          <div class="h-100 person">
            <img src="images/dashboard/gb-4.jpg" alt="Image" class="img-fluid" />

            <div class="person-contents">
              <h2 class="mb-0"><a href="#">Juan Donovan</a></h2>
              <span class="meta d-block mb-3">Marketing Executive</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include('inc/inc_foot.html'); ?>

  <div class="row mt-5">
    <div class="col-12 text-center">
      <!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
              **==========
            -->

      <p>
        Copyright &copy;
        <script>
          document.write(new Date().getFullYear());
        </script>
        . All Rights Reserved. &mdash; Designed with love by
        <a href="https://untree.co">Untree.co</a>
        <!-- License information: https://untree.co/license/ -->
      </p>
      <div>
        Distributed by
        <a href="https://themewagon.com/" target="_blank">themewagon</a>
      </div>
    </div>
  </div>
  </div>
  <!-- /.container -->
  </div>
  <!-- /.site-footer -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.fade-in').addClass('show');
    });
  </script>

  <!-- Preloader -->
  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/tiny-slider.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/navbar.js"></script>
  <script src="js/counter.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>