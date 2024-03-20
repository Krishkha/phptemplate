<?php include "header.php";
include "connection.php";
include "functions/about_function.php";
include "functions/service_function.php";
include "functions/testimonial_function.php";
include "functions/portfolio_function.php";
include "functions/team_function.php";
include "functions/slider_function.php";
include "functions/price_function.php";
include "functions/blog_function.php";
include "functions/contact_function.php";


?>

<?php 

    
            // *import valus for About
            $slider_title = fetch_slider('slider_title');
            $slider_desc = fetch_slider('slider_desc');
            $button_text = fetch_slider('button_text');
            $button_link = fetch_slider('button_link');
            $video_text = fetch_slider('video_text');
            $video_link = fetch_slider('video_link');
    ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2><?php echo $slider_title ?></h2>
          <p><?php echo $slider_desc ?></p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="<?php echo $button_link ?>" class="btn-get-started"><?php echo $button_text ?></a>
            <a href="<?php echo $video_link ?>" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span><?php echo $video_text?></span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-easel"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Lorem Ipsum</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gem"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Sed ut perspiciatis</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Magni Dolores</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-command"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Nemo Enim</a></h4>
            </div>
          </div><!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->

    <?php 

    
            // *import valus for About
            $about_title = fetch_about('about_title');
            $box1_img = fetch_about('box1_img');
            $box2_img = fetch_about('box2_img');
            // $box2_video = fetch_about('$box2_video');
            $clients = fetch_about('clients');
            $projects = fetch_about('projects');
            $hours = fetch_about('hours');
            $box3_title = fetch_about('box3_title');
            $box3_btn_link = fetch_about('box3_btn_link');
            $box3_video = fetch_about('box3_video');
            
    ?>


    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2><?php echo $about_title?></h2>
          <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <h3>Voluptatem dignissimos provident quasi corporis</h3>
            <img src="<?php echo $box1_img?>" class="img-fluid rounded-4 mb-4" alt="">
            <p>Ut fugiat ut sunt quia veniam. Voluptate perferendis perspiciatis quod nisi et. Placeat debitis quia recusandae odit et consequatur voluptatem. Dignissimos pariatur consectetur fugiat voluptas ea.</p>
            <p>Temporibus nihil enim deserunt sed ea. Provident sit expedita aut cupiditate nihil vitae quo officia vel. Blanditiis eligendi possimus et in cum. Quidem eos ut sint rem veniam qui. Ut ut repellendus nobis tempore doloribus debitis explicabo similique sit. Accusantium sed ut omnis beatae neque deleniti repellendus.</p>
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
              </p>

              <div class="position-relative mt-4">
                <img src="<?php echo $box2_img?>" class="img-fluid rounded-4" alt="">
                <a href="<?php echo $$box2_video ?>" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-out">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 align-items-center">

          <div class="col-lg-6">
            <img src="assets/img/stats-img.svg" alt="" class="img-fluid">
          </div>

          <div class="col-lg-6">

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $clients ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Happy Clients</strong> consequuntur quae diredo para mesta</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $projects ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projects</strong> adipisci atque cum quia aut</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $hours ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
            </div><!-- End Stats Item -->

          </div>

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container text-center" data-aos="zoom-out">
        <a href="<?php echo $box3_video ?>" class="glightbox play-btn"></a>
        <h3><?php echo $box3_title ?></h3>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a class="cta-btn" href="<?php echo $box3_btn_link ?>"><?php echo $box3_title ?></a>
      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Our Services Section ======= -->
    <?php 

    // *import valus for Services:
        $service_title = fetch_service('service_title');
        $service_box1_logo = fetch_service('service_box1_logo');
        $service_box1_title = fetch_service('service_box1_title');
        $service_box2_logo = fetch_service('service_box2_logo');
        $service_box2_title = fetch_service('service_box2_title');
        $service_box3_logo = fetch_service('service_box3_logo');
        $service_box3_title = fetch_service('service_box3_title');
        $service_box4_logo = fetch_service('service_box4_logo');
        $service_box4_title = fetch_service('service_box4_title');
        $service_box5_logo = fetch_service('service_box5_logo');
        $service_box5_title = fetch_service('service_box5_title');
        $service_box6_logo = fetch_service('service_box6_logo');
        $service_box6_title = fetch_service('service_box6_title');
        
        
    
    
    ?>


    <section id="services" class="services sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2><?php echo $service_title ?></h2>
          <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="<?php echo $service_box1_logo ?>"></i>
              </div>
              <h3><?php echo $service_box1_title ?></h3>
              <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="<?php echo $service_box2_logo ?>"></i>
              </div>
              <h3><?php echo $service_box2_title ?></h3>
              <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="<?php echo $service_box3_logo ?>"></i>
              </div>
              <h3><?php echo $service_box3_title ?></h3>
              <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="<?php echo $service_box4_logo ?>"></i>
              </div>
              <h3><?php echo $service_box4_title ?></h3>
              <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="<?php echo $service_box5_logo ?>"></i>
              </div>
              <h3><?php echo $service_box5_title ?></h3>
              <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="<?php echo $service_box6_logo ?>"></i>
              </div>
              <h3><?php echo $service_box6_title ?></h3>
              <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Testimonials Section ======= -->

    <?php 
    
    // *import valus for Testimonials: 

      $test_title = fetch_testimonial('test_title');
      $test_box1_img = fetch_testimonial('test_box1_img');
      $test_box1_name = fetch_testimonial('test_box1_name');
      $test_box1_job = fetch_testimonial('test_box1_job');
      
      $test_box1_desc = fetch_testimonial('test_box1_desc');
      $test_box2_img = fetch_testimonial('test_box2_img');
      $test_box2_name = fetch_testimonial('test_box2_name');
      $test_box2_job = fetch_testimonial('test_box2_job');
      $test_box2_desc = fetch_testimonial('test_box2_desc');

      $test_box3_img = fetch_testimonial('test_box3_img');
      $test_box3_name = fetch_testimonial('test_box3_name');
      $test_box3_job = fetch_testimonial('test_box3_job');
      $test_box3_desc = fetch_testimonial('test_box3_desc');

      $test_box4_img = fetch_testimonial('test_box4_img');
      $test_box4_name = fetch_testimonial('test_box4_name');
      $test_box4_job = fetch_testimonial('test_box4_job');
      $test_box4_desc = fetch_testimonial('test_box4_desc');

      $test_box5_img = fetch_testimonial('test_box5_img');
      $test_box5_name = fetch_testimonial('test_box5_name');
      $test_box5_job = fetch_testimonial('test_box5_job');
      $test_box5_desc = fetch_testimonial('test_box5_desc');

    
    
    
    ?>
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2><?php echo $test_title ?></h2>
          <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti fignissimos eos quam</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="<?php echo $test_box1_img ?>" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3><?php echo $test_box1_name ?></h3>
                      <h4><?php echo $test_box1_job ?></h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <?php echo $test_box1_desc ?>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="<?php echo $test_box2_img ?>" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3><?php echo $test_box2_name ?></h3>
                      <h4><?php echo $test_box2_job ?></h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <?php echo $test_box2_desc ?>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="<?php echo $test_box3_img ?>" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3><?php echo $test_box3_name ?></h3>
                      <h4><?php echo $test_box3_job ?></h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <?php echo $test_box3_desc ?>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="<?php echo $test_box4_img ?>" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3><?php echo $test_box4_name ?></h3>
                      <h4><?php echo $test_box4_job ?></h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <?php echo $test_box4_desc ?>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="<?php echo $test_box5_img ?>" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3><?php echo $test_box5_name ?></h3>
                      <h4><?php echo $test_box5_job ?></h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <?php echo $test_box5_desc ?>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->

    <?php

    // *import valus for Portfolio: 


      $port_title = fetch_port('port_title');
      $port_all = fetch_port('port_all');
      $port_app = fetch_port('port_app');
      $port_product = fetch_port('port_product');
      $port_brand = fetch_port('port_brand');
      $port_books = fetch_port('port_books');

      $port_app_box1_img = fetch_port('port_app_box1_img');
      $port_app_box1_title = fetch_port('port_app_box1_title');
      
      $port_product_box1_img = fetch_port('port_product_box1_img');
      $port_product_box1_title = fetch_port('port_product_box1_title');
      
      $port_brand_box1_img = fetch_port('port_brand_box1_img');
      $port_brand_box1_title = fetch_port('port_brand_box1_title');

      $port_books_box1_img = fetch_port('port_books_box1_img');
      $port_books_box1_title = fetch_port('port_books_box1_title');

      $port_box2_app_img = fetch_port('port_box2_app_img');
      $port_box2_app_title = fetch_port('port_box2_app_title');

      $port_box2_product_img = fetch_port('port_box2_product_img');
      $port_box2_product_title = fetch_port('port_box2_product_title');

      $port_box2_brand_img = fetch_port('port_box2_brand_img');
      $port_box2_brand_title = fetch_port('port_box2_brand_title');

      $port_box2_books_img = fetch_port('port_box2_books_img');
      $port_box2_books_title = fetch_port('port_box2_books_title');

      $port_box3_app_img = fetch_port('port_box3_app_img');
      $port_box3_app_title = fetch_port('port_box3_app_title');

      $port_box3_product_img = fetch_port('port_box3_product_img');
      $port_box3_product_title = fetch_port('port_box3_product_title');

      $port_box3_brand_img = fetch_port('port_box3_brand_img');
      $port_box3_brand_title = fetch_port('port_box3_brand_title');

      $port_box3_books_img = fetch_port('port_box3_books_img');
      $port_box3_books_title = fetch_port('port_box3_books_title');
      
      $port_detail_link = fetch_port('port_detail_link');
      
    ?>

    <section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2><?php echo $port_title ?></h2>
          <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div>
            <ul class="portfolio-flters">
              <li data-filter="*" class="filter-active"><?php echo $port_all ?></li>
              <li data-filter=".filter-app"><?php echo $port_app ?></li>
              <li data-filter=".filter-product"><?php echo $port_product ?></li>
              <li data-filter=".filter-branding"><?php echo $port_brand ?></li>
              <li data-filter=".filter-books"><?php echo $port_books ?></li>
            </ul><!-- End Portfolio Filters -->
          </div>

          <div class="row gy-4 portfolio-container">

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="<?php echo $port_app_box1_img ?>" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="<?php echo $port_detail_link ?>" title="More Details"><?php echo $port_app_box1_title ?></a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="<?php echo $port_product_box1_img ?>" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="<?php echo $port_detail_link ?>" title="More Details"><?php echo $port_product_box1_title ?></a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="<?php echo $port_brand_box1_img ?>" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="<?php echo $port_detail_link ?>" title="More Details"><?php echo $port_brand_box1_title ?></a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="<?php echo $port_books_box1_img ?>" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="<?php echo $port_detail_link ?>" title="More Details"><?php echo $port_books_box1_title ?></a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="<?php echo $$port_box2_app_img ?>" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="<?php echo $port_detail_link ?>" title="More Details"><?php echo $port_box2_app_title ?></a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="<?php echo $port_box2_product_img ?>" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/product-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="<?php echo $port_detail_link ?>" title="More Details"><?php echo $port_box2_product_title ?></a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="<?php echo $port_box2_brand_img ?>" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/branding-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="<?php echo $port_detail_link ?>" title="More Details"><?php echo $port_box2_brand_title ?></a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="<?php echo $port_box2_books_img ?>" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/books-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="<?php echo $port_detail_link ?>" title="More Details"><?php echo $port_box2_books_title ?></a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="<?php echo $port_box3_app_img ?>" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="<?php echo $port_detail_link ?>" title="More Details"><?php echo $port_box3_app_title ?></a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="<?php echo $port_box3_product_img ?>" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/product-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="<?php echo $port_detail_link ?>" title="More Details"><?php echo $port_box3_product_title ?></a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="<?php echo $port_box3_brand_img ?>" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/branding-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="<?php echo $port_detail_link ?>" title="More Details"><?php echo $port_box3_brand_title ?></a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="<?php echo $port_box3_books_img ?>" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/books-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="<?php echo $port_detail_link ?>" title="More Details"><?php echo $port_box3_books_title ?></a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Our Team Section ======= -->

    <?php 

      // *import valus for Team: 
        $team_title = fetch_team('team_title');

        $team_box1_img = fetch_team('team_box1_img');
        $team_box1_name = fetch_team('team_box1_name');
        $team_box1_job = fetch_team('team_box1_job');
        
        $team_box2_img = fetch_team('team_box2_img');
        $team_box2_name = fetch_team('team_box2_name');
        $team_box2_job = fetch_team('team_box2_job');

        $team_box3_img = fetch_team('team_box3_img');
        $team_box3_name = fetch_team('team_box3_name');
        $team_box3_job = fetch_team('team_box3_job');

        $team_box4_img = fetch_team('team_box4_img');
        $team_box4_name = fetch_team('team_box4_name');
        $team_box4_job = fetch_team('team_box4_job');

   
   
   
   ?>
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2><?php echo $team_title ?></h2>
          <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
        </div>

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="<?php echo $team_box1_img ?>" class="img-fluid" alt="">
              <h4><?php echo $team_box1_name ?></h4>
              <span><?php echo $team_box1_job ?></span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="<?php echo $team_box2_img ?>" class="img-fluid" alt="">
              <h4><?php echo $team_box2_name ?></h4>
              <span><?php echo $team_box2_job ?></span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="<?php echo $team_box3_img ?>" class="img-fluid" alt="">
              <h4><?php echo $team_box3_name ?></h4>
              <span><?php echo $team_box3_job ?></span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="<?php echo $team_box4_img ?>" class="img-fluid" alt="">
              <h4><?php echo $team_box4_name ?></h4>
              <span><?php echo $team_box4_job ?></span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Pricing Section ======= -->

    <?php 

      // *import valus for Pricing: 
        $price_title = fetch_price('price_title');
        $price_button_text = fetch_price('price_button_text');
        $price_button_link = fetch_price('price_button_link');

        
        $price_card1_title = fetch_price('price_card1_title');
        $price_card1_logo = fetch_price('price_card1_logo');
        $price_card1_price_currency = fetch_price('price_card1_price_currency');
        $price_card1_price = fetch_price('price_card1_price');
        
        $price_card2_title = fetch_price('price_card2_title');
        $price_card2_logo = fetch_price('price_card2_logo');
        $price_card2_price_currency = fetch_price('price_card2_price_currency');
        $price_card2_price = fetch_price('price_card2_price');
        
        $price_card3_title = fetch_price('price_card3_title');
        $price_card3_logo = fetch_price('price_card3_logo');
        $price_card3_price_currency = fetch_price('price_card3_price_currency');
        $price_card3_price = fetch_price('price_card3_price');



   
   
   
   ?>
    <section id="pricing" class="pricing sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2><?php echo $price_title ?></h2>
          <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
        </div>

        <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">

          <div class="col-lg-4">
            <div class="pricing-item">
              <h3><?php echo $price_card1_title ?></h3>
              <div class="icon">
                <i class="<?php echo $price_card1_logo ?>"></i>
              </div>
              <h4><sup><?php echo $price_card2_price_currency ?></sup><?php echo $price_card1_price ?><span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <div class="text-center"><a href="<?php echo $price_button_link ?>" class="buy-btn"><?php echo $price_button_text ?></a></div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4">
            <div class="pricing-item featured">
              <h3><?php echo $price_card2_title ?></h3>
              <div class="icon">
                <i class="<?php echo $price_card2_logo ?>"></i>
              </div>

              <h4><sup><?php echo $price_card2_price_currency ?></sup><?php echo $price_card2_price ?><span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <div class="text-center"><a href="<?php echo $price_button_link ?>" class="buy-btn"><?php echo $price_button_text ?></a></div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4">
            <div class="pricing-item">
              <h3><?php echo $price_card3_title ?></h3>
              <div class="icon">
                <i class="<?php echo $price_card3_logo ?>"></i>
              </div>
              <h4><sup><?php echo $price_card3_price_currency ?></sup><?php echo $price_card3_price ?><span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <div class="text-center"><a href="<?php echo $price_button_link ?>" class="buy-btn"><?php echo $price_button_text ?></a></div>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="content px-xl-5">
              <h3>Frequently Asked <strong>Questions</strong></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
            </div>
          </div>

          <div class="col-lg-8">

            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <span class="num">1.</span>
                    Non consectetur a erat nam at lectus urna duis?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <span class="num">2.</span>
                    Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <span class="num">3.</span>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <span class="num">4.</span>
                    Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <span class="num">5.</span>
                    Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                  </div>
                </div>
              </div><!-- # Faq item-->

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Recent Blog Posts Section ======= -->

    <?php 

    
            // *import valus for blogs:
            $blog_title = fetch_blog('blog_title');
            $blog_box1_img = fetch_blog('blog_box1_img');
            $blog_box1_category = fetch_blog('blog_box1_category');
            $blog_box1_heading = fetch_blog('blog_box1_heading');
            $blog_box1_heading_link = fetch_blog('blog_box1_heading_link');
            $blog_box1_author_img = fetch_blog('blog_box1_author_img');
            $blog_box1_author_name = fetch_blog('blog_box1_author_name');
            $blog_box1_date = fetch_blog('blog_box1_date');
            
            $blog_box2_img = fetch_blog('blog_box2_img');
            $blog_box2_category = fetch_blog('blog_box2_category');
            $blog_box2_heading = fetch_blog('blog_box2_heading');
            $blog_box2_heading_link = fetch_blog('blog_box2_heading_link');
            $blog_box2_author_img = fetch_blog('blog_box2_author_img');
            $blog_box2_author_name = fetch_blog('blog_box2_author_name');
            $blog_box2_date = fetch_blog('blog_box2_date');
            
            $blog_box3_img = fetch_blog('blog_box3_img');
            $blog_box3_category = fetch_blog('blog_box3_category');
            $blog_box3_heading = fetch_blog('blog_box3_heading');
            $blog_box3_heading_link = fetch_blog('blog_box3_heading_link');
            $blog_box3_author_img = fetch_blog('blog_box3_author_img');
            $blog_box3_author_name = fetch_blog('blog_box3_author_name');
            $blog_box3_date = fetch_blog('blog_box3_date');
    ?>
    <section id="recent-posts" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2><?php echo $blog_title ?></h2>
          <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto accusamus fugit aut qui distinctio</p>
        </div>

        <div class="row gy-4">

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="<?php echo $blog_box1_img ?>" alt="" class="img-fluid">
              </div>

              <p class="post-category"><?php echo $blog_box1_category ?></p>

              <h2 class="title">
                <a href="<?php echo $blog_box1_heading_link ?>"><?php echo $blog_box1_heading ?></a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="<?php echo $blog_box1_author_img ?>" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author"><?php echo $blog_box1_author_name ?></p>
                  <p class="post-date">
                    <time datetime="2022-01-01"><?php echo $blog_box1_date ?></time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="<?php echo $blog_box2_img ?>" alt="" class="img-fluid">
              </div>

              <p class="post-category"><?php echo $blog_box2_category ?></p>

              <h2 class="title">
                <a href="<?php echo $blog_box2_heading_link ?>"><?php echo $blog_box2_heading ?></a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="<?php echo $blog_box2_author_img ?>" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author"><?php echo $blog_box2_author_name ?></p>
                  <p class="post-date">
                    <time datetime="2022-01-01"><?php echo $blog_box2_date ?></time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="<?php echo $blog_box3_img ?>" alt="" class="img-fluid">
              </div>

              <p class="post-category"><?php echo $blog_box3_category ?></p>

              <h2 class="title">
                <a href="<?php echo $blog_box3_heading_link ?>"><?php echo $blog_box3_heading ?></a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="<?php echo $blog_box3_author_img ?>" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author"><?php echo $blog_box3_author_name ?></p>
                  <p class="post-date">
                    <time datetime="2022-01-01"><?php echo $blog_box3_date ?></time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

        </div><!-- End recent posts list -->

      </div>
    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= -->
    <?php 

    
            // *import valus for blogs:
            $contact_heading = fetch_contact('contact_heading');
            $contact_location_heading = fetch_contact('contact_location_heading');
            $contact_location_logo = fetch_contact('contact_location_logo');
            $contact_location_address = fetch_contact('contact_location_address');
            $contact_email_heading = fetch_contact('contact_email_heading');
            $contact_email_logo = fetch_contact('contact_email_logo');
            $contact_email = fetch_contact('contact_email');
            $contact_call_heading  = fetch_contact('contact_call_heading');
            $contact_call_logo  = fetch_contact('contact_call_logo');
            $contact_call_number  = fetch_contact('contact_call_number');
            $contact_open_hours_heading  = fetch_contact('contact_open_hours_heading');
            $contact_open_hours_logo  = fetch_contact('contact_open_hours_logo');
            $contact_open_time  = fetch_contact('contact_open_time');
    ?>
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2><?php echo $contact_heading ?></h2>
          <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="<?php echo $contact_location_logo ?> flex-shrink-0"></i>
                <div>
                  <h4><?php echo $contact_location_heading ?></h4>
                  <p><?php echo $contact_location_address ?></p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="<?php echo $contact_email_logo ?> flex-shrink-0"></i>
                <div>
                  <h4><?php echo $contact_email_heading ?></h4>
                  <p><?php echo $contact_email ?></p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="<?php echo $contact_call_logo ?> flex-shrink-0"></i>
                <div>
                  <h4><?php echo $contact_call_heading ?></h4>
                  <p><?php echo $contact_call_number ?></p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="<?php echo $contact_open_hours_logo ?> flex-shrink-0"></i>
                <div>
                  <h4><?php echo $contact_open_hours_heading ?></h4>
                  <p><?php echo $contact_open_time ?></p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <!-- <div class="error-message"></div> -->
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php include "footer.php"; ?>