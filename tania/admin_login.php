<?php
session_start();
include("header.php")
?>

<main>
  <!-- Page Title -->
  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1>Login<br></h1>
          
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li class="current">Login<br></li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->
  <!-- Contact Section -->
  <section id="contact" class="contact section">



    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4 mt-3">



        <div class="col-lg-8 offset-2 ">

          <form method="post" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4 bg-light">
              <?php

              if (isset($_GET['msg'])) {
                echo "<div class='alert alert-success' role='alert'>$_GET[msg]</div>";
              }
              ?>



              <div class="col-md-12 ">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
              </div>

              <div class="col-md-12">
                <input type="password" class="form-control" name="password" placeholder="Password" required="">
              </div>




              <div class="col-md-12 text-center">

                <button type="submit" name="submit_btn" class="btn btn-success rounded-pill m-2 px-3">SUBMIT</button>

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
</main>

<?php
if(isset($_REQUEST["submit_btn"])){
    $email=$_REQUEST["email"];
    $password=MD5($_REQUEST["password"]);
    include("config.php");
    $query="SELECT * from `admin` where `email`='$email' and `password`='$password'";
    $res=mysqli_query($db,$query);
  
   if( mysqli_num_rows($res)>0){

    session_start();
    $_SESSION["email"]= $email;
    $_SESSION["password"]= $password;


    echo "<script>window.location.assign('dashboard.php?msg=Login successfully!!')</script>";
   }
   else{
    echo "<script>window.location.assign('admin_login.php?msg=Invalid creds!!')</script>";
   }
}
?>