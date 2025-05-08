<?php

session_start();
if(!isset($_SESSION["email"])){
    echo "<script> window.location.assign('admin_login.php?msg=Login First please') </script>";
}

include("admin_heading.php");
  ?>

<main>
  <!-- Page Title -->
  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1>ADD COURSE<br></h1>
          
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li class="current">ADD COURSE<br></li>
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

          <form method="post" enctype="multipart/form-data" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4 bg-light pt-3 mt-5">

              <h1 class="text-center text-success">Enter Your Course</h1>

              <div class="col-md-12 ">
                <input type="text" class="form-control rounded-3" name="course_name" placeholder="Course Name"
                  required="">
              </div>
              <div class="col-md-12 ">
                <input type="number" class="form-control  rounded-3" name="course_price" placeholder="Course Price"
                  required="">
              </div>

              <div class="col-md-12">

                <textarea name="description" type="text" class="form-control  rounded-3" placeholder="Course Details"
                  required=""></textarea>
              </div>


              <div class="col-md-12 ">
                <input type="text" class="form-control  rounded-3" name="free_video" placeholder="YT Video" required="">
              </div>

              <div class="col-md-12 ">
                <input type="file" class="form-control  rounded-3" name="image" placeholder="Upload your cover Page"
                  required="">
              </div>

              <div class="col-md-12 text-center">
                <button type="submit" name="submit_btn" class="btn btn-success rounded-pill m-2 px-3">SUBMIT</button>
              </div>

            </div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>

  </section><!-- /Contact Section -->

</main>

<?php
include("footer.php") ?>


<?php

if (isset($_REQUEST["submit_btn"])) {
  $course_name = $_REQUEST["course_name"];
  $course_price = $_REQUEST["course_price"];
  $description = $_REQUEST["description"];
  $free_video = $_REQUEST["free_video"];
  $image = $_FILES["image"];

  $tmp = $image["tmp_name"];

  $new_name = rand() . "-" . $image["name"];

  move_uploaded_file($tmp, "course_image/" . $new_name);

  include("config.php");

  $query = "INSERT INTO `course_category`( `image`, `course_name`, `course_price`, `description`, `free_video`) VALUES ('$new_name','$course_name','$course_price','$description','$free_video')";


  $res = mysqli_query($db, $query);

  if ($res > 0) {
    echo "<script>window.location.assign('add_course.php?msg=Added successfully')</script>";
  } else {
    echo "<script>window.location.assign('add_course.php?msg=Addition Unsuccessful')</script>";
  }
}







?>