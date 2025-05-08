<?php
include("header.php")
?>

<main>
  <!-- Page Title -->
  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1>Register<br></h1>

          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li class="current">Register<br></li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->
  <!-- Contact Section -->
  <section id="contact" class="contact section">



    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4 ">



        <div class="col-lg-8 offset-2 ">

          <?php

          if (isset($_GET['msg'])) {
            echo "<div class='alert alert-success' role='alert'>$_GET[msg]</div>";
          }
          ?>





          <form action="submit.php" method="post" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4 bg-light mt-3">
              <div class="col-md-12">
                <input type="text" class="form-control" name="username" placeholder="username">
              </div>
              <div class="col-md-12">
                <input type="email" class="form-control" name="email" placeholder="email">

              </div>
              <div class="col-md-12">
                <input type="number" class="form-control" name="contact" placeholder="contact">

              </div>
              <div class="col-md-12">
                <input type="text" class="form-control" name="address" placeholder="address">

              </div>





              <div class="col-md-12">
                <input type="password" class="form-control" name="password" placeholder="Password" required="">
              </div>


              <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-success rounded-pill m-2 px-3">SUBMIT</button>



              </div>

            </div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>

  </section><!-- /Contact Section -->

</main>

<?php
include("footer.php")
?>