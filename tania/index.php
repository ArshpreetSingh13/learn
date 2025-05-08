<?php
session_start();
include("header.php");
?>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

      <div class="container">
        <h2 data-aos="fade-up" data-aos-delay="100">Learning Today,<br>Leading Tomorrow</h2>
        <p data-aos="fade-up" data-aos-delay="200">We are team of trainers to make you trained.</p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
          <a href="login.php" class="btn-get-started">Login</a>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
            <h3>Welcome to Learning Lounge!!</h3>
            <p class="fst-italic">
           Learning Lounge is your one-stop destination for mastering technical skills through high quality courses.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Learn from industry professionals with real-world experience.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Study at your own pace with easy access to course material.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Explore a wide range of technical skills to enhance your career.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Get high-quality education at budget-friendly prices.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Learn anytime,anywhere with lifetime access to your courses.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Courses designed for all skill levels, from newbies to experts.</span></li>
            </ul>
            <a href="register.php" class="read-more"><span>Register</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

 

    <!-- Why Us Section -->
    <section id="why-us" class="section why-us">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Why Choose Our Website?</h3>
              <p>
               In today's fast-paced world,having the right technical skills are essential for career growth. At Learning Lounge,we provide high-quality courses designed to help you learn and master various technical skills with ease. Whether you are a beginner or a professional we ensures an engaging and effective learning.
          
              </p>
              <div class="text-center">
              
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

              <div class="col-xl-4">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>Lifetime Access</h4>
                  <p>Unlike other platforms that limit access,we offer lifetime access to all purchased courses.</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>Affordable Learning</h4>
                  <p>Our courses come with competitive pricing,no hidden fees, and exclusive learning material .</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>Expert-Curated Content</h4>
                  <p>Our courses are crafted by industry experts,ensuring up-to-date and practical knowledge.</p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Why Us Section -->

   

    <section id="courses" class="courses section">

<div class="container">

    <div class="row">
    <?php
            if(isset($_GET['msg'])){
                echo "<div class='alert alert-primary' role='alert'> $_GET[msg]</div>";
            }

            ?>


        <?php

        include("config.php");

        $query = "SELECT * FROM `course_category` limit 3";

        $res = mysqli_query($db, $query);

        while ($data = mysqli_fetch_assoc($res)) {

            
            ?>
         

          

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <a href="single_course.php?id=<?php echo $data['id'];?>">

                <div class="course-item">
                    <img src="course_image/<?php echo $data['image'];
                    ?>"
                    class="img-fluid" alt="...">

                    

                  


                


                    <div class="course-content">
                        <div class="d-flex justify-content-between align-items-center mb-3">

                            <p class="price">
                                <?php
                                echo $data["course_price"];
                                ?>
                            </p>
                        </div>

                        <h3><a href="course-details.php">
                                <?php
                                echo $data["course_name"];
                                ?></p>
                            </a></h3>
                        <p class="description"><?php echo $data['description']; ?> </p>

                    </div>
                </div>
                </a>
            </div> <!-- End Course Item-->
            

            <?php
        }

        ?>





    </div>

</div>

</section><!-- /Courses Section -->

    <!-- Trainers Index Section -->
   

  </main>

  <?php
 include("footer.php");
 ?>

 