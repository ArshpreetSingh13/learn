<?php
session_start();
include("header.php");
?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>About Us<br></h1>
           
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">About Us<br></li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

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


 

   

  </main>

 <?php
 include("footer.php");
 ?>

